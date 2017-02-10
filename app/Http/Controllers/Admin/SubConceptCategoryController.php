<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubConceptCategoryRequest;
use App\Http\Requests\UpdateSubConceptCategoryRequest;
use App\Models\Concept;
use App\Models\SubConcept;
use App\Repositories\SubConceptCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubConceptCategoryController extends AppBaseController
{
    /** @var  SubConceptCategoryRepository */
    private $subConceptCategoryRepository;

    public function __construct(SubConceptCategoryRepository $subConceptCategoryRepo)
    {
        $this->subConceptCategoryRepository = $subConceptCategoryRepo;
    }

    /**
     * Display a listing of the SubConceptCategory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subConceptCategoryRepository->pushCriteria(new RequestCriteria($request));
        $subConceptCategories = $this->subConceptCategoryRepository->all();

        return view('sub_concept_categories.index')
            ->with('subConceptCategories', $subConceptCategories);
    }

    /**
     * Show the form for creating a new SubConceptCategory.
     *
     * @return Response
     */
    public function create()
    {
        $concepts =  ['' => ''] + Concept::pluck('name', 'id')->toArray();
        $sub_concepts =  ['' => ''] + SubConcept::pluck('name', 'id')->toArray();
        return view('sub_concept_categories.create',compact('concepts','sub_concepts'));
    }

    /**
     * Store a newly created SubConceptCategory in storage.
     *
     * @param CreateSubConceptCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateSubConceptCategoryRequest $request)
    {
        $input = $request->all();

        $subConceptCategory = $this->subConceptCategoryRepository->create($input);

        Flash::success('Sub Concept Category saved successfully.');

        return redirect(route('sub_concept_categories.index'));
    }

    /**
     * Display the specified SubConceptCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subConceptCategory = $this->subConceptCategoryRepository->findWithoutFail($id);

        if (empty($subConceptCategory)) {
            Flash::error('Sub Concept Category not found');

            return redirect(route('sub_concept_categories.index'));
        }

        return view('sub_concept_categories.show')->with('subConceptCategory', $subConceptCategory);
    }

    /**
     * Show the form for editing the specified SubConceptCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subConceptCategory = $this->subConceptCategoryRepository->findWithoutFail($id);

        if (empty($subConceptCategory)) {
            Flash::error('Sub Concept Category not found');

            return redirect(route('sub_concept_categories.index'));
        }
        $concepts =  ['' => ''] + Concept::pluck('name', 'id')->toArray();
        $sub_concepts =  ['' => ''] + SubConcept::pluck('name', 'id')->toArray();

        return view('sub_concept_categories.edit',compact('concepts','sub_concepts'))->with('subConceptCategory', $subConceptCategory);
    }

    /**
     * Update the specified SubConceptCategory in storage.
     *
     * @param  int              $id
     * @param UpdateSubConceptCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubConceptCategoryRequest $request)
    {
        $subConceptCategory = $this->subConceptCategoryRepository->findWithoutFail($id);

        if (empty($subConceptCategory)) {
            Flash::error('Sub Concept Category not found');

            return redirect(route('sub_concept_categories.index'));
        }

        $subConceptCategory = $this->subConceptCategoryRepository->update($request->all(), $id);

        Flash::success('Sub Concept Category updated successfully.');

        return redirect(route('sub_concept_categories.index'));
    }

    /**
     * Remove the specified SubConceptCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subConceptCategory = $this->subConceptCategoryRepository->findWithoutFail($id);

        if (empty($subConceptCategory)) {
            Flash::error('Sub Concept Category not found');

            return 0;
        }

        $this->subConceptCategoryRepository->delete($id);

        Flash::success('Sub Concept Category deleted successfully.');

        return 1;
    }
}
