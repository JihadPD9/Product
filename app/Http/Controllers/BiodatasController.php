<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodatasController extends Controller
{
    public function tampil () {
        $biodata = Biodata::all();
        return view('biodata2',compact('biodata'));
    }
}
