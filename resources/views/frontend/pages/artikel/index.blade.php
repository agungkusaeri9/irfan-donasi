@extends('frontend.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Program Section ======= -->
    <section id="program" class="program">

            <section class="campaign">
              <div class="container">
                <div class="row mb-2 mt-4">
                    <div class="col-md-8 align-self-center">
                        <h4>Blog</h4>
                    </div>
                    <div class="col-md-4">
                      <form action="{{ route('artikel.search') }}" method="get">
                        <div class="input-group input-group-lg mb-3">
                          <input type="text" class="form-control fs-6 rounded- input-group-lg" name="keyword" value="{{ $keyword ?? '' }}" placeholder="Cari Keyword...">
                          <span class="" id="basic-addon2">
                            <button class="btn btn-lg btn-secondary rounded-1 fs-6">Cari</button>
                          </span>
                        </div>

                      </form>
                    </div>
                </div>
                <div class="row border-0 bg-transparent">

                    @forelse ($post as $p)
                    <div class="col-md-3 col-6 mb-4">
                    <a href="{{ route('artikel.show',$p->slug) }}" class="text-decoration-none text-dark">
                      <div class="card card-campaign">
                        <div class="card-body">
                          <img src="{{ $p->image }}" alt="" class="img-fluid card-img img-artikel"><br>
                          <h5 class="title-artikel mt-2">
                            {{ $p->title }}
                          </h5>
                        </div>
                      </div>
                    </a>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <p class="text-center">Artikel tidak ditemukan!</p>
                      </div>
                    @endforelse

                </div>
              </div>
            </section>
    </section><!-- End Program Section -->

</main>
@endsection
@push('styles')
    <style>
.title-artikel{
    font-size: 14px;
}
.img-artikel{
    max-height: 150px;
}
    </style>
@endpush
