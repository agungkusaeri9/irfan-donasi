@extends('frontend.layouts.app')
@section('content')
    <div class="container mt-5">
        @if ($jumlah_uang)
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-success">
                        <p>Perhitungan Zakat</p>
                        <ul class="list-unstyled">
                            <li class="list-item d-flex justify-content-between">
                                <span>Jumlah Jiwa</span>
                                <span>{{ $jumlah_jiwa ?? 0 }}</span>
                            </li>
                            <hr style="margin:10px 0px">
                            <li class="list-item d-flex justify-content-between">
                                <span>Berupa Uang Sebesar</span>
                                <span> Rp {{ $jumlah_uang ? number_format($jumlah_uang, 0, ',', '.') : 0 }}</span>
                            </li>
                            <hr style="margin:10px 0px">
                            <li class="list-item d-flex justify-content-between">
                                <span>Berupa Beras (Kg)</span>
                                <span>{{ $jumlah_beras . ' Kg' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mt-5">
                    <h5 class="mb-4">Perhitungan Zakat</h5>
                </div>
                <form action="{{ route('zakat.index') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="mb-2">Jumlah Jiwa</label>
                            <input type="number" class="form-control @error('jumlah_jiwa') is-invalid @enderror"
                                required="" name="jumlah_jiwa" value="{{ $jumlah_jiwa }}">
                            @error('jumlah_jiwa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">Hitung</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
    @include('admin.layouts.partials.sweetalert')
@endpush
