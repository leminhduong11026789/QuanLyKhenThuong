<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCuocThiTepDinhKemRequest;
use App\Http\Requests\UpdateCuocThiTepDinhKemRequest;
use App\Repositories\CuocThiTepDinhKemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CuocThiTepDinhKemController extends AppBaseController
{
    /** @var  CuocThiTepDinhKemRepository */
    private $cuocThiTepDinhKemRepository;

    public function __construct(CuocThiTepDinhKemRepository $cuocThiTepDinhKemRepo)
    {
        $this->cuocThiTepDinhKemRepository = $cuocThiTepDinhKemRepo;
    }

    /**
     * Display a listing of the CuocThiTepDinhKem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cuocThiTepDinhKemRepository->pushCriteria(new RequestCriteria($request));
        $cuocThiTepDinhKems = $this->cuocThiTepDinhKemRepository->all();

        return view('backend.cuoc_thi_tep_dinh_kems.index')
            ->with('cuocThiTepDinhKems', $cuocThiTepDinhKems);
    }

    /**
     * Show the form for creating a new CuocThiTepDinhKem.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cuoc_thi_tep_dinh_kems.create');
    }

    /**
     * Store a newly created CuocThiTepDinhKem in storage.
     *
     * @param CreateCuocThiTepDinhKemRequest $request
     *
     * @return Response
     */
    public function store(CreateCuocThiTepDinhKemRequest $request)
    {
        $input = $request->all();

        $cuocThiTepDinhKem = $this->cuocThiTepDinhKemRepository->create($input);

        Flash::success('Cuoc Thi Tep Dinh Kem saved successfully.');

        return redirect(route('admin.cuocThiTepDinhKems.index'));
    }

    /**
     * Display the specified CuocThiTepDinhKem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cuocThiTepDinhKem = $this->cuocThiTepDinhKemRepository->findWithoutFail($id);

        if (empty($cuocThiTepDinhKem)) {
            Flash::error('Cuoc Thi Tep Dinh Kem not found');

            return redirect(route('admin.cuocThiTepDinhKems.index'));
        }

        return view('backend.cuoc_thi_tep_dinh_kems.show')->with('cuocThiTepDinhKem', $cuocThiTepDinhKem);
    }

    /**
     * Show the form for editing the specified CuocThiTepDinhKem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cuocThiTepDinhKem = $this->cuocThiTepDinhKemRepository->findWithoutFail($id);

        if (empty($cuocThiTepDinhKem)) {
            Flash::error('Cuoc Thi Tep Dinh Kem not found');

            return redirect(route('admin.cuocThiTepDinhKems.index'));
        }

        return view('backend.cuoc_thi_tep_dinh_kems.edit')->with('cuocThiTepDinhKem', $cuocThiTepDinhKem);
    }

    /**
     * Update the specified CuocThiTepDinhKem in storage.
     *
     * @param  int              $id
     * @param UpdateCuocThiTepDinhKemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCuocThiTepDinhKemRequest $request)
    {
        $cuocThiTepDinhKem = $this->cuocThiTepDinhKemRepository->findWithoutFail($id);

        if (empty($cuocThiTepDinhKem)) {
            Flash::error('Cuoc Thi Tep Dinh Kem not found');

            return redirect(route('admin.cuocThiTepDinhKems.index'));
        }

        $cuocThiTepDinhKem = $this->cuocThiTepDinhKemRepository->update($request->all(), $id);

        Flash::success('Cuoc Thi Tep Dinh Kem updated successfully.');

        return redirect(route('admin.cuocThiTepDinhKems.index'));
    }

    /**
     * Remove the specified CuocThiTepDinhKem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cuocThiTepDinhKem = $this->cuocThiTepDinhKemRepository->findWithoutFail($id);

        if (empty($cuocThiTepDinhKem)) {
            Flash::error('Cuoc Thi Tep Dinh Kem not found');

            return redirect(route('admin.cuocThiTepDinhKems.index'));
        }

        $this->cuocThiTepDinhKemRepository->delete($id);

        Flash::success('Cuoc Thi Tep Dinh Kem deleted successfully.');

        return redirect(route('admin.cuocThiTepDinhKems.index'));
    }
}
