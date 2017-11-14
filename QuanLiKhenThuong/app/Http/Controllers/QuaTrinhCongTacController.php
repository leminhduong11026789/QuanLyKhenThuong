<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuaTrinhCongTacRequest;
use App\Http\Requests\UpdateQuaTrinhCongTacRequest;
use App\Repositories\QuaTrinhCongTacRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class QuaTrinhCongTacController extends AppBaseController
{
    /** @var  QuaTrinhCongTacRepository */
    private $quaTrinhCongTacRepository;

    public function __construct(QuaTrinhCongTacRepository $quaTrinhCongTacRepo)
    {
        $this->quaTrinhCongTacRepository = $quaTrinhCongTacRepo;
    }

    /**
     * Display a listing of the QuaTrinhCongTac.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->quaTrinhCongTacRepository->pushCriteria(new RequestCriteria($request));
        $quaTrinhCongTacs = $this->quaTrinhCongTacRepository->all();

        return view('backend.qua_trinh_cong_tacs.index')
            ->with('quaTrinhCongTacs', $quaTrinhCongTacs);
    }

    /**
     * Show the form for creating a new QuaTrinhCongTac.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.qua_trinh_cong_tacs.create');
    }

    /**
     * Store a newly created QuaTrinhCongTac in storage.
     *
     * @param CreateQuaTrinhCongTacRequest $request
     *
     * @return Response
     */
    public function store(CreateQuaTrinhCongTacRequest $request)
    {
        $input = $request->all();

        $quaTrinhCongTac = $this->quaTrinhCongTacRepository->create($input);

        Flash::success('Qua Trinh Cong Tac saved successfully.');

        return redirect(route('admin.quaTrinhCongTacs.index'));
    }

    /**
     * Display the specified QuaTrinhCongTac.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quaTrinhCongTac = $this->quaTrinhCongTacRepository->findWithoutFail($id);

        if (empty($quaTrinhCongTac)) {
            Flash::error('Qua Trinh Cong Tac not found');

            return redirect(route('admin.quaTrinhCongTacs.index'));
        }

        return view('backend.qua_trinh_cong_tacs.show')->with('quaTrinhCongTac', $quaTrinhCongTac);
    }

    /**
     * Show the form for editing the specified QuaTrinhCongTac.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quaTrinhCongTac = $this->quaTrinhCongTacRepository->findWithoutFail($id);

        if (empty($quaTrinhCongTac)) {
            Flash::error('Qua Trinh Cong Tac not found');

            return redirect(route('admin.quaTrinhCongTacs.index'));
        }

        return view('backend.qua_trinh_cong_tacs.edit')->with('quaTrinhCongTac', $quaTrinhCongTac);
    }

    /**
     * Update the specified QuaTrinhCongTac in storage.
     *
     * @param  int              $id
     * @param UpdateQuaTrinhCongTacRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuaTrinhCongTacRequest $request)
    {
        $quaTrinhCongTac = $this->quaTrinhCongTacRepository->findWithoutFail($id);

        if (empty($quaTrinhCongTac)) {
            Flash::error('Qua Trinh Cong Tac not found');

            return redirect(route('admin.quaTrinhCongTacs.index'));
        }

        $quaTrinhCongTac = $this->quaTrinhCongTacRepository->update($request->all(), $id);

        Flash::success('Qua Trinh Cong Tac updated successfully.');

        return redirect(route('admin.quaTrinhCongTacs.index'));
    }

    /**
     * Remove the specified QuaTrinhCongTac from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quaTrinhCongTac = $this->quaTrinhCongTacRepository->findWithoutFail($id);

        if (empty($quaTrinhCongTac)) {
            Flash::error('Qua Trinh Cong Tac not found');

            return redirect(route('admin.quaTrinhCongTacs.index'));
        }

        $this->quaTrinhCongTacRepository->delete($id);

        Flash::success('Qua Trinh Cong Tac deleted successfully.');

        return redirect(route('admin.quaTrinhCongTacs.index'));
    }
}
