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

    public function editData($id){
        $data = Perjalanan::select('*')
                    ->where('id', $id)
                    ->get();

        return view('pages.edit', ['data' => $data]);
    }
    
    public function updateData(Request $request){
        $data = Perjalanan::where('id', $request->id)
            ->update([
                'tanggal'=>$request->tanggal,
                'jam'=>$request->jam,
                'lokasi'=>$request->lokasi,
                'suhu'=>$request->suhu
            ]);
        return redirect('/data')->with('message', 'Data berhasil diubah!');
    }

    public function hapusData($id){
        $data = Perjalanan::where('id', $id)->delete();

        Perjalanan::deleted($data);
        return redirect('/data')->with('message', 'Data berhasil dihapus!');
    }

    // public function edit(){
    //     return view('pages.edit');
    // }


}
