<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class PinjamController extends Controller
{
    public function index()
    {
        
      
        $data['buku'] = $buku->setPath('perpus');
        return view('perpus.index',$data);
        
    }
}
