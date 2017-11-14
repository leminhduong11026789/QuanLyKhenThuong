<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNhanVienRequest;
use App\Http\Requests\UpdateNhanVienRequest;
use App\Repositories\NhanVienRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NhanVienController extends AppBaseController
{
    /** @var  NhanVienRepository */
    private $nhanVienRepository;

    public function __construct(NhanVienRepository $nhanVienRepo)
    {
        $this->nhanVienRepository = $nhanVienRepo;
    }

    /**
     * Display a listing of the NhanVien.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nhanVienRepository->pushCriteria(new RequestCriteria($request));
        $nhanViens = $this->nhanVienRepository->all();

        return view('backend.nhan_viens.index')
            ->with('nhanViens', $nhanViens);
    }

    /**
     * Show the form for creating a new NhanVien.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.nhan_viens.create');
    }

    /**
     * Store a newly created NhanVien in storage.
     *
     * @param CreateNhanVienRequest $request
     *
     * @return Response
     */
    public function store(CreateNhanVienRequest $request)
    {
        $input = $request->all();

        $nhanVien = $this->nhanVienRepository->create($input);

        Flash::success('Nhan Vien saved successfully.');

        return redirect(route('admin.nhanViens.index'));
    }

    /**
     * Display the specified NhanVien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nhanVien = $this->nhanVienRepository->findWithoutFail($id);

        if (empty($nhanVien)) {
            Flash::error('Nhan Vien not found');

            return redirect(route('admin.nhanViens.index'));
        }

        return view('backend.nhan_viens.show')->with('nhanVien', $nhanVien);
    }

    /**
     * Show the form for editing the specified NhanVien.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nhanVien = $this->nhanVienRepository->findWithoutFail($id);

        if (empty($nhanVien)) {
            Flash::error('Nhan Vien not found');

            return redirect(route('admin.nhanViens.index'));
        }

        return view('backend.nhan_viens.edit')->with('nhanVien', $nhanVien);
    }

    /**
     * Update the specified NhanVien in storage.
     *
     * @param  int              $id
     * @param UpdateNhanVienRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNhanVienRequest $request)
    {
        $nhanVien = $this->nhanVienRepository->findWithoutFail($id);

        if (empty($nhanVien)) {
            Flash::error('Nhan Vien not found');

            return redirect(route('admin.nhanViens.index'));
        }

        $nhanVien = $this->nhanVienRepository->update($request->all(), $id);

        Flash::success('Nhan Vien updated successfully.');

        return redirect(route('admin.nhanViens.index'));
    }

    /**
     * Remove the specified NhanVien from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nhanVien = $this->nhanVienRepository->findWithoutFail($id);

        if (empty($nhanVien)) {
            Flash::error('Nhan Vien not found');

            return redirect(route('admin.nhanViens.index'));
        }

        $this->nhanVienRepository->delete($id);

        Flash::success('Nhan Vien deleted successfully.');

        return redirect(route('admin.nhanViens.index'));
    }
}
