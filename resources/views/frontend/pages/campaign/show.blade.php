@extends('frontend.layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="detail-campaign">
                    <img src="{{ $item->image() }}" class="img-fluid " alt="{{ $item->name }}" />
                    <h5 class="mt-3 mb-4">
                        {{ $item->name }}
                    </h5>
                    <div class="mb-4">

                        <div class="d-flex justify-content-between">
                            <span class="small">{{ $item->transactions_success_count }} Donatur</span>
                            <span class="small">{{ $item->count_day() }} Hari Lagi</span>
                        </div>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width: {{ $item->percent() }}%" role="progressbar"
                                aria-label="Basic example" aria-valuenow="{{ $item->percent() }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="nominal small">Rp.
                                {{ number_format($item->transactions_success()->sum('nominal')) }}</span>
                            <span class="nominal small">Rp. {{ number_format($item->deficiency()) }}</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="small">Terkumpul</span>
                            <span class="small">Kekurangan</span>
                        </div>
                    </div>
                    <!-- navs tabs -->
                    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-detail-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-detail" type="button" role="tab" aria-controls="pills-detail"
                                aria-selected="false">
                                Detail Informasi
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                                type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                Campaign
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">
                                Rincian Dana
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                            tabindex="0">
                            <p class="deskripsi">
                                {!! $item->description !!}
                            </p>

                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                            tabindex="0">
                            <ul class="list-inline">
                                @foreach ($item->budgets as $budget)
                                    <li class="list-inline-item mb-3 d-flex justify-content-between">
                                        <span class="text-info">{{ $budget->name }}</span>
                                        <span class="font-weight-bold">{{ number_format($budget->nominal) }}</span>
                                    </li>
                                    <hr />
                                @endforeach
                                <li class="list-inline-item mb-3 d-flex justify-content-between">
                                    <span class="text-info">Total</span>
                                    <span class="font-weight-bold">Rp.
                                        {{ number_format($item->budgets->sum('nominal')) }}</span>
                                </li>
                                <li class="list-inline-item mb-3 d-flex justify-content-between">
                                    <span class="text-info"></span>
                                    <span class="font-weight-bold"></span>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade show active" id="pills-detail" role="tabpanel"
                            aria-labelledby="pills-detail-tab" tabindex="0">
                            <div class="d-flex mb-3 justify-content-between">
                                <span>Kategori</span>
                                <span>{{ $item->category->name ?? '-' }}</span>
                            </div>
                            <div class="d-flex mb-3 justify-content-between">
                                <span>Alamat</span>
                                <span>{{ $item->location }}</span>
                            </div>

                            <div class="d-grid gap-2 mt-3">
                                <a href="{{ route('donate.payment', $item->slug) }}" class="btn btn-secondary btn-block"
                                    type="submit">
                                    Donasikan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- donatur -->
                    <div class="list-donatur mt-4">
                        <span class="mb-3 font-weight-bold">List Donatur ({{ $item->transactions_success_count }})</span>
                        @foreach ($item->transactions_success as $transaction)
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <img src="{{ $transaction->avatar() }}" class="img-fluid rounded-circle" alt=""
                                        style="height: 40px; width: 50px" />
                                </div>
                                <div class="col-md-10">
                                    <p class="small fw-bold">
                                        {{ $transaction->name() }}
                                        <span
                                            class="small text-muted">{{ $transaction->created_at->diffForHumans() }}</span>
                                    </p>
                                    <span class="small">Donasi Rp. {{ number_format($transaction->nominal) }}</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <p class="text-muted">
                                        {{ $transaction->acceptance }}
                                    </p>
                                </div>
                            </div>
                            <hr style="padding:0">
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
