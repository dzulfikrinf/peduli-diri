<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Perjalanan;
use App\Models\User;

class CariController extends Controller
{
    public function cariPerjalanan(Request $request) {
        // $perjalanans = Auth::user()->PerjalananModels();

        if ($cari = $request->tanggal) {
            $data = User::join('perjalanans','perjalanans.id_user','=','users.id')
                ->where('perjalanans.tanggal', $cari)
                ->orWhereYear('perjalanans.tanggal', $cari)->get(['users.name', 'perjalanans.*']);
        } elseif ($cari = $request->lokasi) {
            $data = User::join('perjalanans','perjalanans.id_user','=','users.id')
                ->where('perjalanans.lokasi', 'like', '%'.$cari.'%')->get(['users.name', 'perjalanans.*']);
        } elseif ($cari = $request->suhu) {
            $data = User::join('perjalanans','perjalanans.id_user','=','users.id')
                ->where('perjalanans.suhu', 'like', '%'.$cari.'%')->get(['users.name', 'perjalanans.*']);
        } elseif ($cari = $request->jam) {
            $data = User::join('perjalanans','perjalanans.id_user','=','users.id')
                ->where('perjalanans.jam', 'like', '%'.$cari.'%')->get(['users.name', 'perjalanans.*']);
        } else {
            $data = User::join('perjalanans','perjalanans.id_user','=','users.id')
                ->get(['users.name', 'perjalanans.*']);
        }
        return view('pages.data', ['data' => $data]);
    }
}
