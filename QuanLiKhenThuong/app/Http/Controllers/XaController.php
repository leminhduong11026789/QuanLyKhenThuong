<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateXaRequest;
use App\Http\Requests\UpdateXaRequest;
use App\Repositories\XaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class XaController extends AppBaseController
{
    /** @var  XaRepository */
    private $xaRepository;

    public function __construct(XaRepository $xaRepo)
    {
        $this->xaRepository = $xaRepo;
    }

    /**
     * Display a listing of the Xa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->xaRepository->pushCriteria(new RequestCriteria($request));
        $xas = $this->xaRepository->all();

        return view('backend.xas.index')
            ->with('xas', $xas);
    }

    /**
     * Show the form for creating a new Xa.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.xas.create');
    }

    /**
     * Store a newly created Xa in storage.
     *
     * @param CreateXaRequest $request
     *
     * @return Response
     */
    public function store(CreateXaRequest $request)
    {
        $input = $request->all();

        $xa = $this->xaRepository->create($input);

        Flash::success('Xa saved successfully.');

        return redirect(route('admin.xas.index'));
    }

    /**
     * Display the specified Xa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $xa = $this->xaRepository->findWithoutFail($id);

        if (empty($xa)) {
            Flash::error('Xa not found');

            return redirect(route('admin.xas.index'));
        }

        return view('backend.xas.show')->with('xa', $xa);
    }

    /**
     * Show the form for editing the specified Xa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $xa = $this->xaRepository->findWithoutFail($id);

        if (empty($xa)) {
            Flash::error('Xa not found');

            return redirect(route('admin.xas.index'));
        }

        return view('backend.xas.edit')->with('xa', $xa);
    }

    /**
     * Update the specified Xa in storage.
     *
     * @param  int              $id
     * @param UpdateXaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateXaRequest $request)
    {
        $xa = $this->xaRepository->findWithoutFail($id);

        if (empty($xa)) {
            Flash::error('Xa not found');

            return redirect(route('admin.xas.index'));
        }

        $xa = $this->xaRepository->update($request->all(), $id);

        Flash::success('Xa updated successfully.');

        return redirect(route('admin.xas.index'));
    }

    /**
     * Remove the specified Xa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $xa = $this->xaRepository->findWithoutFail($id);

        if (empty($xa)) {
            Flash::error('Xa not found');

            return redirect(route('admin.xas.index'));
        }

        $this->xaRepository->delete($id);

        Flash::success('Xa deleted successfully.');

        return redirect(route('admin.xas.index'));
    }
}
