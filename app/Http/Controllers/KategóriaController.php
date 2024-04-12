<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategóriaController extends Controller
{
    function eggyesült(){
        $kat=DB::table('kategórias as kate')
        ->select('kate.*','recepts.*')
        ->join('recepts','recepts.kat_id','=','kate.id')
        ->get();
        return view('Kategória.kategória',['kate'=>$kat]);
    }
}
