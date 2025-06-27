<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function inicio (){
        $usuarios = new usuarios()->getalluser();
        return view('inicio',['usuarios' => $usuarios]);
    }
}
