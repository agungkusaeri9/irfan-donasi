@extends('frontend.layouts.app')
@section('content')
<div class="container mt-3">

    <div class="row">
        <div class="col-12">
            <h2 class="h-about">Laporan Disburstment</h2>
            <p class="b-about">
                Hayu Donation bekerja dengan menghubungkan para calon donatur dan masyarakat yang membutuhkan
                sehingga mereka dapat memperoleh dana yang dibutuhkan secara menyeluruh.
            </p>
        </div>
    </div>

  <div class="card">
    <div class="card-body">
        <table class="table dTable">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Campaign</th>
                <th scope="col">Nama Akun Bank</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Periode</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                <td scope="row">1</td>
                <td>{{ $item->name }}</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>Otto</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
  </div>

</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <style>
        table td {
            font-size: 14px;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('.dTable').DataTable({
          "searching":false
        });
    </script>
@endpush
