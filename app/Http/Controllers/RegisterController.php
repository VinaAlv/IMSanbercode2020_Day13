<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    //menampilkan halaman register(form)
    public function form(){
        return view ('form');
    }

    public function welcome(Request $request){
        // dd($request->all()); //menampilkan array asosiatif (testing)
        //mengambil data nama dari form yang tersimpan di array assosiatif
        $firstName= $request["first_name"]; 
        $lastName= $request["last_name"];
        //mengembalikan nilai dari nama dan menampilkan halaman selamat datang
        return view ('welcome', compact ("firstName", "lastName"));
    } 
    
    public function master(){
        return view('adminLTE.master');
    }

    public function tabel(){
        return view ('items.tabel');
    }

    public function dataTables(){
        return view ('items.dataTables');
    }
    
}