<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::with('kategori')->get();
        $kategori = Kategori::all();
        return view('admin.pages.data', [
            'data' => $data,
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name_mandarin' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'id_kategori' => 'required'
        ], [
            'name.required' => 'Nama wajib diisi',
            'name_mandarin.required' => 'Nama Mandarin wajib diisi',
            'description.required' => 'Deskripsi wajib diisi',
            'image.required' => 'Gambar wajib diisi',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
            'id_kategori.required' => 'Kategori wajib diisi'
        ]);

        // upload image
        $image = $request->file('image');
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('images'), $image_name);

        Data::create([
            'name' => $request->name,
            'name_mandarin' => $request->name_mandarin,
            'description' => $request->description,
            'image' => $image_name,
            'id_kategori' => $request->id_kategori
        ]);

        return redirect('/admin/data')->with('update', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        if ($request->file('image')) {
            $request->validate([
                'name' => 'required',
                'name_mandarin' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'id_kategori' => 'required'
            ], [
                'name.required' => 'Nama wajib diisi',
                'name_mandarin.required' => 'Nama Mandarin wajib diisi',
                'description.required' => 'Deskripsi wajib diisi',
                'image.required' => 'Gambar wajib diisi',
                'image.image' => 'File harus berupa gambar',
                'image.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
                'id_kategori.required' => 'Kategori wajib diisi'
            ]);

            // hapus image lama
            $data = Data::find($id);
            if ($data->image != 'default.jpg') {
                unlink(public_path('images/' . $data->image));
            }

            // upload image
            $image = $request->file('image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);

            Data::where('id', $id)->update([
                'name' => $request->name,
                'name_mandarin' => $request->name_mandarin,
                'description' => $request->description,
                'image' => $image_name,
                'id_kategori' => $request->id_kategori
            ]);

            return redirect('/admin/data')->with('update', 'Data berhasil diubah');
        } else {

            Data::where('id', $id)->update([
                'name' => $request->name,
                'name_mandarin' => $request->name_mandarin,
                'description' => $request->description,
                'id_kategori' => $request->id
            ]);
        }

        return redirect('/admin/data')->with('update', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Data::destroy($id);
        return redirect('/admin/data')->with('destroy', 'Data berhasil dihapus');
    }
}
