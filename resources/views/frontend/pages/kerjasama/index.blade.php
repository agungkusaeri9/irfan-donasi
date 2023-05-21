@extends('frontend.layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h5 class="mb-4 mt-5">Form Kerjasama</h5>
                </div>
                <form action="{{ route('kerjasama.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class='form-group mb-3'>
                        <label for='nama_lengkap' class='mb-2'>Nama Lengkap</label>
                        <input type='text' name='nama_lengkap'
                            class='form-control @error('nama_lengkap') is-invalid @enderror'
                            value='{{ old('nama_lengkap') }}'>
                        @error('nama_lengkap')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='nama_perusahaan' class='mb-2'>Nama Perusahaan</label>
                        <input type='text' name='nama_perusahaan'
                            class='form-control @error('nama_perusahaan') is-invalid @enderror'
                            value='{{ old('nama_perusahaan') }}'>
                        @error('nama_perusahaan')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='no_telepon_perusahaan' class='mb-2'>Nomor Telepon Perusahaan</label>
                        <input type='text' name='no_telepon_perusahaan'
                            class='form-control @error('no_telepon_perusahaan') is-invalid @enderror'
                            value='{{ old('no_telepon_perusahaan') }}'>
                        @error('no_telepon_perusahaan')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='email_perusahaan' class='mb-2'>Email Perusahaan</label>
                        <input type='text' name='email_perusahaan'
                            class='form-control @error('email_perusahaan') is-invalid @enderror'
                            value='{{ old('email_perusahaan') }}'>
                        @error('email_perusahaan')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='alamat_perusahaan' class='mb-2'>Alamat Perusahaan</label>
                        <textarea name='alamat_perusahaan' id='alamat_perusahaan' cols='30' rows='3'
                            class='form-control @error('alamat_perusahaan') is-invalid @enderror'>{{ old('alamat_perusahaan') }}</textarea>
                        @error('alamat_perusahaan')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='domisili' class='mb-2'>Domisili</label>
                        <input type='text' name='domisili' class='form-control @error('domisili') is-invalid @enderror'
                            value='{{ old('domisili') }}'>
                        @error('domisili')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='pesan' class='mb-2'>Pesan</label>
                        <textarea name='pesan' id='pesan' cols='30' rows='3'
                            class='form-control @error('pesan') is-invalid @enderror'>{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3 float-right">
                        <button class="btn text-right btn-primary">Submit</button>
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
