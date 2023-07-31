<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
// {
//     public function index() {
//         return view ('Daftar');
//     }
// }


{
    public function index() {
       $nama = 'Asep';
       return view ('Daftar', ['nama'=> $nama]);


    }

    public function biodata() {
        $nama = 'Asep';
        $mapel =['bahasa', 'seni', 'pemogramana'];
        return view ('biodata', ['nama'=> $nama, 'mapel' => $mapel]);
 
 
     }

     public function getNama($nama) {

      return $nama;


   }
}
