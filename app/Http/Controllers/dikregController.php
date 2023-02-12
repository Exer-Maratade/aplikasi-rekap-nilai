<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\dikreg;
use Illuminate\Http\Request;

class dikregController extends Controller
{
    public function dikreg()
    {
        $data = dikreg::all();
        return view('page.Dikreg', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {

       $validate = $request->validate([
            'jenis_dik' => 'required',
            'nama_dik' => 'required',
            'angkatan' => 'required | unique:dikreg',
            'tahun' => 'required', 'date',
        ]);

        $post = dikreg::create($validate);

        if ($post) {
            return redirect('Dikreg')->with('berhasil', 'data berhasil ditambahkan');
        } else {
            return redirect('/Dikreg')
                ->back()
                ->withInput()
                ->with([
                    'gagal', 'terjadi kesalahan, periksa lagi data masukan anda'
                ]);
        }

        // if ($post) {
        //     return redirect('/Dikreg')->with('berhasil', 'data berhasil ditambahkan');
        // } else {
        //     return redirect('/Dikreg')->with('gagal', 'data gagal ditambahkan');
        // }
    }
}
