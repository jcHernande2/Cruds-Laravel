<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInmuebleRequest;
use App\Http\Requests\UpdateInmuebleRequest;
use App\Repositories\InmuebleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InmuebleController extends AppBaseController
{
    /** @var  InmuebleRepository */
    private $inmuebleRepository;

    public function __construct(InmuebleRepository $inmuebleRepo)
    {
        $this->inmuebleRepository = $inmuebleRepo;
    }

    /**
     * Display a listing of the Inmueble.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->inmuebleRepository->pushCriteria(new RequestCriteria($request));
        $inmuebles = $this->inmuebleRepository->all();

        return view('inmuebles.index')
            ->with('inmuebles', $inmuebles);
    }

    /**
     * Show the form for creating a new Inmueble.
     *
     * @return Response
     */
    public function create()
    {
        return view('inmuebles.create');
    }

    /**
     * Store a newly created Inmueble in storage.
     *
     * @param CreateInmuebleRequest $request
     *
     * @return Response
     */
    public function store(CreateInmuebleRequest $request)
    {
        $input = $request->all();

        $inmueble = $this->inmuebleRepository->create($input);

        Flash::success('Inmueble saved successfully.');

        return redirect(route('inmuebles.index'));
    }

    /**
     * Display the specified Inmueble.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inmueble = $this->inmuebleRepository->findWithoutFail($id);

        if (empty($inmueble)) {
            Flash::error('Inmueble not found');

            return redirect(route('inmuebles.index'));
        }

        return view('inmuebles.show')->with('inmueble', $inmueble);
    }

    /**
     * Show the form for editing the specified Inmueble.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inmueble = $this->inmuebleRepository->findWithoutFail($id);

        if (empty($inmueble)) {
            Flash::error('Inmueble not found');

            return redirect(route('inmuebles.index'));
        }

        return view('inmuebles.edit')->with('inmueble', $inmueble);
    }

    /**
     * Update the specified Inmueble in storage.
     *
     * @param  int              $id
     * @param UpdateInmuebleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInmuebleRequest $request)
    {
        $inmueble = $this->inmuebleRepository->findWithoutFail($id);

        if (empty($inmueble)) {
            Flash::error('Inmueble not found');

            return redirect(route('inmuebles.index'));
        }

        $inmueble = $this->inmuebleRepository->update($request->all(), $id);

        Flash::success('Inmueble updated successfully.');

        return redirect(route('inmuebles.index'));
    }

    /**
     * Remove the specified Inmueble from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inmueble = $this->inmuebleRepository->findWithoutFail($id);

        if (empty($inmueble)) {
            Flash::error('Inmueble not found');

            return redirect(route('inmuebles.index'));
        }

        $this->inmuebleRepository->delete($id);

        Flash::success('Inmueble deleted successfully.');

        return redirect(route('inmuebles.index'));
    }
}
