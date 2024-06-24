<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.pages.kategori', [
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama kategori wajib diisi'
        ]);

        Kategori::create([
            'name' => $request->name
        ]);

        return redirect('/admin/kategori')->with('store', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama kategori wajib diisi'
        ]);

        Kategori::where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('/admin/kategori')->with('update', 'Kategori berhasil diubah');
    }

    public function destroy($id)
    {
        Kategori::destroy($id);
        return redirect('/admin/kategori')->with('destroy', 'Kategori berhasil dihapus');
    }
}
