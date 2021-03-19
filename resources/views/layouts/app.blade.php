<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="/img/home/favicon.png">

        @yield('meta')
        
        <title>EIrobotica - Cursos de Robótica</title> 

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        @yield('formato')
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        @yield('stylos')
        @livewireStyles
        
        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
            {{$js}}    
        @endisset

        @livewire('fot')

        <!-- Scripts -->
        @stack('scripts')
       
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
         <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>     
        
        @yield('scriptpago')
        <script src="{{ mix('js/app.js') }}" defer></script>
      




        


    </body>
</html>
