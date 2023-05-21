<?php

namespace App\Http\Controllers;

use App\Helper\Wablas;
use App\Models\Payments;
use App\Models\Program;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Midtrans\Snap;


class TransactionController extends Controller
{
    public function index()
    {
        $items = Transaction::with(['program', 'payment'])->where('user_id', auth()->id())->latest()->get();

        return view('frontend.pages.transaction.index', [
            'title' => 'Donasi Saya',
            'items' => $items
        ]);
    }

    public function payment($slug)
    {
        $item = Program::where('slug', $slug)->first();
        $payments = Payments::orderBy('name', 'ASC')->get();
        return view('frontend.pages.transaction.payment', [
            'title' => 'Pilih Metode Pembayaran',
            'item' => $item,
            'payments' => $payments
        ]);
    }

    public function donate()
    {
        request()->validate([
            'nominal' => ['required', 'numeric'],
            'program_id' => ['required', 'numeric'],
            'phone_number' => ['required'],
            'name' => ['required'],
            'payment_id' => ['required']
        ]);

        $data = request()->only(['payment_id', 'name', 'acceptance', 'is_anonim', 'nominal', 'program_id', 'email', 'phone_number', 'type']);
        $data['phone_number'] = request('phone_number');

        try {
            // cek login
            if (Auth::check() == FALSE) {
                $data['user_id'] = NULL;
            } else {
                $data['user_id'] = auth()->id();
            }
            $u_code = rand(100, 999);
            $data['u_code'] = $u_code;
            $data['nominal'] = $data['nominal'] + $u_code;
            $latest = Transaction::latest()->first();
            // cek apakah ada transaksi
            if ($latest) {
                $code_date = Str::substr($latest->code, 0, 8);
                $current_date = Carbon::now()->translatedFormat('Ymd');
                if ($code_date === $current_date) {
                    $code_latest = Str::substr($latest->code, 8);
                    $new_code = $code_date . str_pad(($code_latest + 1), 3, "0", STR_PAD_LEFT);
                } else {
                    $current_date = Carbon::now()->translatedFormat('Ymd');
                    $new_code = $current_date . str_pad(1, 3, "0", STR_PAD_LEFT);
                }
            } else {
                $current_date = Carbon::now()->translatedFormat('Ymd');
                $new_code = $current_date . str_pad(1, 3, "0", STR_PAD_LEFT);
            }

            // dd($latest_id);
            $data['code'] = $new_code;
            // insert ke db
            $transaction = Transaction::create($data);

            $encrypt_code = encrypt($transaction->code);
            return redirect()->route('success', $encrypt_code)->with(['success', 'Donasi Berhasil silahkan lakukan transfer!', 'code' => $transaction->code]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Donasi Gagal');
        }
    }

    public function success($token)
    {
        $code = decrypt($token);
        if (!$code) {
            return redirect()->route('home');
        }
        $item = Transaction::where('code', $code)->first();
        $setting = Setting::first();
        return view('frontend.pages.transaction.success', [
            'title' => 'Berhasil',
            'item' => $item,
            'setting' => $setting,
            'success' => 'Transaksi berhasil dilakuka. Silahkan lakukan pembayaran sesuai yang tertera dibawah ini'
        ]);
    }
}
