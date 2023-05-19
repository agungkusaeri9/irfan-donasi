@extends('frontend.layouts.app')
@section('content')
    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>{{ $post->title }}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <img class="img-fluid post-image-detail w-100 mt-5 mb-3" src="{{ $post->image() }}" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-xl-10 offset-xl-1">
                    {!! $post->description !!}
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

@endsection
@push('styles')
    <style>
        .post-image-detail{
            max-height: 500px;
        }
    </style>
@endpush
