<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRechargeRequest;
use App\Http\Requests\UpdateRechargeRequest;
use App\Models\Project;
use App\Repositories\RechargeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RechargeController extends AppBaseController
{
    /** @var  RechargeRepository */
    private $rechargeRepository;

    public function __construct(RechargeRepository $rechargeRepo)
    {
        $this->rechargeRepository = $rechargeRepo;
    }

    /**
     * Display a listing of the Recharge.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rechargeRepository->pushCriteria(new RequestCriteria($request));
        $recharges = $this->rechargeRepository->all();

        return view('recharges.index')
            ->with('recharges', $recharges);
    }

    /**
     * Show the form for creating a new Recharge.
     *
     * @return Response
     */
    public function create()
    {
      $projects =  ['' => ''] + Project::pluck('name', 'id')->toArray();
        return view('recharges.create',compact('projects'));
    }

    /**
     * Store a newly created Recharge in storage.
     *
     * @param CreateRechargeRequest $request
     *
     * @return Response
     */
    public function store(CreateRechargeRequest $request)
    {
        $input = $request->all();

        $recharge = $this->rechargeRepository->create($input);

        Flash::success('Recharge saved successfully.');

        return redirect(route('recharges.index'));
    }

    /**
     * Display the specified Recharge.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recharge = $this->rechargeRepository->findWithoutFail($id);

        if (empty($recharge)) {
            Flash::error('Recharge not found');

            return redirect(route('recharges.index'));
        }

        return view('recharges.show')->with('recharge', $recharge);
    }

    /**
     * Show the form for editing the specified Recharge.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recharge = $this->rechargeRepository->findWithoutFail($id);

        if (empty($recharge)) {
            Flash::error('Recharge not found');

            return redirect(route('recharges.index'));
        }

        return view('recharges.edit')->with('recharge', $recharge);
    }

    /**
     * Update the specified Recharge in storage.
     *
     * @param  int              $id
     * @param UpdateRechargeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRechargeRequest $request)
    {
        $recharge = $this->rechargeRepository->findWithoutFail($id);

        if (empty($recharge)) {
            Flash::error('Recharge not found');

            return redirect(route('recharges.index'));
        }

        $recharge = $this->rechargeRepository->update($request->all(), $id);

        Flash::success('Recharge updated successfully.');

        return redirect(route('recharges.index'));
    }

    /**
     * Remove the specified Recharge from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recharge = $this->rechargeRepository->findWithoutFail($id);

        if (empty($recharge)) {
            Flash::error('Recharge not found');

            return redirect(route('recharges.index'));
        }

        $this->rechargeRepository->delete($id);

        Flash::success('Recharge deleted successfully.');

        return redirect(route('recharges.index'));
    }
}
