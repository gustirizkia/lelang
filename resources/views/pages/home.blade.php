@extends('layouts.front')

@push('addStyle')
    <style>
        .form-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }

        .objek-radio {
            border-radius: 10px;
            padding: 5px;
        }

        .border-success {
            border-color: #1d93bd !important;
        }
    </style>
@endpush

@section('content')
    {{-- header --}}
    <section>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item ">
                    <img src="https://media.dinomarket.com/system/img/bann_main_lelangceria_1612_1002x420_sml.jpg"
                        alt="Lelang" class="img-fluid w-100">

                </div>
                <div class="carousel-item active">
                    <img src="https://media.dinomarket.com/system/img/bann_lp_lelang_ceria_1000.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="https://media.dinomarket.com/system/img/banner_lelang_ceria_26_08_2024_1.jpg" alt="Lelang"
                        class="img-fluid w-100">

                </div>
                <div class="carousel-item">
                    <img src="https://media.dinomarket.com/system/img/bann_bri_ceria_Lelang_10102022.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- header end --}}

    <section class="statistik my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 px-2 ">
                    <div class="card ibid-card flex-fill bg-tematik" style="background-image: url(&quot;null&quot;);">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="d-flex align-items-center col-md-6">
                                    <h1 class="h4 fw-bold">Sedang mencari lelang apa ?</h1>
                                </div>
                                <div class="col-md-6">
                                    <div class="row px-2">
                                        <div class="col-3 p-2">
                                            <div class="custom-radio objek-radio border border-success">

                                                <label for="6"><img
                                                        src="https://ims2storage.blob.core.windows.net/cms-image/icon-mobil/8a0f3fda5907da08088bd09a94e641e1eff4be493f113d99e6462d026248354d"
                                                        alt="MOBIL">
                                                    <div class="objek-radio-text">MOBIL</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-3 p-2">
                                            <div class="custom-radio objek-radio border">

                                                <label for="7"><img
                                                        src="https://ims2storage.blob.core.windows.net/cms-image/icon-motor/8471614ca85cc3a8cf9db45f0d848bebc09c2ed6779cdb9b30f32edac00f5914"
                                                        alt="MOTOR">
                                                    <div class="objek-radio-text">MOTOR</div>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-3 p-2">
                                            <div class="custom-radio objek-radio border">

                                                <label for="14"><img
                                                        src="https://ims2storage.blob.core.windows.net/cms-image/icon-hve/070f5724e934a3681dda07ae42e235bec6563a958e9893b6126d26290026c90a"
                                                        alt="HVE">
                                                    <div class="objek-radio-text">HVE</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="form-group material-form col-md-3 col-6 mb-3"><select class="form-control">
                                            <option value="Semua Merk">Semua Merk</option>
                                            <option value="AUDI">AUDI (4)</option>
                                            <option value="BMW">BMW (8)</option>
                                            <option value="CHERY">CHERY (1)</option>
                                            <option value="CHEVROLET">CHEVROLET (2)</option>
                                            <option value="DAIHATSU">DAIHATSU (390)</option>
                                            <option value="DATSUN">DATSUN (4)</option>
                                            <option value="FORD">FORD (4)</option>
                                            <option value="HINO">HINO (2)</option>
                                            <option value="HONDA">HONDA (109)</option>
                                            <option value="HYUNDAI">HYUNDAI (13)</option>
                                            <option value="ISUZU">ISUZU (24)</option>
                                            <option value="KIA">KIA (4)</option>
                                            <option value="LAND ROVER">LAND ROVER (1)</option>
                                            <option value="MAZDA">MAZDA (6)</option>
                                            <option value="MERCEDES-BENZ">MERCEDES-BENZ (6)</option>
                                            <option value="MITSUBISHI">MITSUBISHI (102)</option>
                                            <option value="NISSAN">NISSAN (37)</option>
                                            <option value="PEUGEOT">PEUGEOT (1)</option>
                                            <option value="RENAULT">RENAULT (4)</option>
                                            <option value="SUZUKI">SUZUKI (56)</option>
                                            <option value="TATA">TATA (1)</option>
                                            <option value="TOYOTA">TOYOTA (482)</option>
                                            <option value="WULING">WULING (16)</option>
                                        </select>
                                    </div>
                                    <div class="form-group material-form col-md-3 col-6 mb-3"><select class="form-control">
                                            <option value="Semua Seri">Semua Seri</option>
                                            <option value="A4">A4 (2)</option>
                                            <option value="Q7">Q7 (2)</option>
                                            <option value="116I">116I (1)</option>
                                            <option value="3 SERIES">3 SERIES (1)</option>
                                            <option value="528I">528I (2)</option>
                                            <option value="530I">530I (1)</option>
                                            <option value="640I">640I (2)</option>
                                            <option value="X3">X3 (1)</option>
                                            <option value="OMDA 5">OMDA 5 (1)</option>
                                        </select>
                                    </div>
                                    <div class="form-group material-form col-md-3 col-6 mb-3"><select
                                            class="form-control">
                                            <option value="Semua Tahun">Semua Tahun</option>

                                            <option value="2018">2018 (107)</option>
                                            <option value="2019">2019 (177)</option>
                                            <option value="2020">2020 (134)</option>
                                            <option value="2021">2021 (67)</option>
                                            <option value="2022">2022 (91)</option>
                                            <option value="2023">2023 (153)</option>
                                            <option value="2024">2024 (50)</option>
                                        </select>

                                    </div>
                                    <div class="form-group material-form col-md-3 col-6 mb-3"><select
                                            class="form-control">
                                            <option value="0|0">Semua Harga</option>
                                            <option value="0|50000000">&lt; 50 Juta (135)</option>
                                            <option value="50000000|100000000">50 - 100 Juta (540)</option>
                                            <option value="100000000|150000000">100 - 150 Juta (268)</option>
                                            <option value="150000000|200000000">150 - 200 Juta (113)</option>
                                            <option value="200000000|250000000">200 - 250 Juta (74)</option>
                                            <option value="250000000|300000000">250 - 300 Juta (42)</option>
                                            <option value="300000000|350000000">300 - 350 Juta (42)</option>
                                            <option value="350000000|0">&gt; 350 Juta (63)</option>
                                        </select>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- List Lelang --}}
    <section>
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-lg-4 mb-3">
                        <a href="/detail">
                            <div class="card">
                                <img src="{{ asset('images/rumah1.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h1 class="h4">
                                        Rumah Pamulang Raya
                                    </h1>
                                    <p>
                                        jl. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, cumque.
                                    </p>
                                    <div class="fw-bold text-primary">
                                        Rp. 984.252.000
                                    </div>
                                    <div class="text-secondary mt-2 text-end">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span class="ms-1">
                                            Tangerang Selatan
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    {{-- List Lelang end --}}
@endsection
