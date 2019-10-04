<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function producto(){
        $productos = App\Producto::all();
        return view('producto',compact('productos'));
    }
}
