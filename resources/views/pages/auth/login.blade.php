@extends('layouts.front')

@push('addStyle')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-google"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-facebook"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-twitter"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="form3Example3">Email address</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label fw-bold" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <a href="#" class="text-primary">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <a href="/" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg w-100">Login</a>
                            <div class="text-center">
                                <p class=" fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                        class="link-primary">Register</a></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
