<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return Carbon::now();
    }
}
