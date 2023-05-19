@extends('frontend.layouts.app')
@section('content')
    <!-- Projects -->
    <div id="projects" class="filter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Berita</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">
                        @foreach ($posts as $post)
                            <div class="element-item">
                                <a href="{{ route('artikel.show',$post->slug) }}">
                                    <img class="img-fluid post-image" src="{{ $post->image() }}"
                                        alt="alternative">
                                    <p>{{ $post->title }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div> <!-- end of grid -->
                    <!-- end of filter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->
@endsection
@push('styles')
    <style>
        .post-image{
            max-height: 200px;
        }
    </style>
@endpush
