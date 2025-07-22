<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class usuarios extends Model
{
    protected $table = 'usuarios';
    public function getalluser(){
        $usuarios = DB::select('select * from usuarios');
        return $usuarios;
    }
    public function getuser($idu){
        $usuarios = DB::select('select * from usuarios where id = ?', [$idu]);
        return $usuarios;
    }
}
