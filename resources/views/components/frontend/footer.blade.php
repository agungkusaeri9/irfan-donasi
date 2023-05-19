<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          {{-- <p>Berlangganan email Letter Kami</p> --}}
          <h4>Tentang</h4>
          {{-- <input type="text" class="form-control subscribe-footer" class="Email Anda" placeholder="Email Anda"/> --}}
          <p>
            {{ $setting->meta_description }}
          </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h6>Pembayaran</h6>
          <div class="row">
            <div class="col-4 mx-0 mb-1">
              <img src="{{ asset('assets/frontend/img/bni.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-4 mx-0 mb-1">
              <img src="{{ asset('assets/frontend/img/bca.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-4 mx-0 mb-1">
              <img src="{{ asset('assets/frontend/img/mandiri.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-4 mx-0 mb-1">
              <img src="{{ asset('assets/frontend/img/alfamart.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-4 mx-0 mb-1">
              <img src="{{ asset('assets/frontend/img/indomaret.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-4 mx-0 mb-1">
              <img src="{{ asset('assets/frontend/img/shopepay.png') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h6>Sosial Media</h6>
          <ul class="list-inline">
            @foreach ($socmeds as $socmed)
            <li class="list-inline-item pr-2">
                <a href="{{ $socmed->link }}">
                  <img src="{{ $socmed->icon() }}" class="img-fluid imgSocmed" alt="{{ $socmed->name }}" style="height: 30px">
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="container-fluid footer-end">
    <div class="row">
      <div class="col-md-12">
        <p class="text-center">2022 &copy; By {{ $setting->author }}</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
{{-- <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@stack('scripts')
