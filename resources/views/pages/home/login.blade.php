<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ url('logo_mini.svg') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            {{-- <div class="brand-logo text-center">
                                <a href="{{ route('home') }}">
                                <img src="{{ url('logo_dark.svg') }}"></a>
                            </div> --}}
                            <h1 class="text-dark text-center">Halo, Selamat Datang</h1>
                            <h6 class="font-weight-light text-dark text-center">Login untuk melanjutkan</h6>
                            @if ($errors->all())
                                @foreach ($errors->all() as $item)
                                    <p class="text-danger text-small">{{ $item }}</p>
                                @endforeach
                            @endif
                            <form class="pt-3" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg @error('login') is-invalid @enderror" id="exampleInputEmail1" placeholder="username" name="login" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg @error('login') is-invalid @enderror" id="exampleInputPassword1" placeholder="password" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                                </div>
                                <div class="mt-3 text-center">
                                    {{-- <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember"> Keep me signed in </label>
                                    </div> --}}
                                    <a href="{{ route('password.request') }}" class="auth-link text-black">Lupa password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ url('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('backend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('backend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('backend/assets/js/misc.js') }}"></script>
    <!-- endinject -->
</body>

</html>
