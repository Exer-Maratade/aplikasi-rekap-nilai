<?php

namespace App\Http\Controllers;

use App\Models\serdik;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class serdikController extends Controller
{
    public function index()
    {
        $data = serdik::all();
        return view('page.Serdik',compact('data'), [
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_siswa' => 'string|required',
            'nosis' => 'integer|required|unique:serdik,nosis,except,id',
            'tempat_lahir' => 'string|nullable',
            'tgl_lahir' => 'date|nullable',
        ]);
        $post = serdik::create($data);

        if ($post) {
            # code...Berhasil
            return redirect('Serdik')->with('berhasil', 'data berhasil ditambahkan');
        }

        if ($post->fails()) {
            return redirect('Serdik')
                        ->withErrors($post)
                        ->withInput();
        }

    }

    public function update(Request $request, $id)
    {
        $data = serdik::findOrFail($id);
        $data->update($request->all());
        return redirect('Serdik')->with('success', 'Data berhasil diperbarui');
    }
}
