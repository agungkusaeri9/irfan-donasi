@extends('frontend.layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <nav aria-label="breadcrumb" class="bg-transparent shadow-none py-1rounded-2 mb-2">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-dark">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}" class="text-decoration-none text-dark">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
              </ol>
            </nav>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <img src="{{ $item->image }}" alt="{{ $item->title }}" class="img-fluid w-100 img-artikel">
                    <h4 class="my-3 mb-3">{{ $item->title }}</h4>
                  <small class="mb-2">{{ $item->created_at->translatedFormat('d F Y') }}</small>
                  <p class="card-text">{!! $item->description !!}</p>
                </div>
              </div>
        </div>
      </div>

  </div>
@endsection
@push('styles')
    <style>
        .img-artikel{
            min-height: 450px !important;
        }
    </style>
@endpush
