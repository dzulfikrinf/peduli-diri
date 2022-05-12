<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    public function index(){
        return view('pages.dashboard');
    }

    public function inputDataPerjalanan(){
        return view('pages.input');
    }

    public function simpanPerjalanan(Request $request){
        $data = [
            'id_user'=>1,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];
        // dd($data);

        Perjalanan::create($data);
        return redirect('/data')->with('message',"Data berhasil disimpan!");
    }

    public function tampildata(){
        $data=perjalanan::all();
        return view('pages.data',['data'=>$data]);
    }


}
