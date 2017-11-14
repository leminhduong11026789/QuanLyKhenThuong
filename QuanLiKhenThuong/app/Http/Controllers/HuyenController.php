<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHuyenRequest;
use App\Http\Requests\UpdateHuyenRequest;
use App\Repositories\HuyenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HuyenController extends AppBaseController
{
    /** @var  HuyenRepository */
    private $huyenRepository;

    public function __construct(HuyenRepository $huyenRepo)
    {
        $this->huyenRepository = $huyenRepo;
    }

    /**
     * Display a listing of the Huyen.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->huyenRepository->pushCriteria(new RequestCriteria($request));
        $huyens = $this->huyenRepository->all();

        return view('backend.huyens.index')
            ->with('huyens', $huyens);
    }

    /**
     * Show the form for creating a new Huyen.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.huyens.create');
    }

    /**
     * Store a newly created Huyen in storage.
     *
     * @param CreateHuyenRequest $request
     *
     * @return Response
     */
    public function store(CreateHuyenRequest $request)
    {
        $input = $request->all();

        $huyen = $this->huyenRepository->create($input);

        Flash::success('Huyen saved successfully.');

        return redirect(route('admin.huyens.index'));
    }

    /**
     * Display the specified Huyen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $huyen = $this->huyenRepository->findWithoutFail($id);

        if (empty($huyen)) {
            Flash::error('Huyen not found');

            return redirect(route('admin.huyens.index'));
        }

        return view('backend.huyens.show')->with('huyen', $huyen);
    }

    /**
     * Show the form for editing the specified Huyen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $huyen = $this->huyenRepository->findWithoutFail($id);

        if (empty($huyen)) {
            Flash::error('Huyen not found');

            return redirect(route('admin.huyens.index'));
        }

        return view('backend.huyens.edit')->with('huyen', $huyen);
    }

    /**
     * Update the specified Huyen in storage.
     *
     * @param  int              $id
     * @param UpdateHuyenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHuyenRequest $request)
    {
        $huyen = $this->huyenRepository->findWithoutFail($id);

        if (empty($huyen)) {
            Flash::error('Huyen not found');

            return redirect(route('admin.huyens.index'));
        }

        $huyen = $this->huyenRepository->update($request->all(), $id);

        Flash::success('Huyen updated successfully.');

        return redirect(route('admin.huyens.index'));
    }

    /**
     * Remove the specified Huyen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $huyen = $this->huyenRepository->findWithoutFail($id);

        if (empty($huyen)) {
            Flash::error('Huyen not found');

            return redirect(route('admin.huyens.index'));
        }

        $this->huyenRepository->delete($id);

        Flash::success('Huyen deleted successfully.');

        return redirect(route('admin.huyens.index'));
    }
}
