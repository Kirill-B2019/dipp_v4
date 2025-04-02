<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatformICOController extends Controller
{
    public function index()
    {
        return view('platformico.ico');
    }
}
