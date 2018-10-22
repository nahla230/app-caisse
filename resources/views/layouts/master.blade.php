<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<header class="  text-center border-bottom bg-info">
    <h4>la Gestion de la caisse</h4>
</header>
<nav class="nav nav-tabs">
    <a class="nav-item nav-link active" href="#caisses" data-toggle="tab">Caisses</a>
    <a class="nav-item nav-link" href="#banques" data-toggle="tab">Banques</a>
    <a class="nav-item nav-link" href="#agances" data-toggle="tab">Agences</a>
    <a class="nav-item nav-link" href="#fournisseurs" data-toggle="tab">Fournisseurs</a>
    <a class="nav-item nav-link" href="#fournitures" data-toggle="tab">Fournitures</a>
    <a class="nav-item nav-link" href="#utilisateur" data-toggle="tab">Utilisateur</a>
</nav>
<div class="tab-content border-bottom">
    <div class="tab-pane fade show active" id="caisses">
    <ul>
        <li><a href="/liste-caisses">liste caisses</a><span class="glyphicon glyphicon-envelope"></span></li>
    </ul>
    </div>
    <div class="tab-pane fade" id="banques">

    </div>
    <div class="tab-pane fade" id="agances">
        <ul>
            <li><a href="/liste-agences">liste Agences</a><span class="glyphicon glyphicon-envelope"></span></li>
        </ul>
    </div>
    <div class="tab-pane fade" id="fournisseurs">

    </div>
    <div class="tab-pane fade" id="fournitures">

    </div>
    <div class="tab-pane fade" id="utilisateur">

    </div>
</div>
<div class="container-fluid" style="margin-top: 40px;">
    @yield('content')
</div>
<footer class="fixed-bottom text-center border-top bg-info">
    <h6>copyright</h6>
</footer>
<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
