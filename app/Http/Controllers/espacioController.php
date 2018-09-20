<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateespacioRequest;
use App\Http\Requests\UpdateespacioRequest;
use App\Repositories\espacioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class espacioController extends AppBaseController
{
    /** @var  espacioRepository */
    private $espacioRepository;

    public function __construct(espacioRepository $espacioRepo)
    {
        $this->espacioRepository = $espacioRepo;
    }

    /**
     * Display a listing of the espacio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->espacioRepository->pushCriteria(new RequestCriteria($request));
        $espacios = $this->espacioRepository->all();

        return view('espacios.index')
            ->with('espacios', $espacios);
    }

    /**
     * Show the form for creating a new espacio.
     *
     * @return Response
     */
    public function create()
    {
        return view('espacios.create');
    }

    /**
     * Store a newly created espacio in storage.
     *
     * @param CreateespacioRequest $request
     *
     * @return Response
     */
    public function store(CreateespacioRequest $request)
    {
        $input = $request->all();

        $espacio = $this->espacioRepository->create($input);

        Flash::success('Espacio saved successfully.');

        return redirect(route('espacios.index'));
    }

    /**
     * Display the specified espacio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $espacio = $this->espacioRepository->findWithoutFail($id);

        if (empty($espacio)) {
            Flash::error('Espacio not found');

            return redirect(route('espacios.index'));
        }

        return view('espacios.show')->with('espacio', $espacio);
    }

    /**
     * Show the form for editing the specified espacio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $espacio = $this->espacioRepository->findWithoutFail($id);

        if (empty($espacio)) {
            Flash::error('Espacio not found');

            return redirect(route('espacios.index'));
        }

        return view('espacios.edit')->with('espacio', $espacio);
    }

    /**
     * Update the specified espacio in storage.
     *
     * @param  int              $id
     * @param UpdateespacioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateespacioRequest $request)
    {
        $espacio = $this->espacioRepository->findWithoutFail($id);

        if (empty($espacio)) {
            Flash::error('Espacio not found');

            return redirect(route('espacios.index'));
        }

        $espacio = $this->espacioRepository->update($request->all(), $id);

        Flash::success('Espacio updated successfully.');

        return redirect(route('espacios.index'));
    }

    /**
     * Remove the specified espacio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $espacio = $this->espacioRepository->findWithoutFail($id);

        if (empty($espacio)) {
            Flash::error('Espacio not found');

            return redirect(route('espacios.index'));
        }

        $this->espacioRepository->delete($id);

        Flash::success('Espacio deleted successfully.');

        return redirect(route('espacios.index'));
    }
}
