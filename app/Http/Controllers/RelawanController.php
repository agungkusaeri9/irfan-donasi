<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index()
    {
        return view('frontend.pages.relawan.index', [
            'title' => 'Form Relawan'
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama_lengkap' => ['required'],
            'no_hp' => ['required'],
            'nik' => ['required'],
            'alamat' => ['required'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'agama' => ['required'],
            'pendidikan_terakhir' => ['required']
        ]);


        $data = request()->all();
        Relawan::create($data);
        return redirect()->route('relawan.index')->with('success', 'Anda berhasil mengajukan menjadi relawan. Silahkan tunggu pesan dari kami.');
    }
}
