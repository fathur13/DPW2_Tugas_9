<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

	function showlogin(){
		return view('template.login');
	}

	function loginprocess(){

		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'login berhasil');
		}else {
			return back()->with('danger', 'login gagal, silahkan cek email dan password anda'); 
		}
	}

	function logout(){
		Auth::logout();
		return redirect('admin/beranda');

	}


	function registrasi(){
		return view('template.registrasi');

	}
	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		
		$user->save();

		return redirect('login')->with('success', 'Data Berhasil Ditambahkan');
		
	}
}

	