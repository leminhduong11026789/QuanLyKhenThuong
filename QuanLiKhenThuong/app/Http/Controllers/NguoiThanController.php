<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNguoiThanRequest;
use App\Http\Requests\UpdateNguoiThanRequest;
use App\Repositories\NguoiThanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NguoiThanController extends AppBaseController
{
    /** @var  NguoiThanRepository */
    private $nguoiThanRepository;

    public function __construct(NguoiThanRepository $nguoiThanRepo)
    {
        $this->nguoiThanRepository = $nguoiThanRepo;
    }

    /**
     * Display a listing of the NguoiThan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nguoiThanRepository->pushCriteria(new RequestCriteria($request));
        $nguoiThans = $this->nguoiThanRepository->all();

        return view('backend.nguoi_thans.index')
            ->with('nguoiThans', $nguoiThans);
    }

    /**
     * Show the form for creating a new NguoiThan.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.nguoi_thans.create');
    }

    /**
     * Store a newly created NguoiThan in storage.
     *
     * @param CreateNguoiThanRequest $request
     *
     * @return Response
     */
    public function store(CreateNguoiThanRequest $request)
    {
        $input = $request->all();

        $nguoiThan = $this->nguoiThanRepository->create($input);

        Flash::success('Nguoi Than saved successfully.');

        return redirect(route('admin.nguoiThans.index'));
    }

    /**
     * Display the specified NguoiThan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nguoiThan = $this->nguoiThanRepository->findWithoutFail($id);

        if (empty($nguoiThan)) {
            Flash::error('Nguoi Than not found');

            return redirect(route('admin.nguoiThans.index'));
        }

        return view('backend.nguoi_thans.show')->with('nguoiThan', $nguoiThan);
    }

    /**
     * Show the form for editing the specified NguoiThan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nguoiThan = $this->nguoiThanRepository->findWithoutFail($id);

        if (empty($nguoiThan)) {
            Flash::error('Nguoi Than not found');

            return redirect(route('admin.nguoiThans.index'));
        }

        return view('backend.nguoi_thans.edit')->with('nguoiThan', $nguoiThan);
    }

    /**
     * Update the specified NguoiThan in storage.
     *
     * @param  int              $id
     * @param UpdateNguoiThanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNguoiThanRequest $request)
    {
        $nguoiThan = $this->nguoiThanRepository->findWithoutFail($id);

        if (empty($nguoiThan)) {
            Flash::error('Nguoi Than not found');

            return redirect(route('admin.nguoiThans.index'));
        }

        $nguoiThan = $this->nguoiThanRepository->update($request->all(), $id);

        Flash::success('Nguoi Than updated successfully.');

        return redirect(route('admin.nguoiThans.index'));
    }

    /**
     * Remove the specified NguoiThan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nguoiThan = $this->nguoiThanRepository->findWithoutFail($id);

        if (empty($nguoiThan)) {
            Flash::error('Nguoi Than not found');

            return redirect(route('admin.nguoiThans.index'));
        }

        $this->nguoiThanRepository->delete($id);

        Flash::success('Nguoi Than deleted successfully.');

        return redirect(route('admin.nguoiThans.index'));
    }
}
