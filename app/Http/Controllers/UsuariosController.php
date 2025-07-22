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
    public function verInfo (Request $request){
        $id= $request->id;
        $usuarios = new usuarios()->getuser($id);
        return response()->json(['usuarios' => $usuarios]);
    }
}
