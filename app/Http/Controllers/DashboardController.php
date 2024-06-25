<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $totaldata = Data::Count();
        $totalkategori = Kategori::Count();
        return view('admin.pages.dashboard',[
            'totaldata' => $totaldata,
            'totalkategori' =>$totalkategori,
        ]);
    }
}
