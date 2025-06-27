<?php
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UsuariosController::class, 'inicio']);
