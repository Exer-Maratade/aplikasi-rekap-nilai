<?php

namespace App\Http\Controllers;

use App\Models\pleton;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class pletonController extends Controller
{
    public function index(){
        $data = pleton::with('serdik');
        return view('page.Pleton', compact('data'));
    }
}
