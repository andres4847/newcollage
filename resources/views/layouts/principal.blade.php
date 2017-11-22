<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NewCollage; Indumentaria de Egresados</title>

    {!! Html::style("css/app.css") !!}  
    {!! Html::style("css/custom.css") !!}  
   
    @yield('page-styles')

</head>

<body >  

     @include('layouts.partial.topbar')   

     @include('layouts.partial.header')   

     @yield('content')

        {{-- <!-- !Footer -->
        <footer id="footer" class="footer solid-bg">
    
        </footer>
        <!-- #footer --> --}}

  
    {!! Html::script("js/app.js") !!}  
  
</body>

</html>