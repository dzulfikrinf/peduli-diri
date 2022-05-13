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
            'email' => 'min:16|max:16|required|unique:users,email',
            'name' => 'required'
        ],
        [
            'email.min'=>'NIK Minimal 16 digit',
            'email.max'=>'NIK Maksimal 16 digit',
            'email.unique'=>'NIK sudah  terdaftar',
            'name.required'=>'Nama tidak boleh kosong!'
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
