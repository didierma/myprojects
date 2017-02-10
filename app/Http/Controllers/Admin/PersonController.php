<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreatePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\PersonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PersonController extends AppBaseController
{
    /** @var  PersonRepository */
    private $personRepository;

    public function __construct(PersonRepository $personRepo)
    {
        $this->personRepository = $personRepo;
    }

    /**
     * Display a listing of the Person.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->personRepository->pushCriteria(new RequestCriteria($request));
        $people = $this->personRepository->all();

        return view('people.index')
            ->with('people', $people);
    }

    /**
     * Show the form for creating a new Person.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name','id')->toArray();
        $permissions = Permission::pluck('display_name','id')->toArray();
        $rolesSelected =array();
        $permissionsSelected =array();
        return view('people.create',compact('roles','rolesSelected','permissions','permissionsSelected'));
    }

    /**
     * Store a newly created Person in storage.
     *
     * @param CreatePersonRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonRequest $request)
    {
        $input = $request->all();
        dd($input);
        $person = array(
            "colombian_id" => $input->colombian_id,
            "first_name" => $input->first_name,
            "last_name" => $input->last_name,
            "email" => $input->email,
            "active" => $input->active,
            "username" => $input->colombian_id,
            "password" => $input->colombian_id,
        );

        $person = $this->personRepository->create($person);

        Flash::success('Person saved successfully.');

        return redirect(route('people.index'));
    }

    /**
     * Display the specified Person.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $person = $this->personRepository->findWithoutFail($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        return view('people.show')->with('person', $person);
    }

    /**
     * Show the form for editing the specified Person.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $person = $this->personRepository->findWithoutFail($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        return view('people.edit')->with('person', $person);
    }

    /**
     * Update the specified Person in storage.
     *
     * @param  int              $id
     * @param UpdatePersonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonRequest $request)
    {
        $person = $this->personRepository->findWithoutFail($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        $person = $this->personRepository->update($request->all(), $id);

        Flash::success('Person updated successfully.');

        return redirect(route('people.index'));
    }

    /**
     * Remove the specified Person from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $person = $this->personRepository->findWithoutFail($id);

        if (empty($person)) {
            Flash::error('Person not found');

            return redirect(route('people.index'));
        }

        $this->personRepository->delete($id);

        Flash::success('Person deleted successfully.');

        return redirect(route('people.index'));
    }
}
