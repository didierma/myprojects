<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubConceptRequest;
use App\Http\Requests\UpdateSubConceptRequest;
use App\Models\Concept;
use App\Repositories\SubConceptRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubConceptController extends AppBaseController
{
    /** @var  SubConceptRepository */
    private $subConceptRepository;

    public function __construct(SubConceptRepository $subConceptRepo)
    {
        $this->subConceptRepository = $subConceptRepo;
    }

    /**
     * Display a listing of the SubConcept.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subConceptRepository->pushCriteria(new RequestCriteria($request));
        $subConcepts = $this->subConceptRepository->all();

        return view('sub_concepts.index')
            ->with('subConcepts', $subConcepts);
    }

    /**
     * Show the form for creating a new SubConcept.
     *
     * @return Response
     */
    public function create()
    {
        $concepts =  ['' => ''] + Concept::pluck('name', 'id')->toArray();
        return view('sub_concepts.create',compact('concepts'));
    }

    /**
     * Store a newly created SubConcept in storage.
     *
     * @param CreateSubConceptRequest $request
     *
     * @return Response
     */
    public function store(CreateSubConceptRequest $request)
    {
        $input = $request->all();

        $subConcept = $this->subConceptRepository->create($input);

        Flash::success('Sub Concept saved successfully.');

        return redirect(route('sub_concepts.index'));
    }

    /**
     * Display the specified SubConcept.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subConcept = $this->subConceptRepository->findWithoutFail($id);

        if (empty($subConcept)) {
            Flash::error('Sub Concept not found');

            return redirect(route('sub_concepts.index'));
        }

        return view('sub_concepts.show')->with('subConcept', $subConcept);
    }

    /**
     * Show the form for editing the specified SubConcept.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subConcept = $this->subConceptRepository->findWithoutFail($id);

        if (empty($subConcept)) {
            Flash::error('Sub Concept not found');

            return redirect(route('sub_concepts.index'));
        }
        $concepts =  ['' => ''] + Concept::pluck('name', 'id')->toArray();

        return view('sub_concepts.edit')->with('concepts', $concepts)->with('subConcept', $subConcept);
    }

    /**
     * Update the specified SubConcept in storage.
     *
     * @param  int              $id
     * @param UpdateSubConceptRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubConceptRequest $request)
    {
        $subConcept = $this->subConceptRepository->findWithoutFail($id);

        if (empty($subConcept)) {
            Flash::error('Sub Concept not found');

            return redirect(route('sub_concepts.index'));
        }

        $subConcept = $this->subConceptRepository->update($request->all(), $id);

        Flash::success('Sub Concept updated successfully.');

        return redirect(route('sub_concepts.index'));
    }

    /**
     * Remove the specified SubConcept from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subConcept = $this->subConceptRepository->findWithoutFail($id);

        if (empty($subConcept)) {
            Flash::error('Sub Concept not found');

            return 0;
        }

        $this->subConceptRepository->delete($id);

        Flash::success('Sub Concept deleted successfully.');

        return 1;
    }
}
