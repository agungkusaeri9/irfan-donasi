@extends('frontend.layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h5 class="mb-4 mt-5">Form Relawan</h5>
                </div>
                <form action="{{ route('relawan.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for='no_hp' class='mb-2'>Nomor HP</label>
                        <input type='text' name='no_hp' class='form-control @error('no_hp') is-invalid @enderror'
                            value='{{ old('no_hp') }}'>
                        @error('no_hp')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='nik' class='mb-2'>NIK</label>
                        <input type='text' name='nik' class='form-control @error('nik') is-invalid @enderror'
                            value='{{ old('nik') }}'>
                        @error('nik')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='alamat' class='mb-2'>Alamat</label>
                        <textarea name='alamat' id='alamat' cols='30' rows='3'
                            class='form-control @error('alamat') is-invalid @enderror'>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='tanggal_lahir' class='mb-2'>Tanggal Lahir</label>
                        <input type='date' name='tanggal_lahir'
                            class='form-control @error('tanggal_lahir') is-invalid @enderror'
                            value='{{ old('tanggal_lahir') }}'>
                        @error('tanggal_lahir')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin" class="mb-2">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="" disabled selected>Pilih</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="agama" class="mb-2">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="" disabled selected>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pendidikan_terakhir" class="mb-2">Pendidikan Terakhir</label>
                        <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control">
                            <option value="" disabled selected>Pilih</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class='form-group mb-3'>
                        <label for='pekerjaan' class='mb-2'>Pekerjaan</label>
                        <input type='text' name='pekerjaan' class='form-control @error('pekerjaan') is-invalid @enderror'
                            value='{{ old('pekerjaan') }}'>
                        @error('pekerjaan')
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
