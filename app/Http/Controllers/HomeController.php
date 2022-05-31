<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insidentil;
use App\Models\Khusus;
use App\Models\Rekomendasi;
use App\Models\Lintrayek;
use App\Models\Pemilik;
use App\Models\Prinsip;
use App\Models\Usaha;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_lintrayek = Lintrayek::count();
        $data_insidentil = Insidentil::count();
        $data_rekomendasi = Rekomendasi::count();
        $data_khusus = Khusus::count();
        $data_prinsip = Prinsip::count();
        $data_pemilik = Pemilik::count();
        $data_usaha = Usaha::count();
        $data_user = User::count();
        return view('home', compact('data_lintrayek', 'data_insidentil', 'data_rekomendasi', 'data_khusus', 'data_prinsip', 'data_pemilik', 'data_usaha', 'data_user'));
    }
}
