<?php

namespace App\Http\Controllers\User;

use App\Models\Data;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all();
        $input = $request->input;
        if ($request->id_kategori) {
            $id_kategori = $request->id_kategori;
        } else {
            $id_kategori = 'all';
        }

        if ($id_kategori != 'all' & $input != null) {
            $data = Data::where('id_kategori', $id_kategori)->where('name', 'like', '%' . $input . '%')->get();
        } elseif ($id_kategori != 'all') {
            $data = Data::where('id_kategori', $id_kategori)->get();
        } elseif ($input != null) {
            $data = Data::where('name', 'like', '%' . $input . '%')->get();
        } else {
            $data = Data::with('kategori')->get();
        }

        if ($id_kategori == null && $input == null) {
            $data = Data::with('kategori')->get();
        }


        return view('landing.pages.index', [
            'data' => $data,
            'kategori' => $kategori,
            'id_kategori' => $id_kategori,
        ]);
    }


    public function detailKategori($id)
    {
        $kategori = Kategori::all();
        $data = Data::where('id_kategori', $id)->get();

        return view('landing.pages.index', [
            'data' => $data,
            'kategori' => $kategori,
            'id_kategori' => $id,
        ]);
    }
}
