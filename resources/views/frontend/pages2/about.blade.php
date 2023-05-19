@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h-about">About Us</h2>
                <p>
                    Hayu Donation bekerja dengan menghubungkan para calon donatur dan masyarakat yang membutuhkan
                    sehingga mereka dapat memperoleh dana yang dibutuhkan secara menyeluruh.
                </p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title title-card">Verifikasi Data</h5>
                        <p class="card-text text-card">Proses verifikasi yang dilakukan sebelum memulai donasi atau
                            melakukan penggalangan dana yang ingin diajukan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title title-card">Penggalangan Dana </h5>
                        <p class="card-text text-card">Suatu upaya atau proses pengumpulan kontribusi sukarela yang
                            dilakukan untuk membantu masyarakat yang membutuhkan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title title-card">Penyaluran Dana</h5>
                        <p class="card-text text-card">Perolehan dana yang dikumpulkan para donatur dari melakukan
                            donasi atau penggalangan dana akan disalurkan kepada penerima yang membutuhkan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-dana">Pencairan dana yang di peroleh dari para donatur platform Hayu
                        Donation yang sudah diterima dan di salurkan kepada yang berhak menerima.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('trans') }}" class="get-started-btn">Transparasi Dana</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
