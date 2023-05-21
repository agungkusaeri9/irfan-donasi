@extends('frontend.layouts.app')
@section('content')
    <section class="campaign">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-md-12">
                    <form action="{{ route('campaign.search') }}" method="get">
                        <div class="input-group input-group-lg mb-3">
                            <input type="text" class="form-control fs-6 rounded- input-group-lg" name="keyword"
                                value="{{ $keyword }}" placeholder="Cari Keyword...">
                            <span class="" id="basic-addon2">
                                <button class="btn btn-lg btn-outline-primary rounded-1 fs-6">Cari</button>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <h2 class="text-center">{{ $category->name ?? 'Donasi' }}</h2>
                </div>
            </div>
            <div class="row border-0 bg-transparent">
                @forelse ($items as $item)
                    <div class="col-md-4 col-6 mb-4">
                        <a href="{{ route('campaign.show', $item->slug) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 card-campaign">
                                <div class="card-body ">
                                    <img src="{{ $item->image() }}" alt="" class="img-fluid img" />
                                    <h6 class="title mt-3">
                                        {{ $item->name }}
                                    </h6>
                                    <div class="progress mb-3 mt-3">
                                        <div class="progress-bar" style="width: {{ $item->percent() }}%;" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="{{ $item->percent() }}"
                                            aria-valuemin="0" aria-valuemax="100">

                                        </div>
                                    </div>
                                    <span class="nominal">Rp. {{ number_format($item->donation_target, 0, ',','.') }}</span>
                                    <div class="d-flex mt-2 justify-content-between">
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
            <div class="row justify-content-center">
                {{ $items->appends(request()->all())->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        .card-campaign{
            max-height:400px;
        }
    </style>
@endpush
