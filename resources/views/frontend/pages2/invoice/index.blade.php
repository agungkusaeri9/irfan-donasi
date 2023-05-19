@extends('frontend.layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form action="{{ route('invoice.check') }}" method="post">
            @csrf
            <div class="card-body row justify-content-center">
              <h5 class="text-center mb-4 mt-3">Cek Invoice</h5>
              <div class="col-md-8">
                <div class="form-group input-group-lg">
                  <input
                    type="number"
                    name="code"
                    class="form-control @error('code') is-invalid @enderror fs-6"
                    placeholder="Masukan Kode Invoice..." value="{{ $code }}"
                  />
                </div>
                @error('code')
               <div class="invalid-feedback d-inline">
                {{ $message }}
               </div>
                @enderror
              </div>
              <div class="col-md-8">
                <div class="form-group mt-4">
                  <div class="text-center">
                    <button class="btn btn-primary btn-lgs">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @if ($status == true )
    <div class="row mt-2">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body row justify-content-center">
              <div class="col-md-8">
                @if ($item)
                <h5 class="mb-4 mt-4">Informasi Invoice</h5>
                <ul class="list-inline">
                  <li class="list-inline-item d-flex justify-content-between mb-3">
                    <span class="">No.Invoice</span>
                    <span>#{{ $item->code }}</span>
                  </li>
                  <li class="list-inline-item d-flex justify-content-between mb-3">
                    <span class="">Campaign</span>
                    <span>{{ $item->program->name }}</span>
                  </li>
                  <li class="list-inline-item d-flex justify-content-between mb-3">
                    <span class="">Nominal</span>
                    <span>Rp. {{ number_format($item->nominal) }} </span>
                  </li>
                  <li class="list-inline-item d-flex justify-content-between mb-3">
                    <span class="">Metode Pembayaran</span>
                    <span>{{ $item->payment->name ?? '-' }} - {{ $item->payment->number ?? '-' }} ({{ $item->payment->description ?? '-' }})</span>
                  </li>
                  <li class="list-inline-item d-flex justify-content-between mb-3">
                    <span class="">Status</span>
                    <span>
                       {!! $item->isVerified() !!}
                    </span>
                  </li>
                  <li class="list-inline-item d-flex justify-content-between mb-3">
                    <span class=""></span>
                    <span></span>
                  </li>
                </ul>
                @else
                <h6 class="text-center">No. Invoice #{{ $code }} Tidak Ditemukan!</h6>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
@endsection
