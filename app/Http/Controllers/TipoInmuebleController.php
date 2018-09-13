<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoInmuebleRequest;
use App\Http\Requests\UpdateTipoInmuebleRequest;
use App\Repositories\TipoInmuebleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoInmuebleController extends AppBaseController
{
    /** @var  TipoInmuebleRepository */
    private $tipoInmuebleRepository;

    public function __construct(TipoInmuebleRepository $tipoInmuebleRepo)
    {
        $this->tipoInmuebleRepository = $tipoInmuebleRepo;
    }

    /**
     * Display a listing of the TipoInmueble.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoInmuebleRepository->pushCriteria(new RequestCriteria($request));
        $tipoInmuebles = $this->tipoInmuebleRepository->all();

        return view('tipo_inmuebles.index')
            ->with('tipoInmuebles', $tipoInmuebles);
    }

    /**
     * Show the form for creating a new TipoInmueble.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_inmuebles.create');
    }

    /**
     * Store a newly created TipoInmueble in storage.
     *
     * @param CreateTipoInmuebleRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoInmuebleRequest $request)
    {
        $input = $request->all();

        $tipoInmueble = $this->tipoInmuebleRepository->create($input);

        Flash::success('Tipo Inmueble saved successfully.');

        return redirect(route('tipoInmuebles.index'));
    }

    /**
     * Display the specified TipoInmueble.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoInmueble = $this->tipoInmuebleRepository->findWithoutFail($id);

        if (empty($tipoInmueble)) {
            Flash::error('Tipo Inmueble not found');

            return redirect(route('tipoInmuebles.index'));
        }

        return view('tipo_inmuebles.show')->with('tipoInmueble', $tipoInmueble);
    }

    /**
     * Show the form for editing the specified TipoInmueble.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoInmueble = $this->tipoInmuebleRepository->findWithoutFail($id);

        if (empty($tipoInmueble)) {
            Flash::error('Tipo Inmueble not found');

            return redirect(route('tipoInmuebles.index'));
        }

        return view('tipo_inmuebles.edit')->with('tipoInmueble', $tipoInmueble);
    }

    /**
     * Update the specified TipoInmueble in storage.
     *
     * @param  int              $id
     * @param UpdateTipoInmuebleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoInmuebleRequest $request)
    {
        $tipoInmueble = $this->tipoInmuebleRepository->findWithoutFail($id);

        if (empty($tipoInmueble)) {
            Flash::error('Tipo Inmueble not found');

            return redirect(route('tipoInmuebles.index'));
        }

        $tipoInmueble = $this->tipoInmuebleRepository->update($request->all(), $id);

        Flash::success('Tipo Inmueble updated successfully.');

        return redirect(route('tipoInmuebles.index'));
    }

    /**
     * Remove the specified TipoInmueble from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoInmueble = $this->tipoInmuebleRepository->findWithoutFail($id);

        if (empty($tipoInmueble)) {
            Flash::error('Tipo Inmueble not found');

            return redirect(route('tipoInmuebles.index'));
        }

        $this->tipoInmuebleRepository->delete($id);

        Flash::success('Tipo Inmueble deleted successfully.');

        return redirect(route('tipoInmuebles.index'));
    }
}
