<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class ZakatController extends Controller
{
    public function index()
    {
        return view('frontend.pages.zakat',[
            'title' => 'Hitung Zakat',
            'jumlah_uang' => NULL,
            'jumlah_beras' => NULL,
            'jumlah_jiwa' => NULL
        ]);
    }

    public function hitung()
    {
        request()->validate([
            'jumlah_jiwa' => ['required']
        ]);

        $jumlah_jiwa = request('jumlah_jiwa');
        $pengaturan = Setting::first();
        $jumlah_uang = $jumlah_jiwa * $pengaturan->zakat_fitrah_uang;
        $jumlah_beras = $jumlah_jiwa * $pengaturan->zakat_fitrah_beras;

        return view('frontend.pages.zakat',[
            'title' => 'Hitung Zakat',
            'jumlah_uang' => $jumlah_uang,
            'jumlah_beras' => $jumlah_beras,
            'jumlah_jiwa' => $jumlah_jiwa
        ]);
    }
}
