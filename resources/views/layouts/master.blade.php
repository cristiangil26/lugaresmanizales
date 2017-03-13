<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <a href="/" class="btn btn-success">Página Principal</a>
    <title>@yield('title','Default')</title>
      <link rel="stylesheet" href="{{ asset('complementos/css/bootstrap.css')}}">
    
  </head>
  <body>
      <center><h1>@yield('name','Default')</h1></center>
      <section>
        @include('flash::message')
        @yield('content')
           
      </section>
     <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
      <script src="{{asset('complementos/js/bootstrap.js')}}"></script>
    </body>
</html>