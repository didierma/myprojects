<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateApproverRequest;
use App\Http\Requests\UpdateApproverRequest;
use App\Repositories\ApproverRepository;
use App\User;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ApproverController extends Controller
{
    /** @var  ApproverRepository */
    private $approverRepository;

    public function __construct(ApproverRepository $approverRepo)
    {
        $this->approverRepository = $approverRepo;
    }

    /**
     * Display a listing of the Approver.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->approverRepository->pushCriteria(new RequestCriteria($request));
        $approvers = $this->approverRepository->all();

        return view('approvers.index')
            ->with('approvers', $approvers);
    }

    /**
     * Show the form for creating a new Approver.
     *
     * @return Response
     */
    public function create()
    {
        $users =  ['' => ''] + User::pluck('id ', 'id')->all();
        dd($users);
        return view('approvers.create',compact('users'));
    }

    /**
     * Store a newly created Approver in storage.
     *
     * @param CreateApproverRequest $request
     *
     * @return Response
     */
    public function store(CreateApproverRequest $request)
    {
        $input = $request->all();

        $approver = $this->approverRepository->create($input);

        Flash::success('Approver saved successfully.');

        return redirect(route('approvers.index'));
    }

    /**
     * Display the specified Approver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $approver = $this->approverRepository->findWithoutFail($id);

        if (empty($approver)) {
            Flash::error('Approver not found');

            return redirect(route('approvers.index'));
        }

        return view('approvers.show')->with('approver', $approver);
    }

    /**
     * Show the form for editing the specified Approver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $approver = $this->approverRepository->findWithoutFail($id);

        if (empty($approver)) {
            Flash::error('Approver not found');

            return redirect(route('approvers.index'));
        }

        return view('approvers.edit')->with('approver', $approver);
    }

    /**
     * Update the specified Approver in storage.
     *
     * @param  int              $id
     * @param UpdateApproverRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateApproverRequest $request)
    {
        $approver = $this->approverRepository->findWithoutFail($id);

        if (empty($approver)) {
            Flash::error('Approver not found');

            return redirect(route('approvers.index'));
        }

        $approver = $this->approverRepository->update($request->all(), $id);

        Flash::success('Approver updated successfully.');

        return redirect(route('approvers.index'));
    }

    /**
     * Remove the specified Approver from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $approver = $this->approverRepository->findWithoutFail($id);

        if (empty($approver)) {
            Flash::error('Approver not found');

            return redirect(route('approvers.index'));
        }

        $this->approverRepository->delete($id);

        Flash::success('Approver deleted successfully.');

        return redirect(route('approvers.index'));
    }
}
