<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoArticuloRequest;
use App\Http\Requests\UpdateTipoArticuloRequest;
use App\Repositories\TipoArticuloRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoArticuloController extends AppBaseController
{
    /** @var  TipoArticuloRepository */
    private $tipoArticuloRepository;

    public function __construct(TipoArticuloRepository $tipoArticuloRepo)
    {
        $this->tipoArticuloRepository = $tipoArticuloRepo;
    }

    /**
     * Display a listing of the TipoArticulo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoArticuloRepository->pushCriteria(new RequestCriteria($request));
        $tipoArticulos = $this->tipoArticuloRepository->all();

        return view('tipo_articulos.index')
            ->with('tipoArticulos', $tipoArticulos);
    }

    /**
     * Show the form for creating a new TipoArticulo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_articulos.create');
    }

    /**
     * Store a newly created TipoArticulo in storage.
     *
     * @param CreateTipoArticuloRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoArticuloRequest $request)
    {
        $input = $request->all();

        $tipoArticulo = $this->tipoArticuloRepository->create($input);

        Flash::success('Tipo Articulo saved successfully.');

        return redirect(route('tipoArticulos.index'));
    }

    /**
     * Display the specified TipoArticulo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoArticulo = $this->tipoArticuloRepository->findWithoutFail($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        return view('tipo_articulos.show')->with('tipoArticulo', $tipoArticulo);
    }

    /**
     * Show the form for editing the specified TipoArticulo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoArticulo = $this->tipoArticuloRepository->findWithoutFail($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        return view('tipo_articulos.edit')->with('tipoArticulo', $tipoArticulo);
    }

    /**
     * Update the specified TipoArticulo in storage.
     *
     * @param  int              $id
     * @param UpdateTipoArticuloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoArticuloRequest $request)
    {
        $tipoArticulo = $this->tipoArticuloRepository->findWithoutFail($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        $tipoArticulo = $this->tipoArticuloRepository->update($request->all(), $id);

        Flash::success('Tipo Articulo updated successfully.');

        return redirect(route('tipoArticulos.index'));
    }

    /**
     * Remove the specified TipoArticulo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoArticulo = $this->tipoArticuloRepository->findWithoutFail($id);

        if (empty($tipoArticulo)) {
            Flash::error('Tipo Articulo not found');

            return redirect(route('tipoArticulos.index'));
        }

        $this->tipoArticuloRepository->delete($id);

        Flash::success('Tipo Articulo deleted successfully.');

        return redirect(route('tipoArticulos.index'));
    }
}
