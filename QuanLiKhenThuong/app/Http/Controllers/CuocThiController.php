<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCuocThiRequest;
use App\Http\Requests\UpdateCuocThiRequest;
use App\Repositories\CuocThiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CuocThiController extends AppBaseController
{
    /** @var  CuocThiRepository */
    private $cuocThiRepository;

    public function __construct(CuocThiRepository $cuocThiRepo)
    {
        $this->cuocThiRepository = $cuocThiRepo;
    }

    /**
     * Display a listing of the CuocThi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cuocThiRepository->pushCriteria(new RequestCriteria($request));
        $cuocThis = $this->cuocThiRepository->all();

        return view('backend.cuoc_this.index')
            ->with('cuocThis', $cuocThis);
    }

    /**
     * Show the form for creating a new CuocThi.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cuoc_this.create');
    }

    /**
     * Store a newly created CuocThi in storage.
     *
     * @param CreateCuocThiRequest $request
     *
     * @return Response
     */
    public function store(CreateCuocThiRequest $request)
    {
        $input = $request->all();

        $cuocThi = $this->cuocThiRepository->create($input);

        Flash::success('Cuoc Thi saved successfully.');

        return redirect(route('admin.cuocThis.index'));
    }

    /**
     * Display the specified CuocThi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cuocThi = $this->cuocThiRepository->findWithoutFail($id);

        if (empty($cuocThi)) {
            Flash::error('Cuoc Thi not found');

            return redirect(route('admin.cuocThis.index'));
        }

        return view('backend.cuoc_this.show')->with('cuocThi', $cuocThi);
    }

    /**
     * Show the form for editing the specified CuocThi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cuocThi = $this->cuocThiRepository->findWithoutFail($id);

        if (empty($cuocThi)) {
            Flash::error('Cuoc Thi not found');

            return redirect(route('admin.cuocThis.index'));
        }

        return view('backend.cuoc_this.edit')->with('cuocThi', $cuocThi);
    }

    /**
     * Update the specified CuocThi in storage.
     *
     * @param  int              $id
     * @param UpdateCuocThiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCuocThiRequest $request)
    {
        $cuocThi = $this->cuocThiRepository->findWithoutFail($id);

        if (empty($cuocThi)) {
            Flash::error('Cuoc Thi not found');

            return redirect(route('admin.cuocThis.index'));
        }

        $cuocThi = $this->cuocThiRepository->update($request->all(), $id);

        Flash::success('Cuoc Thi updated successfully.');

        return redirect(route('admin.cuocThis.index'));
    }

    /**
     * Remove the specified CuocThi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cuocThi = $this->cuocThiRepository->findWithoutFail($id);

        if (empty($cuocThi)) {
            Flash::error('Cuoc Thi not found');

            return redirect(route('admin.cuocThis.index'));
        }

        $this->cuocThiRepository->delete($id);

        Flash::success('Cuoc Thi deleted successfully.');

        return redirect(route('admin.cuocThis.index'));
    }
}
