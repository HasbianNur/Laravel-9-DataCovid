<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function index()
    {
        return view('corona', [
            "title" => "Laravel | Corona"
        ]);
    }

    public function chart()
    {
        $suspects =  Http::get('https://kipi.covid19.go.id/api/get-province');
        return view($suspects);
    }
}
