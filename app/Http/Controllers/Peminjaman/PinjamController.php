<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinjamController extends Controller{

    function index(){
        return view('page.peminjaman.pinjam');
    }

}