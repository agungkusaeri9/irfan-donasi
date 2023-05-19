@extends('frontend.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Program Section ======= -->
    <section id="program" class="program">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-2">Nominal</h5>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                        5.000
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                        15.000
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                        25.000
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                    35.000
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                        50.000
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                        100.000
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                        200.000
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn w-100 mr-3 px-5 btn-outline-primary">
                                    Lainnya
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Dukungan untuk campaign</h6>
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Tulis Dukungan atau Doa untuk Campaign ini."></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2">Masukan Identitas Kamu</h6>
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label for="name" class="mb-2">Nama</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="mb-2">Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone_number" class="mb-2">No. Telepon</label>
                                    <input type="text" name="phone_number" class="form-control">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="is_anonim" name="is_anonim">
                                    <label class="form-check-label" for="is_anonim">
                                      Donasi Sebagai Hamba Allah
                                    </label>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-body">
                            <h6 class="mb-3">Pilih Metode Pembayaran</h6>
                            <h6 class="small">Manual</h6>
                            <div class="form-check mb-2">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault1"
                              />
                              <label class="form-check-label" for="flexRadioDefault1">
                                Bank Mandiri
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault2"
                              />
                              <label class="form-check-label" for="flexRadioDefault2">
                                Bank BRI
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault3"
                              />
                              <label class="form-check-label" for="flexRadioDefault3">
                                Bank BCA
                              </label>
                            </div>
                            <div class="form-group mt-5">
                              <div class="d-grid gap-2">
                                  <button class="btn btn-secondary" type="submit">Bayar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
    </section><!-- End Program Section -->

</main>
@endsection

