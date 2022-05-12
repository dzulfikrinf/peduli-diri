<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function register(Request $request){
        // dd($request->all());
        $request -> validate([
            'email' => 'required|unique:users,email',
            'name' => 'required'
        ],
        [
            'email.unique'=>'NIK sudah  terdaftar',
            'name.required'=>'nama tidak boleh kosong'
        ]);
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->email)
        ];
        //dd($data);
        User::create($data);
       
        return redirect('/')->with('message',"Registrasi Berhasil!");
    }
}
