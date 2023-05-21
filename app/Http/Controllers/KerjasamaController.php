<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\Request;

class KerjasamaController extends Controller
{
    public function index()
    {
        return view('frontend.pages.kerjasama.index',[
            'title' => 'Form Kerjasama'
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama_lengkap' => ['required'],
            'nama_perusahaan' => ['required'],
            'no_telepon_perusahaan' => ['required'],
            'email_perusahaan' => ['required'],
            'alamat_perusahaan' => ['required'],
            'domisili' => ['required'],
            'pesan' => ['required']
        ]);


        $data = request()->all();
        Kerjasama::create($data);
        return redirect()->route('kerjasama.index')->with('success','Anda berhasil mengajukan kerjasama dengan kami. Silahkan tunggu pesan dari kami.');
    }
}
