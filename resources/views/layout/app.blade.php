<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partial.head')
  </head>    

  <body>

     {{-- @include('partial.hello')

     @include('partial.resume')

     @include('partial.protfolio')

    
    @include('partial.contact')
    <div class="container">
      @yield('content')
    </div>
    @include('partial.footer')
   

    main container  --}}

    <div>
      @yield('content')
    </div>
      
    @include('partial.footer')
  </body>
</html>
