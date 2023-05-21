@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <section class="section">

                            <div class="section-body">
                                <div class="invoice">
                                    <div class="invoice-print">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="invoice-title">
                                                    <h2>Invoice</h2>
                                                    <div class="invoice-number">Code #{{ $item->code }}</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <address>
                                                            <strong>Pengirim :</strong><br>
                                                            {{ $item->name ?? '-' }}<br>
                                                            {{ $item->email ?? '-' }}<br>
                                                            {{ $item->phone_number ?? '-' }}<br>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-6 text-md-right">
                                                        <address>
                                                            <strong>Penerima :</strong><br>
                                                            {{ $setting->site_name }}<br>
                                                            {{ $setting->email }}<br>
                                                            {{ $setting->phone }}<br>
                                                            {{ $setting->address }}
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <address>
                                                            <strong>Metode Pembayaran:</strong><br>
                                                            @if ($item->payment_id)
                                                                {{ $item->payment->name . ' - ' . $item->payment->number }}<br>
                                                                {{ $item->payment->description }}
                                                            @else
                                                                '-'
                                                            @endif
                                                        </address>
                                                        <Address>
                                                            <strong>Status</strong><br>
                                                            @if ($item->is_verified == 1)
                                                                <span class="badge bg-success">Terverifikasi</span>
                                                            @else
                                                            <span class="badge bg-danger">Proses Verifikasi</span>
                                                            @endif
                                                        </Address>
                                                    </div>
                                                    <div class="col-md-6 text-md-right">
                                                        <address>
                                                            <strong>Tanggal:</strong><br>
                                                            {{ $item->created_at->translatedFormat('l, d F Y H:i') }}<br><br>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover table-md">
                                                        <tr>
                                                            <th>Campaign</th>
                                                            <th class="text-center">Nominal</th>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $item->program->name ?? '-' }}</td>
                                                            <td class="text-right">Rp {{ number_format($item->nominal,0,',','.') }}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-md-12">
                                                        <p class="fs-6 fw-light text-center">
                                                            Kami mengucapkan terima kasih yang tulus atas donasi yang telah Anda sumbangkan. Dukungan finansial yang Anda berikan kepada kami akan memungkinkan kami untuk terus melaksanakan proyek-proyek sosial kami dan memberikan bantuan kepada mereka yang membutuhkan.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            @auth
                                                <a href="{{ route('transaction.index') }}" class="btn btn-warning text-white"><i
                                                        class="fas fa-arrow-left"></i> Kembali</a>
                                            @else
                                                <a href="{{ route('home') }}" class="btn btn-warning text-white"><i
                                                        class="fas fa-arrow-left"></i> Kembali</a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
