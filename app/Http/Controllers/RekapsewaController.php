<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapsewaModel;

class RekapsewaController extends Controller
{
    public function index()
    {
        return view('Rekapsewa');
    }
}
   