<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepositRequest;
use App\Http\Requests\UpdateDepositRequest;
use App\Repositories\DepositRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DepositController extends AppBaseController
{
    /** @var  DepositRepository */
    private $depositRepository;

    public function __construct(DepositRepository $depositRepo)
    {
        $this->depositRepository = $depositRepo;
    }

    /**
     * Display a listing of the Deposit.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->depositRepository->pushCriteria(new RequestCriteria($request));
        $deposits = $this->depositRepository->all();

        return view('deposits.index')
            ->with('deposits', $deposits);
    }

    /**
     * Show the form for creating a new Deposit.
     *
     * @return Response
     */
    public function create()
    {
        return view('deposits.create');
    }

    /**
     * Store a newly created Deposit in storage.
     *
     * @param CreateDepositRequest $request
     *
     * @return Response
     */
    public function store(CreateDepositRequest $request)
    {
        $input = $request->all();

        $deposit = $this->depositRepository->create($input);

        Flash::success('Deposit saved successfully.');

        return redirect(route('deposits.index'));
    }

    /**
     * Display the specified Deposit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deposit = $this->depositRepository->findWithoutFail($id);

        if (empty($deposit)) {
            Flash::error('Deposit not found');

            return redirect(route('deposits.index'));
        }

        return view('deposits.show')->with('deposit', $deposit);
    }

    /**
     * Show the form for editing the specified Deposit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deposit = $this->depositRepository->findWithoutFail($id);

        if (empty($deposit)) {
            Flash::error('Deposit not found');

            return redirect(route('deposits.index'));
        }

        return view('deposits.edit')->with('deposit', $deposit);
    }

    /**
     * Update the specified Deposit in storage.
     *
     * @param  int              $id
     * @param UpdateDepositRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepositRequest $request)
    {
        $deposit = $this->depositRepository->findWithoutFail($id);

        if (empty($deposit)) {
            Flash::error('Deposit not found');

            return redirect(route('deposits.index'));
        }

        $deposit = $this->depositRepository->update($request->all(), $id);

        Flash::success('Deposit updated successfully.');

        return redirect(route('deposits.index'));
    }

    /**
     * Remove the specified Deposit from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deposit = $this->depositRepository->findWithoutFail($id);

        if (empty($deposit)) {
            Flash::error('Deposit not found');

            return redirect(route('deposits.index'));
        }

        $this->depositRepository->delete($id);

        Flash::success('Deposit deleted successfully.');

        return redirect(route('deposits.index'));
    }
}
