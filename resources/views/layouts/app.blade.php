<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Living Water Fellowship') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app container-fluid">
        
        <div class="row justify-content-center no-gutters" id="header">
            <div class="col-sm-6">
                Living Water Fellowship of Salem
            </div>
        </div>
        

        <main class="row no-gutters" id="content-container">
            <div class="col-sm-4" id="nav-section">
                <div class="row no-gutters">
                    <div class="col-sm-12">
                        @include('components.navigation')
                    </div>
                </div>
                <div class="row no-gutters justify-content-center" id="special-focus">
                    <div class="col-sm-10">
                        @yield('specialfocus')
                    </div>
                </div>
            </div>
            <div class="col-sm-8" id="main-content">
                @yield('content')
            </div>
        </main>
        <footer class="row justify-content-center no-gutters" id="footer">
            <div class="col-sm-6">
                Living Water Fellowship Of Salem, OR | Ph: 503-476-5221
            </div>
        </footer>
    </div>
</body>
</html>
