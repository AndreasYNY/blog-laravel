<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feiku's Blog</title>

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-900">
    {{-- haeder //tailblock --}}
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="{{url('/login')}}" class="hover:text-white">Feiku login ;)</a>
          </nav>
          <a href="{{url('/')}}" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0">
            <span class="ml-3 text-xl xl:block lg:hidden">Feiku's palace</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
          </div>
        </div>
      </header>

      {{-- body --}}

      @stack('before-content')
      @yield('content')
      @stack('after-content')

      {{-- footer --}}
</body>
</html>