@extends('layout.auth')
@section('content-auth')
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 p-0">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                    <img src="{{ asset('vuexy/assets/img/BAM/bg-inentory.png') }}"
                        alt="auth-login-cover" class="img-fluid my-5 auth-illustration"/>

                    <img src="{{ asset('vuexy/assets/img/illustrations/bg-shape-image-light.png') }}" alt="auth-login-cover"
                        class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
                        data-app-dark-img="illustrations/bg-shape-image-dark.png" />
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-4" style="justify-content: center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <img src="{{ asset('vuexy/assets/img/BAM/bam.png') }}"
                                alt="auth-login-cover" class="img-fluid my-3 auth-illustration" />
                            </span>
                        </a>
                    </div>

                    <!-- /Logo -->
                    <h3 class="mb-1 fw-bold text-center mt-2 mb-5">Login Inventory BAM</h3>

                    <form id="formAuthentication" class="mb-3" action="{{ route('login-proses') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nopeg" class="form-label">Nopeg Pegawai</label>
                            <input type="text" class="form-control" name="nopeg"
                                placeholder="Nopeg" autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
@endsection
