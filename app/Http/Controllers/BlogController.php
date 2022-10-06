<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Covid;
use App\Models\Product;

class BlogController extends Controller
{
    //php artisan make:controller namacontrollernya
    public function index()
    {
        return view('index', [
            'products' => Product::latest()->paginate(5)
        ]);
    }
    public function biodata()
    {
        $nama_siswa = "Hasbian Nur";
        $mapel = [
            'Laravel',
            'Pemprograman web',
            'Basis DAta'
        ];
        return view('index', [
            'title' => "Belajar Laravel",
            'data' => $mapel,
            'nama' => $nama_siswa
        ]);
    }
    public function getNama($nama)
    {
        return $nama;
    }
    public function pendaftaran()
    {
        return view('daftar', [
            'title' => "form pendaftaran"
        ]);
    }
    public function proses(Request $request)
    {
        $nama  = $request->name;
        $alamat = $request->alamat;
        $suhutubuh = $request->suhutubuh;
        $vaksinasi = $request->vaksin;
        $covid = $request->covid;
        return  view('dataTabelcovid', [
            'title' => "Laravel | TabelCovid",
            'nama' => $nama,
            'alamat' => $alamat,
            'suhutubuh' => $suhutubuh,
            'vaksinasi' => $vaksinasi,
            'covid' => $covid
        ]);
    }
    // public function suhu(Request $request){

    public function home()
    {
        return view('home', [
            'title' => "Laravel | Home",
            'products' => Product::latest()->paginate(5),
            'i' => 0
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => "Laravel | About"
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => "Laravel | Contact",
            'tulisan' => "Contact Page"
        ]);
    }

    public function data()
    {
        return view('datacovid', [
            'title' => 'Form Covid-19',
            'data' => Covid::paginate(5)
        ]);
    }

    public function getDataCovid(Request $request)
    {
        $finaldata = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'suhu_tubuh' => 'required',
            'vaksinasi' => 'required',
            'pernah_terdampak' => 'required'
        ]);

        Covid::create($finaldata);

        return redirect('datacovid');
    }

    public function dashboard()
    {
        return view('dashboard', [
            'title' => "Laravel | Dashboard",
            'products' => Product::latest()->paginate(5),
            'i' => 0
        ]);
    }

    public function corona()
    {
        return view('corona', [
            'title' => "Laravel | Corona"
        ]);
    }

    // public function chart()
    // {
    //     $suspects =  Http::get('https://data.covid19.go.id/public/api/update.json');
    //     return view($suspects);
    // }

    public function alur(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        return view('rekamData', [
            "title" => "Laravel | RekamDataCovid",
            'nama'  => $nama,
            'alamat' => $alamat
        ]);
    }
}
