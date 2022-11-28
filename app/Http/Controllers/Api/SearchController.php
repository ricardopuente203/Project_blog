<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trainer;


class SearchController extends Controller
{
    public function search(Request $request){
        $error = ['error' => 'Sin resultados, ingrese otros campos para la búsqueda.'];
        if($request->has('text')){
            $entrenadores = Trainer::search($request->get('text'))->get();
            return $entrenadores->count() ? $entrenadores : $error;
    }
    return $error;
}
}