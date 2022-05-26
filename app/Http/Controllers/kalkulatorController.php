<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kalkulator;

class kalkulatorController extends Controller
{
    public function kalkulator(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $hitung=new kalkulator();
        $hasil=[
            'nama'=>$request->get('nama'),
            'tanggal'=>$hitung->TanggalMeninggal($request->get('tanggal')),
            'tiga'=>$hitung->Tanggal3Hari($request->get('tanggal')),
            'tujuh'=>$hitung->Tanggal7Hari($request->get('tanggal')),
            'empatpuluh'=>$hitung->Tanggal40Hari($request->get('tanggal')),
            'seratus'=>$hitung->Tanggal100Hari($request->get('tanggal')),
            'pendhakpisan'=>$hitung->TanggalPendhakPisan($request->get('tanggal')),
            'pendhakkalih'=>$hitung->TanggalPendhakKalih($request->get('tanggal')),
            'seribu'=>$hitung->Tanggal1000Hari($request->get('tanggal')),
        ];
        return view('result',['hasil'=>$hasil]);
    }
}
