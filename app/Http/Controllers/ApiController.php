<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCines()
    {
        $cines = DB::select('call sp_getCines');
        $datos = json_encode($cines);
        return $datos;
    }

    public function getcine($id){
        $cine = DB::select('call sp_getCine(?)',[$id]);
        $datos = json_encode($cine);
        return $datos;

    }

    public function getcineTarifas($id){
        $tarifas = DB::select('call sp_getCineTarifas(?)',[$id]);
        $datos = json_encode($tarifas);
        return $datos;

    }

    public function getcinePeliculas($id){
        $peliculas = DB::select('call sp_getCinePeliculas(?)',[$id]);
        $datos = json_encode($peliculas);
        return $datos;

    }

    public function getpeliculas($id){
        if ($id == "cartelera") {
            $peliculas = DB::select('call sp_getPeliculas(1)');
        }
        else if ($id == "estrenos") {
            $peliculas = DB::select('call sp_getPeliculas(2)');
        }
        else if (is_numeric($id)) {
            $peliculas = DB::select('call sp_getPelicula(?)',[$id]);
        }
        else {
            $peliculas = DB::select('call sp_getPelicula(999)');
        }
        $datos = json_encode($peliculas);
        return $datos;

    }
}
