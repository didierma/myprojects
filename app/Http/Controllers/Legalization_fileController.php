<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLegalization_fileRequest;
use App\Http\Requests\UpdateLegalization_fileRequest;
use App\Repositories\Legalization_fileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Legalization_fileController extends AppBaseController
{
    /** @var  Legalization_fileRepository */
    private $legalizationFileRepository;

    public function __construct(Legalization_fileRepository $legalizationFileRepo)
    {
        $this->legalizationFileRepository = $legalizationFileRepo;
    }

    /**
     * Display a listing of the Legalization_file.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->legalizationFileRepository->pushCriteria(new RequestCriteria($request));
        $legalizationFiles = $this->legalizationFileRepository->all();

        return view('legalization_files.index')
            ->with('legalizationFiles', $legalizationFiles);
    }

    /**
     * Show the form for creating a new Legalization_file.
     *
     * @return Response
     */
    public function create()
    {
        return view('legalization_files.create');
    }

    /**
     * Store a newly created Legalization_file in storage.
     *
     * @param CreateLegalization_fileRequest $request
     *
     * @return Response
     */
    public function store(CreateLegalization_fileRequest $request)
    {
        $input = $request->all();
//dd($input);
        $folder = $request->input('activity_id');

        $path = userBasePathFileUpload().$folder;

        $file = $request->file('file');
        $extension = $request->input('extension');
        $originalName= $file->getClientOriginalName();

        $fileName = time() . '.' . $extension;

        if($file->move($path, $fileName)){

            $data = array(
                'legalization_id'=>0,
                'name'=> $fileName,
                'original_name'=> $originalName
            );

            $legalizationFile = $this->legalizationFileRepository->create($data);
            return $legalizationFile->id;
        }else{
            return 0;
        }
    }

    /**
     * Display the specified Legalization_file.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $legalizationFile = $this->legalizationFileRepository->findWithoutFail($id);

        if (empty($legalizationFile)) {
            Flash::error('Legalization File not found');

            return redirect(route('legalizationFiles.index'));
        }

        return view('legalization_files.show')->with('legalizationFile', $legalizationFile);
    }

    /**
     * Show the form for editing the specified Legalization_file.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $legalizationFile = $this->legalizationFileRepository->findWithoutFail($id);

        if (empty($legalizationFile)) {
            Flash::error('Legalization File not found');

            return redirect(route('legalizationFiles.index'));
        }

        return view('legalization_files.edit')->with('legalizationFile', $legalizationFile);
    }

    /**
     * Update the specified Legalization_file in storage.
     *
     * @param  int              $id
     * @param UpdateLegalization_fileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLegalization_fileRequest $request)
    {
        $legalizationFile = $this->legalizationFileRepository->findWithoutFail($id);

        if (empty($legalizationFile)) {
            Flash::error('Legalization File not found');

            return redirect(route('legalizationFiles.index'));
        }

        $legalizationFile = $this->legalizationFileRepository->update($request->all(), $id);

        Flash::success('Legalization File updated successfully.');

        return redirect(route('legalizationFiles.index'));
    }

    /**
     * Remove the specified Legalization_file from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $legalizationFile = $this->legalizationFileRepository->findWithoutFail($id);

        if (empty($legalizationFile)) {
            Flash::error('Legalization File not found');

            return redirect(route('legalizationFiles.index'));
        }

        $this->legalizationFileRepository->delete($id);

        Flash::success('Legalization File deleted successfully.');

        return redirect(route('legalizationFiles.index'));
    }
}
