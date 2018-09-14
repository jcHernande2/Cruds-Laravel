<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePeliculasRequest;
use App\Http\Requests\UpdatePeliculasRequest;
use App\Repositories\PeliculasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoArticulo;
class PeliculasController extends AppBaseController
{
    /** @var  PeliculasRepository */
    private $peliculasRepository;

    public function __construct(PeliculasRepository $peliculasRepo)
    {
        $this->peliculasRepository = $peliculasRepo;
    }

    /**
     * Display a listing of the Peliculas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->peliculasRepository->pushCriteria(new RequestCriteria($request));
        $peliculas = $this->peliculasRepository->all();

        return view('peliculas.index')
            ->with('peliculas', $peliculas);
    }

    /**
     * Show the form for creating a new Peliculas.
     *
     * @return Response
     */
    public function create()
    {
        $tiposArticulos= TipoArticulo::pluck("Nombre","id");
        return view('peliculas.create', compact("tiposArticulos"));
    }

    /**
     * Store a newly created Peliculas in storage.
     *
     * @param CreatePeliculasRequest $request
     *
     * @return Response
     */
    public function store(CreatePeliculasRequest $request)
    {
        $input = $request->all();

        $peliculas = $this->peliculasRepository->create($input);

        Flash::success('Peliculas saved successfully.');

        return redirect(route('peliculas.index'));
    }

    /**
     * Display the specified Peliculas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $peliculas = $this->peliculasRepository->findWithoutFail($id);

        if (empty($peliculas)) {
            Flash::error('Peliculas not found');

            return redirect(route('peliculas.index'));
        }

        return view('peliculas.show')->with('peliculas', $peliculas);
    }

    /**
     * Show the form for editing the specified Peliculas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $peliculas = $this->peliculasRepository->findWithoutFail($id);

        if (empty($peliculas)) {
            Flash::error('Peliculas not found');

            return redirect(route('peliculas.index'));
        }
        $tiposArticulos= TipoArticulo::pluck("Nombre","id");
        return view('peliculas.edit',compact("tiposArticulos"))->with('peliculas', $peliculas);
    }

    /**
     * Update the specified Peliculas in storage.
     *
     * @param  int              $id
     * @param UpdatePeliculasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeliculasRequest $request)
    {
        $peliculas = $this->peliculasRepository->findWithoutFail($id);

        if (empty($peliculas)) {
            Flash::error('Peliculas not found');

            return redirect(route('peliculas.index'));
        }

        $peliculas = $this->peliculasRepository->update($request->all(), $id);

        Flash::success('Peliculas updated successfully.');

        return redirect(route('peliculas.index'));
    }

    /**
     * Remove the specified Peliculas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $peliculas = $this->peliculasRepository->findWithoutFail($id);

        if (empty($peliculas)) {
            Flash::error('Peliculas not found');

            return redirect(route('peliculas.index'));
        }

        $this->peliculasRepository->delete($id);

        Flash::success('Peliculas deleted successfully.');

        return redirect(route('peliculas.index'));
    }
}
