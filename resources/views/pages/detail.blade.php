@extends('layouts.front')

@push('addStyle')
    <style>
        .gallery {
            overflow-x: auto;
        }

        .gallery img {
            width: 80px;
        }
    </style>
@endpush

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Isi Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold required">
                            Nama Lengkap
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold required">
                            Email
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold required">
                            Nomor Telepon
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold required">
                            Alamat
                        </label>
                        <input type="text" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('images/rumah1.png') }}" alt="" class="img-fluid rounded">

                        <div class="d-flex mt-3 gallery">
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/579cc170-4461-45f5-8589-a507d80b23d1/df3789e-49de7d7a-4c59-4ea4-a5d6-51d73c28a30c.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzU3OWNjMTcwLTQ0NjEtNDVmNS04NTg5LWE1MDdkODBiMjNkMVwvZGYzNzg5ZS00OWRlN2Q3YS00YzU5LTRlYTQtYTVkNi01MWQ3M2MyOGEzMGMuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.qGkqTmthIPrcQaebFmZ2hbwa_o3vBoR4GWCzCwrRVvg"
                                class="img-fluid rounded me-3">
                            <img src="https://lh7-us.googleusercontent.com/nKqbtHn9IbLRMOkKfJPzOj1EZvNc-JAqKdEsrQWu9lDk6DDJsu_wXw0fP1vv7n-GCPkWlmI_QEkUBcrEMGQV94JxcINkYR0kpndcRmrpfvXN_M9MnHt68ASoLth9sD75DpVIwS9X3A83Gm9bCwiWvrE"
                                class="img-fluid rounded me-3">
                            <img src="https://ruang-rupa.com/wp-content/uploads/2022/12/69.07.webp"
                                class="img-fluid rounded me-3">
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/579cc170-4461-45f5-8589-a507d80b23d1/df3789e-49de7d7a-4c59-4ea4-a5d6-51d73c28a30c.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzU3OWNjMTcwLTQ0NjEtNDVmNS04NTg5LWE1MDdkODBiMjNkMVwvZGYzNzg5ZS00OWRlN2Q3YS00YzU5LTRlYTQtYTVkNi01MWQ3M2MyOGEzMGMuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.qGkqTmthIPrcQaebFmZ2hbwa_o3vBoR4GWCzCwrRVvg"
                                class="img-fluid rounded me-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h1 class="h3">
                    Rumah Pamulang Raya
                </h1>
                <div class="mt-3">
                    <h1 class="h5">
                        Nilai Jual
                    </h1>
                    <div class="fw-bold text-primary">
                        Rp. 984.252.000
                    </div>
                </div>

                <div class="mt-3">
                    <h1 class="h5">
                        Lokasi
                    </h1>
                    <p>
                        jl. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, cumque.
                    </p>
                </div>

                <div class="mt-5">
                    <div href="" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Anda Berminat ?
                    </div>
                </div>


            </div>
        </div>

        <h2 class="h3 mt-4">
            Deskripsi
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quisquam, qui saepe quo optio voluptatibus laborum
            inventore sunt, eveniet perspiciatis soluta accusamus magni laboriosam aperiam, dolorem obcaecati reiciendis
            nobis architecto nesciunt deserunt eum! Voluptatibus sequi harum, pariatur et inventore dolor, quis consectetur,
            nam aliquam deleniti molestias ipsum maiores asperiores dolores? Accusantium, distinctio aliquid magnam
            voluptatem recusandae quasi inventore officia voluptatum odio aperiam enim nihil vel quisquam quia magni
            eligendi culpa eveniet expedita laboriosam quaerat, deserunt cumque nisi exercitationem. Ut, amet unde quibusdam
            perferendis, iure commodi itaque vel dolore dolores velit ducimus esse, dignissimos voluptas reiciendis hic.
            Voluptatibus esse, voluptate reprehenderit pariatur nisi ut optio nesciunt, mollitia fugit rerum iste
            perspiciatis nemo? Dolores, fugiat explicabo aliquid nam ducimus non sed vero dolorem voluptatem eaque at beatae
            repellat itaque doloremque quam. Nobis fugit hic beatae velit similique nam repellat at! Laudantium saepe
            adipisci dolores reprehenderit possimus quia, quo commodi dignissimos nobis repudiandae corporis! Hic
            consequuntur sint magni. Nesciunt est labore, doloremque dolorum laudantium accusantium sapiente, alias officiis
            ullam maiores, cumque ad repellat officia sed cupiditate soluta pariatur blanditiis minima nulla quia similique
            rem. Totam ipsum ab eius numquam non corrupti, aspernatur dolorem sunt maxime? Alias iste dolorem voluptas
            beatae harum. Ex, neque.
        </p>
    </div>

    {{-- List Lelang --}}
    <section>
        <div class="container">
            <div class="h2 mt-5 mb-5 text-center">
                Lelang Lainnya
            </div>
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
