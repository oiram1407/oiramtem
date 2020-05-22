<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Inicio') - {{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/oiramtem.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <script type="text/javascript">
        var base_url = '{!! url('') !!}';
    </script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-primary fixed-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white" href="{{ route('adminHome') }}">{{ config('app.name', 'Laravel') }}</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="{{ route('home') }}">{{ __('Volver al sitio') }}</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item dash-item">
                            <a class="nav-link " href="{{ route('adminHome') }}">
                                <span class="dash-item-icon"><i class="fas fa-tachometer-alt"></i></span>
                                {{ __('Dashboard') }} <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>{{ __('Productos') }}</span>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="{{ route('admBranchList') }}">
                                <span class="dash-item-icon"><i class="fas fa-clipboard-list"></i></span>
                                {{ __('Marcas') }}
                            </a>
                        </li>
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="{{ route('admProductList') }}">
                                <span class="dash-item-icon"><i class="fas fa-dollar-sign"></i></span>
                                {{ __('Productos') }}
                            </a>
                        </li>
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="{{ route('admCategList') }}">
                                <span class="dash-item-icon"><i class="fas fa-layer-group"></i></span>
                                {{ __('Categorías') }}
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>{{ __('Usuarios') }}</span>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="#">
                                <span class="dash-item-icon"><i class="fas fa-user"></i></span>
                                {{ __('Lista de Usuarios') }}
                            </a>
                        </li>
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="#">
                                <span class="dash-item-icon"><i class="fas fa-users"></i></span>
                                {{ __('Grupos de Usuario') }}
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>{{ __('Otros') }}</span>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="{{ route('admContact') }}">
                                <span class="dash-item-icon"><i class="fas fa-inbox"></i></span>
                                {{ __('Contáctos') }}
                            </a>
                        </li>
                        <li class="nav-item dash-item">
                            <a class="nav-link" href="{{ route('admContact') }}">
                                <span class="dash-item-icon"><i class="fas fa-store-alt"></i></span>
                                {{ __('MercadoLibre') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')

        </div>
    </div>
    <div id="dialog-result"></div>

    <!-- Scripts -->
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>
