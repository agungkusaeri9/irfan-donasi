@extends('frontend.layouts.app')
@section('content')
    <!-- Projects -->
    <div id="projects" class="filter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">FAQ</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="card-title">Frequently Asked Question</h5>
                    <p class="card-text">Yang sering ditanyakan tentang Irfan Donasi</p>

                    <div class="detail-campaign">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                    Umum
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    Pasien
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-donasi-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-donasi" type="button" role="tab"
                                    aria-controls="pills-donasi" aria-selected="false">
                                    Donasi
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehOne"
                                                aria-expanded="false" aria-controls="flush-collapsehOne">
                                                Apa itu Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehTwo"
                                                aria-expanded="false" aria-controls="flush-collapsehTwo">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehThree"
                                                aria-expanded="false" aria-controls="flush-collapsehThree">
                                                Siapa Pendiri Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehFour"
                                                aria-expanded="false" aria-controls="flush-collapsehFour">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headinghFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsehFive"
                                                aria-expanded="false" aria-controls="flush-collapsehFive">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsehFive" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headinghFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="accordion accordion-flush" id="accordionFlushpExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepOne"
                                                aria-expanded="false" aria-controls="flush-collapsepOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpOne" data-bs-parent="#accordionFlushpExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                                first item's accordion body.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepTwo"
                                                aria-expanded="false" aria-controls="flush-collapsepTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpTwo" data-bs-parent="#accordionFlushpExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                                second item's accordion body. Let's imagine this being filled with some
                                                actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepThree"
                                                aria-expanded="false" aria-controls="flush-collapsepThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpThree"
                                            data-bs-parent="#accordionFlushpExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                                third item's accordion body. Nothing more exciting happening here in terms
                                                of content, but just filling up the space to make it look, at least at first
                                                glance, a bit more representative of how this would look in a real-world
                                                application.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepFour"
                                                aria-expanded="false" aria-controls="flush-collapsepFour">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingpFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsepFive"
                                                aria-expanded="false" aria-controls="flush-collapsepFive">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsepFive" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingpFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-donasi" role="tabpanel"
                                aria-labelledby="pills-donasi-tab" tabindex="0">
                                <div class="accordion accordion-flush" id="accordionFlushdExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingdOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsedOne"
                                                aria-expanded="false" aria-controls="flush-collapsedOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapsedOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingdOne" data-bs-parent="#accordionFlushdExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                                first item's accordion body.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingdTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsedTwo"
                                                aria-expanded="false" aria-controls="flush-collapsedTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapsedTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingdTwo" data-bs-parent="#accordionFlushdExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                                second item's accordion body. Let's imagine this being filled with some
                                                actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingdThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsedThree"
                                                aria-expanded="false" aria-controls="flush-collapsedThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="flush-collapsedThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingdThree"
                                            data-bs-parent="#accordionFlushdExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                                third item's accordion body. Nothing more exciting happening here in terms
                                                of content, but just filling up the space to make it look, at least at first
                                                glance, a bit more representative of how this would look in a real-world
                                                application.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingdFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsedFour"
                                                aria-expanded="false" aria-controls="flush-collapsedFour">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsedFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingdFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingdFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsedFive"
                                                aria-expanded="false" aria-controls="flush-collapsedFive">
                                                Bagaimana cara menghubungi Irfan Donasi?
                                            </button>
                                        </h2>
                                        <div id="flush-collapsedFive" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingdFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Placeholder content for this accordion, which is intended to demonstrate the
                                                <code>.accordion-flush</code> class. This is the first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
@endsection
