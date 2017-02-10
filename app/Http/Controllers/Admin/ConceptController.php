<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateConceptRequest;
use App\Http\Requests\UpdateConceptRequest;
use App\Repositories\ConceptRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConceptController extends AppBaseController
{
    /** @var  ConceptRepository */
    private $conceptRepository;

    public function __construct(ConceptRepository $conceptRepo)
    {
        $this->conceptRepository = $conceptRepo;
    }

    /**
     * Display a listing of the Concept.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->conceptRepository->pushCriteria(new RequestCriteria($request));
        $concepts = $this->conceptRepository->all();

        return view('concepts.index')
            ->with('concepts', $concepts);
    }

    /**
     * Show the form for creating a new Concept.
     *
     * @return Response
     */
    public function create()
    {
        return view('concepts.create');
    }

    /**
     * Store a newly created Concept in storage.
     *
     * @param CreateConceptRequest $request
     *
     * @return Response
     */
    public function store(CreateConceptRequest $request)
    {
        $input = $request->all();

        $concept = $this->conceptRepository->create($input);

        Flash::success('Concept saved successfully.');

        return redirect(route('concepts.index'));
    }

    /**
     * Display the specified Concept.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $concept = $this->conceptRepository->findWithoutFail($id);

        if (empty($concept)) {
            Flash::error('Concept not found');

            return redirect(route('concepts.index'));
        }

        return view('concepts.show')->with('concept', $concept);
    }

    /**
     * Show the form for editing the specified Concept.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $concept = $this->conceptRepository->findWithoutFail($id);

        if (empty($concept)) {
            Flash::error('Concept not found');

            return redirect(route('concepts.index'));
        }

        return view('concepts.edit')->with('concept', $concept);
    }

    /**
     * Update the specified Concept in storage.
     *
     * @param  int              $id
     * @param UpdateConceptRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConceptRequest $request)
    {
        $concept = $this->conceptRepository->findWithoutFail($id);

        if (empty($concept)) {
            Flash::error('Concept not found');

            return redirect(route('concepts.index'));
        }

        $concept = $this->conceptRepository->update($request->all(), $id);

        Flash::success('Concept updated successfully.');

        return redirect(route('concepts.index'));
    }

    /**
     * Remove the specified Concept from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $concept = $this->conceptRepository->findWithoutFail($id);

        if (empty($concept)) {
            Flash::error('Concept not found');

            return 0;
        }

        $this->conceptRepository->delete($id);

        Flash::success('Concept deleted successfully.');

        return 1;
    }
}
