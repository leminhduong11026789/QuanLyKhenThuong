<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCuocThiDoiTuongThamGiaRequest;
use App\Http\Requests\UpdateCuocThiDoiTuongThamGiaRequest;
use App\Repositories\CuocThiDoiTuongThamGiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CuocThiDoiTuongThamGiaController extends AppBaseController
{
    /** @var  CuocThiDoiTuongThamGiaRepository */
    private $cuocThiDoiTuongThamGiaRepository;

    public function __construct(CuocThiDoiTuongThamGiaRepository $cuocThiDoiTuongThamGiaRepo)
    {
        $this->cuocThiDoiTuongThamGiaRepository = $cuocThiDoiTuongThamGiaRepo;
    }

    /**
     * Display a listing of the CuocThiDoiTuongThamGia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cuocThiDoiTuongThamGiaRepository->pushCriteria(new RequestCriteria($request));
        $cuocThiDoiTuongThamGias = $this->cuocThiDoiTuongThamGiaRepository->all();

        return view('backend.cuoc_thi_doi_tuong_tham_gias.index')
            ->with('cuocThiDoiTuongThamGias', $cuocThiDoiTuongThamGias);
    }

    /**
     * Show the form for creating a new CuocThiDoiTuongThamGia.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cuoc_thi_doi_tuong_tham_gias.create');
    }

    /**
     * Store a newly created CuocThiDoiTuongThamGia in storage.
     *
     * @param CreateCuocThiDoiTuongThamGiaRequest $request
     *
     * @return Response
     */
    public function store(CreateCuocThiDoiTuongThamGiaRequest $request)
    {
        $input = $request->all();

        $cuocThiDoiTuongThamGia = $this->cuocThiDoiTuongThamGiaRepository->create($input);

        Flash::success('Cuoc Thi Doi Tuong Tham Gia saved successfully.');

        return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
    }

    /**
     * Display the specified CuocThiDoiTuongThamGia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cuocThiDoiTuongThamGia = $this->cuocThiDoiTuongThamGiaRepository->findWithoutFail($id);

        if (empty($cuocThiDoiTuongThamGia)) {
            Flash::error('Cuoc Thi Doi Tuong Tham Gia not found');

            return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
        }

        return view('backend.cuoc_thi_doi_tuong_tham_gias.show')->with('cuocThiDoiTuongThamGia', $cuocThiDoiTuongThamGia);
    }

    /**
     * Show the form for editing the specified CuocThiDoiTuongThamGia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cuocThiDoiTuongThamGia = $this->cuocThiDoiTuongThamGiaRepository->findWithoutFail($id);

        if (empty($cuocThiDoiTuongThamGia)) {
            Flash::error('Cuoc Thi Doi Tuong Tham Gia not found');

            return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
        }

        return view('backend.cuoc_thi_doi_tuong_tham_gias.edit')->with('cuocThiDoiTuongThamGia', $cuocThiDoiTuongThamGia);
    }

    /**
     * Update the specified CuocThiDoiTuongThamGia in storage.
     *
     * @param  int              $id
     * @param UpdateCuocThiDoiTuongThamGiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCuocThiDoiTuongThamGiaRequest $request)
    {
        $cuocThiDoiTuongThamGia = $this->cuocThiDoiTuongThamGiaRepository->findWithoutFail($id);

        if (empty($cuocThiDoiTuongThamGia)) {
            Flash::error('Cuoc Thi Doi Tuong Tham Gia not found');

            return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
        }

        $cuocThiDoiTuongThamGia = $this->cuocThiDoiTuongThamGiaRepository->update($request->all(), $id);

        Flash::success('Cuoc Thi Doi Tuong Tham Gia updated successfully.');

        return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
    }

    /**
     * Remove the specified CuocThiDoiTuongThamGia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cuocThiDoiTuongThamGia = $this->cuocThiDoiTuongThamGiaRepository->findWithoutFail($id);

        if (empty($cuocThiDoiTuongThamGia)) {
            Flash::error('Cuoc Thi Doi Tuong Tham Gia not found');

            return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
        }

        $this->cuocThiDoiTuongThamGiaRepository->delete($id);

        Flash::success('Cuoc Thi Doi Tuong Tham Gia deleted successfully.');

        return redirect(route('admin.cuocThiDoiTuongThamGias.index'));
    }
}
