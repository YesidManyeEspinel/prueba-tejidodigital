<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//models
use App\Usuario;

class UsuarioController extends Controller
{
    //
    public function addUser(Request $request)
    {
    	$add = new Usuario($request->all());
    	$add->save();

    	return response()->json('true');
    }

    public function queryUser()
    {
    	$query = Usuario::all()->count();

    	return response()->json($query);
    }
}
