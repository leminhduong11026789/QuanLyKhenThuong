<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDanhHieuRequest;
use App\Http\Requests\UpdateDanhHieuRequest;
use App\Repositories\DanhHieuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DanhHieuController extends AppBaseController
{
    /** @var  DanhHieuRepository */
    private $danhHieuRepository;

    public function __construct(DanhHieuRepository $danhHieuRepo)
    {
        $this->danhHieuRepository = $danhHieuRepo;
    }

    /**
     * Display a listing of the DanhHieu.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->danhHieuRepository->pushCriteria(new RequestCriteria($request));
        $danhHieus = $this->danhHieuRepository->all();

        return view('backend.danh_hieus.index')
            ->with('danhHieus', $danhHieus);
    }

    /**
     * Show the form for creating a new DanhHieu.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.danh_hieus.create');
    }

    /**
     * Store a newly created DanhHieu in storage.
     *
     * @param CreateDanhHieuRequest $request
     *
     * @return Response
     */
    public function store(CreateDanhHieuRequest $request)
    {
        $input = $request->all();

        $danhHieu = $this->danhHieuRepository->create($input);

        Flash::success('Danh Hieu saved successfully.');

        return redirect(route('admin.danhHieus.index'));
    }

    /**
     * Display the specified DanhHieu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $danhHieu = $this->danhHieuRepository->findWithoutFail($id);

        if (empty($danhHieu)) {
            Flash::error('Danh Hieu not found');

            return redirect(route('admin.danhHieus.index'));
        }

        return view('backend.danh_hieus.show')->with('danhHieu', $danhHieu);
    }

    /**
     * Show the form for editing the specified DanhHieu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $danhHieu = $this->danhHieuRepository->findWithoutFail($id);

        if (empty($danhHieu)) {
            Flash::error('Danh Hieu not found');

            return redirect(route('admin.danhHieus.index'));
        }

        return view('backend.danh_hieus.edit')->with('danhHieu', $danhHieu);
    }

    /**
     * Update the specified DanhHieu in storage.
     *
     * @param  int              $id
     * @param UpdateDanhHieuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDanhHieuRequest $request)
    {
        $danhHieu = $this->danhHieuRepository->findWithoutFail($id);

        if (empty($danhHieu)) {
            Flash::error('Danh Hieu not found');

            return redirect(route('admin.danhHieus.index'));
        }

        $danhHieu = $this->danhHieuRepository->update($request->all(), $id);

        Flash::success('Danh Hieu updated successfully.');

        return redirect(route('admin.danhHieus.index'));
    }

    /**
     * Remove the specified DanhHieu from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $danhHieu = $this->danhHieuRepository->findWithoutFail($id);

        if (empty($danhHieu)) {
            Flash::error('Danh Hieu not found');

            return redirect(route('admin.danhHieus.index'));
        }

        $this->danhHieuRepository->delete($id);

        Flash::success('Danh Hieu deleted successfully.');

        return redirect(route('admin.danhHieus.index'));
    }
}
