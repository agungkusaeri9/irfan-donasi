@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <!-- slider -->
        <div class="slider-home">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($slider as $sd)
                        <div class="carousel-item @if ($slider->where('is_active', 1)->first()->id == $sd->id) active @endif">
                            <img src="{{ $sd->image() }}" class="d-block w-100" alt="" />
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-3">

        <!-- card campaign -->
        <section class="campaign">
            <div class="container mt-3">
                <div class="row card">
                    <div class="col-md-12">
                        <div class="card-body px-0 row">
                            <div class="d-flex justify-content-between">
                                <h6 class="campaign-kategori-title">
                                    Campaign Pasien Mendesak
                                </h6>
                                <a href="{{ route('campaign.category',$program1->first()->category->slug ?? '') }}"
                                    class="text-decoration-none text-dark campaign-kategori-lainnya">
                                    Lihat Lainnya
                                </a>
                            </div>
                            @foreach ($program1 as $prog1)
                                <div class="col-md-4 col-6 mb-2">
                                    <a href="{{ route('campaign.show', $prog1->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card card-campaign">
                                            <div class="card-body">
                                                <img src="{{ $prog1->image() }}" alt="" class="img-fluid" />
                                                <h6 class="title">
                                                    {{ $prog1->name }}
                                                </h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: {{ $prog1->percent() }}%"
                                                        role="progressbar" aria-label="Basic example"
                                                        aria-valuenow="{{ $prog1->percent() }}" aria-valuemin="0"
                                                        aria-valuemax="100">

                                                    </div>
                                                </div>
                                                <span class="nominal">Rp. {{ number_format($prog1->donation_target) }}</span>
                                                <div class="d-flex justify-content-between">
                                                    <span>{{ $prog1->transactions_success_count }} Donatur</span>
                                                    <span>{{ $prog1->count_day() }} Hari Lagi</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="campaign">
            <div class="container mt-3">
                <div class="row card">
                    <div class="col-md-12">
                        <div class="card-body px-0 row">
                            <div class="d-flex justify-content-between">
                                <h6 class="campaign-kategori-title">Campaign Pilihan</h6>
                                <a href="{{ route('campaign.category',$program2->first()->category->slug ?? '') }}"
                                    class="text-decoration-none text-dark campaign-kategori-lainnya">
                                    Lihat Lainnya
                                </a>
                            </div>
                            @foreach ($program2 as $prog2)
                                <div class="col-md-4 col-6 mb-2">
                                    <a href="{{ route('campaign.show', $prog2->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card card-campaign">
                                            <div class="card-body">
                                                <img src="{{ $prog2->image() }}" alt="" class="img-fluid" />
                                                <h6 class="title">
                                                    {{ $prog2->name }}
                                                </h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: {{ $prog2->percent() }}%"
                                                        role="progressbar" aria-label="Basic example"
                                                        aria-valuenow="{{ $prog2->percent() }}" aria-valuemin="0"
                                                        aria-valuemax="100">

                                                    </div>
                                                </div>
                                                <span class="nominal">Rp.
                                                    {{ number_format($prog2->donation_target) }}</span>
                                                <div class="d-flex justify-content-between">
                                                    <span>{{ $prog2->transactions_success_count }} Donatur</span>
                                                    <span>{{ $prog2->count_day() }} Hari Lagi</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="campaign">
            <div class="container mt-3">
                <div class="row card">
                    <div class="col-md-12">
                        <div class="card-body px-0 row">
                            <div class="d-flex justify-content-between">
                                <h6 class="campaign-kategori-title">Campaign Zakat</h6>
                                <a href="{{ route('campaign.category',$program3->first()->category->slug ?? '') }}"
                                    class="text-decoration-none text-dark campaign-kategori-lainnya">
                                    Lihat Lainnya
                                </a>
                            </div>
                            @foreach ($program3 as $prog3)
                                <div class="col-md-4 col-6 mb-2">
                                    <a href="{{ route('campaign.show', $prog3->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card card-campaign">
                                            <div class="card-body">
                                                <img src="{{ $prog3->image() }}" alt="" class="img-fluid" />
                                                <h6 class="title">
                                                    {{ $prog3->name }}
                                                </h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: {{ $prog3->percent() }}%"
                                                        role="progressbar" aria-label="Basic example"
                                                        aria-valuenow="{{ $prog3->percent() }}" aria-valuemin="0"
                                                        aria-valuemax="100">

                                                    </div>
                                                </div>
                                                <span class="nominal">Rp.
                                                    {{ number_format($prog3->donation_target) }}</span>
                                                <div class="d-flex justify-content-between">
                                                    <span>{{ $prog3->transactions_success_count }} Donatur</span>
                                                    <span>{{ $prog3->count_day() }} Hari Lagi</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-3">
                <div class="row card">
                    <div class="col-md-12">
                        <div class="card-body px-0 row">
                            <div class="d-flex justify-content-between">
                                <h6 class="campaign-kategori-title">
                                    Berita Terbaru
                                </h6>
                                <a href="{{ route('artikel.index') }}"
                                    class="text-decoration-none text-dark campaign-kategori-lainnya">
                                    Lihat Lainnya
                                </a>
                            </div>
                            @foreach ($posts as $post)
                                <div class="col-md-3 col-6 mb-2">
                                    <a href="{{ route('artikel.show', $post->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card card-campaign">
                                            <div class="card-body">
                                                <img src="{{ $post->image }}" alt="" class="img-fluid" />
                                                <h6 class="title">
                                                    {{ $post->title }}
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
