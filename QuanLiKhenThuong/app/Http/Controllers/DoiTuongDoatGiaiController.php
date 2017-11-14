<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoiTuongDoatGiaiRequest;
use App\Http\Requests\UpdateDoiTuongDoatGiaiRequest;
use App\Repositories\DoiTuongDoatGiaiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DoiTuongDoatGiaiController extends AppBaseController
{
    /** @var  DoiTuongDoatGiaiRepository */
    private $doiTuongDoatGiaiRepository;

    public function __construct(DoiTuongDoatGiaiRepository $doiTuongDoatGiaiRepo)
    {
        $this->doiTuongDoatGiaiRepository = $doiTuongDoatGiaiRepo;
    }

    /**
     * Display a listing of the DoiTuongDoatGiai.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doiTuongDoatGiaiRepository->pushCriteria(new RequestCriteria($request));
        $doiTuongDoatGiais = $this->doiTuongDoatGiaiRepository->all();

        return view('backend.doi_tuong_doat_giais.index')
            ->with('doiTuongDoatGiais', $doiTuongDoatGiais);
    }

    /**
     * Show the form for creating a new DoiTuongDoatGiai.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.doi_tuong_doat_giais.create');
    }

    /**
     * Store a newly created DoiTuongDoatGiai in storage.
     *
     * @param CreateDoiTuongDoatGiaiRequest $request
     *
     * @return Response
     */
    public function store(CreateDoiTuongDoatGiaiRequest $request)
    {
        $input = $request->all();

        $doiTuongDoatGiai = $this->doiTuongDoatGiaiRepository->create($input);

        Flash::success('Doi Tuong Doat Giai saved successfully.');

        return redirect(route('admin.doiTuongDoatGiais.index'));
    }

    /**
     * Display the specified DoiTuongDoatGiai.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doiTuongDoatGiai = $this->doiTuongDoatGiaiRepository->findWithoutFail($id);

        if (empty($doiTuongDoatGiai)) {
            Flash::error('Doi Tuong Doat Giai not found');

            return redirect(route('admin.doiTuongDoatGiais.index'));
        }

        return view('backend.doi_tuong_doat_giais.show')->with('doiTuongDoatGiai', $doiTuongDoatGiai);
    }

    /**
     * Show the form for editing the specified DoiTuongDoatGiai.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doiTuongDoatGiai = $this->doiTuongDoatGiaiRepository->findWithoutFail($id);

        if (empty($doiTuongDoatGiai)) {
            Flash::error('Doi Tuong Doat Giai not found');

            return redirect(route('admin.doiTuongDoatGiais.index'));
        }

        return view('backend.doi_tuong_doat_giais.edit')->with('doiTuongDoatGiai', $doiTuongDoatGiai);
    }

    /**
     * Update the specified DoiTuongDoatGiai in storage.
     *
     * @param  int              $id
     * @param UpdateDoiTuongDoatGiaiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoiTuongDoatGiaiRequest $request)
    {
        $doiTuongDoatGiai = $this->doiTuongDoatGiaiRepository->findWithoutFail($id);

        if (empty($doiTuongDoatGiai)) {
            Flash::error('Doi Tuong Doat Giai not found');

            return redirect(route('admin.doiTuongDoatGiais.index'));
        }

        $doiTuongDoatGiai = $this->doiTuongDoatGiaiRepository->update($request->all(), $id);

        Flash::success('Doi Tuong Doat Giai updated successfully.');

        return redirect(route('admin.doiTuongDoatGiais.index'));
    }

    /**
     * Remove the specified DoiTuongDoatGiai from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doiTuongDoatGiai = $this->doiTuongDoatGiaiRepository->findWithoutFail($id);

        if (empty($doiTuongDoatGiai)) {
            Flash::error('Doi Tuong Doat Giai not found');

            return redirect(route('admin.doiTuongDoatGiais.index'));
        }

        $this->doiTuongDoatGiaiRepository->delete($id);

        Flash::success('Doi Tuong Doat Giai deleted successfully.');

        return redirect(route('admin.doiTuongDoatGiais.index'));
    }
}
