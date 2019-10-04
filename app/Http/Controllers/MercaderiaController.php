<?php

namespace App\Http\Controllers;

use App\Mercaderia;
use Illuminate\Http\Request;

class MercaderiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['mercaderia']=Mercaderia::paginate(15);
        return view('mercaderia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mercaderia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //obtengo toda la informacion de mercaderia
        $datosMercaderia=request()->all();
        //$datosMercaderia=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosMercaderia['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Mercaderia::insert($datosMercaderia);

        return response()-> json($datosMercaderia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mercaderia  $mercaderia
     * @return \Illuminate\Http\Response
     */
    public function show(Mercaderia $mercaderia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mercaderia  $mercaderia
     * @return \Illuminate\Http\Response
     */
    public function edit(Mercaderia $mercaderia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mercaderia  $mercaderia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mercaderia $mercaderia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mercaderia  $mercaderia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mercaderia $mercaderia)
    {
        //
    }
}
