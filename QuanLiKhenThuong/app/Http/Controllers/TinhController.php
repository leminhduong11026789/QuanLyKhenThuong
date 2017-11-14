<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTinhRequest;
use App\Http\Requests\UpdateTinhRequest;
use App\Repositories\TinhRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TinhController extends AppBaseController
{
    /** @var  TinhRepository */
    private $tinhRepository;

    public function __construct(TinhRepository $tinhRepo)
    {
        $this->tinhRepository = $tinhRepo;
    }

    /**
     * Display a listing of the Tinh.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tinhRepository->pushCriteria(new RequestCriteria($request));
        $tinhs = $this->tinhRepository->all();

        return view('backend.tinhs.index')
            ->with('tinhs', $tinhs);
    }

    /**
     * Show the form for creating a new Tinh.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tinhs.create');
    }

    /**
     * Store a newly created Tinh in storage.
     *
     * @param CreateTinhRequest $request
     *
     * @return Response
     */
    public function store(CreateTinhRequest $request)
    {
        $input = $request->all();

        $tinh = $this->tinhRepository->create($input);

        Flash::success('Tinh saved successfully.');

        return redirect(route('admin.tinhs.index'));
    }

    /**
     * Display the specified Tinh.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tinh = $this->tinhRepository->findWithoutFail($id);

        if (empty($tinh)) {
            Flash::error('Tinh not found');

            return redirect(route('admin.tinhs.index'));
        }

        return view('backend.tinhs.show')->with('tinh', $tinh);
    }

    /**
     * Show the form for editing the specified Tinh.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tinh = $this->tinhRepository->findWithoutFail($id);

        if (empty($tinh)) {
            Flash::error('Tinh not found');

            return redirect(route('admin.tinhs.index'));
        }

        return view('backend.tinhs.edit')->with('tinh', $tinh);
    }

    /**
     * Update the specified Tinh in storage.
     *
     * @param  int              $id
     * @param UpdateTinhRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTinhRequest $request)
    {
        $tinh = $this->tinhRepository->findWithoutFail($id);

        if (empty($tinh)) {
            Flash::error('Tinh not found');

            return redirect(route('admin.tinhs.index'));
        }

        $tinh = $this->tinhRepository->update($request->all(), $id);

        Flash::success('Tinh updated successfully.');

        return redirect(route('admin.tinhs.index'));
    }

    /**
     * Remove the specified Tinh from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tinh = $this->tinhRepository->findWithoutFail($id);

        if (empty($tinh)) {
            Flash::error('Tinh not found');

            return redirect(route('admin.tinhs.index'));
        }

        $this->tinhRepository->delete($id);

        Flash::success('Tinh deleted successfully.');

        return redirect(route('admin.tinhs.index'));
    }
}
