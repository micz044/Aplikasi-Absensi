<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){


       $validatedData =
         $request->validate([
            'name' => 'required|unique:users,name|max:255',
            'username' => 'required|unique:users,username|min:3|max:20',
            'level_akses' => 'required',
            'email' => 'required|unique:users,email|email:dns',
            'password' =>'required|min:5|max:255'
        ],[
           'name.unique' => 'Nama tidak boleh sama',
           'username.unique' =>'Username sudah digunakan',
           'email.unique' => 'email Sudah Digunakan'
        ]);   
        
            $validatedData['password'] = bcrypt($validatedData['password']);
            User::create($validatedData);
            return redirect('/login')->with('success', 'Anda Berhasil Mendaftar. Silahkan Login!!');   
    }
}
