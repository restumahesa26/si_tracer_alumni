<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('includes.admin.style')
    @stack('addon-style')
</head>
<body>
    <div class="container-scroller">
        @include('includes.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @include('sweetalert::alert')
                    @yield('content')
                </div>
                @include('includes.admin.footer')
            </div>
        </div>
    </div>
    @include('includes.admin.script')
    @stack('addon-script')
</body>
</html>
