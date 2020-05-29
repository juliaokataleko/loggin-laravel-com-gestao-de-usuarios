<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body style="margin-top:3em">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/admin">Admnistração</a>
        
        <button class="navbar-toggler text-white" style="padding: 0; border: 0" type="button" 
        data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" 
        aria-label="{{ __('Toggle navigation') }}">
            <i class="fa fa-bars"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/admin/users">Usuários</a>
            </li>
            
          </ul>
          
          <ul class="navbar-nav ml-auto">
            
                <li class="nav-item">
                    <a class="nav-link" href="/"> <i class="fa fa-home"></i> Início</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="/users/settings">Configurações</a>
                </li>-->
        </ul>

        </div>
      </nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
