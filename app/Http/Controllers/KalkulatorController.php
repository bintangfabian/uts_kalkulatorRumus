<?php

namespace App\Http\Controllers;

use App\Models\Kalkulator;
use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu');
    }

    public function volumeTabung(Request $request)
    {
        $phi = 22/7;
        $jari = $request -> input('jari');
        $tinggi = $request -> input('tinggi');
        
        $hasil = ($phi * $jari * $jari) * $tinggi;

        return redirect('/tabung')->with('infotab',' Volume Tabung Tersebut ialah = ' . $hasil);
    }

    public function volumebola(Request $request)
    {
        $phi = 22/7;
        $rms = 4/3;
        $jari = $request -> input('jari');
        
        $hasil = $rms * $phi * $jari * $jari * $jari;

        return redirect('/bola')->with('infobol',' Volume Bola Tersebut ialah = ' . $hasil);
    }

    public function volumeKerucut(Request $request)
    {
        $phi = 22/7;
        $rms = 1/3;
        $jari = $request -> input('jari');
        $tinggi = $request -> input('tinggi');
        
        $hasil = $rms * $phi * $jari * $jari * $tinggi;

        return redirect('/kerucut')->with('infoker',' Ruang Kerucut Tersebut ialah = ' . $hasil);
    }
}
