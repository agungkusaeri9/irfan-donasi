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

    <section class="campaign">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-md-8">
                    <a href="{{ route('campaign.index') }}" class="text-decoration-none">
                        <span
                            class="btn btn-sm btn-outline-dark @if (!$category) nv-active @endif p-2 ">Semua</span>
                    </a>
                    @foreach ($categories as $cat)
                        <a href="{{ route('campaign.category', $cat->slug) }}" class="text-decoration-none">
                            <span
                                class="btn btn-sm btn-outline-dark p-2 @if ($category && $category->id == $cat->id) nv-active @endif">{{ $cat->name }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <form action="{{ route('campaign.search') }}" method="get">
                        <div class="input-group input-group-lg mb-3">
                            <input type="text" class="form-control fs-6 rounded- input-group-lg" name="keyword"
                                value="{{ $keyword }}" placeholder="Cari Keyword...">
                            <span class="" id="basic-addon2">
                                <button class="btn btn-lg btn-secondary rounded-1 fs-6">Cari</button>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row border-0 bg-transparent">
                @forelse ($items as $item)
                    <div class="col-md-4 col-6 mb-4">
                        <a href="{{ route('campaign.show', $item->slug) }}" class="text-decoration-none text-dark">
                            <div class="card card-campaign">
                                <div class="card-body">
                                    <img src="{{ $item->image() }}" alt="" class="img-fluid" />
                                    <h6 class="title">
                                        {{ $item->name }}
                                    </h6>
                                    <div class="progress">
                                      <div class="progress-bar" style="width: {{ $item->percent() }}%"
                                          role="progressbar" aria-label="Basic example"
                                          aria-valuenow="{{ $item->percent() }}" aria-valuemin="0"
                                          aria-valuemax="100">

                                      </div>
                                  </div>
                                    <span class="nominal">Rp. {{ number_format($item->donation_target) }}</span>
                                    <div class="d-flex justify-content-between">
                                        <span>{{ $item->transactions_success_count }} Donatur</span>
                                        <span>{{ $item->count_day() }} Hari Lagi</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p class="text-center">Campain tidak ditemukan!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
