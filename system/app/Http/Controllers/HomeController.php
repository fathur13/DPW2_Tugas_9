<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showberanda(){
		return view('template.beranda');
	}

	function showproduk(){
		return view('template.produk');
	}


	function client(){
		return view('client.client');
	}

		function test($produk){
			echo "Nama produk $produk";
	
	}


}