<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ArticuloRequest;
//use App\Repositories\TipoArticuloRepository;
use App\Models\TipoArticulo;
use App\Articulo;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tipo_articulos= TipoArticulo::pluck("Nombre","id");
       $tipo_articulos[0]="Seleccionar Tipo articulo";
       $articulos=Articulo::orderBy("Nombre","ASC")->paginate(4);
       return view('articulos.index')//;//tipo_articulos);
            ->with('tipo_articulos',$tipo_articulos)
            ->with('articulos',$articulos);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_articulos= TipoArticulo::pluck("Nombre","id");
        $tipo_articulos[0]="Seleccionar Tipo articulo";
        return view('articulos.create', compact('tipo_articulos'));//;//tipo_articulos);
            //->with('tipo_articulos',$tipo_articulos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticuloRequest $request)
    {
        $articulo= new Articulo;//::save($request);
        //'Nombre', 'idTipo'
        $articulo->Nombre=$request->Nombre;
        $articulo->idTipo=$request->TipoArticulos;
         $articulo->Descripcion=($request->Descripcion)?$request->Descripcion:"";
       // $articulo->save($options)
        $articulo->save();
        //ArticuloRequest
       /* $validator=$request->validate([
            'Nombre' => 'required|unique:posts|max:255',
            'TipoArticulos' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect('articulos.create')
                        ->withErrors($validator)
                        ->withInput();
        }*/
        return redirect(route('articulos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo=Articulo::FindOrFail($id);
        //print_r($art);
        //die();
        if (empty($articulo)) {
            Flash::error('Articulo not found');

            return redirect(route('articulos.index'));
        }
        $tipo_articulos= TipoArticulo::pluck("Nombre","id");
        $tipo_articulos[0]="Seleccionar Tipo articulo";
        return view('articulos.edit')
        ->with('tipo_articulos',$tipo_articulos)
                  ->with('articulo',$articulo);
        //compact('tipo_articulos'));//;//tipo_articulos);
        //$articulo
            //->with('tipo_articulos',$tipo_articulos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update($id,ArticuloRequest $request)
    {
         $articulo = Articulo::FindOrFail($id);

        if (empty($articulo)) {
            //Flash::error('articulo not found');

            return redirect(route('articulos.index'));
        }

       // $peliculas = $this->peliculasRepository->update($request->all(), $id);
        //$articulo->fill($request->all());
         $articulo->Nombre=$request->Nombre;
        $articulo->idTipo=$request->TipoArticulos;
         $articulo->Descripcion=($request->Descripcion)?$request->Descripcion:"";
        $articulo->save();
        //Flash::success('Articulos updated successfully.');
        return redirect(route('articulos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::FindOrFail($id);

        if (empty($articulo)) {
           // Flash::error('Peliculas not found');

            return redirect(route('articulos.index'));
        }
        $articulo->delete($id);
        //$this->peliculasRepository->delete

        //Flash::success('Peliculas deleted successfully.');

        return redirect(route('articulos.index'));
    }
}
