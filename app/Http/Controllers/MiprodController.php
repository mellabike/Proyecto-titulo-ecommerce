<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Miprod;

class MiprodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //return Miprod::where('user_id', auth()->id())->get();
    if($request->ajax()){
        return Miprod::where('user_id', auth()->id())->get();
      }else{
        return view('mimenu');
    }
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
     public function store(Request $request)
    {

     $miprod = new Miprod();
     $miprod->nombre = $request->nombre;
     $miprod->descripcion = $request->descripcion;
     $miprod->user_id = auth()->id();
     $miprod->save();

    return $miprod;
    }  
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function update(Request $request, $id)
    {        
    $miprod = Miprod::find($id);
    $miprod->nombre = $request->nombre;
    $miprod->descripcion = $request->descripcion;
    $miprod->save();
    return $miprod;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
     public function destroy($id)
    {
    $miprod = Miprod::find($id);
    $miprod->delete();
    }
}
