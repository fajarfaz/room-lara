<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500,700,800" rel="stylesheet">
  <title>Room Lara - {{$title}}</title>
  <style type="text/css">
    body{
        font-family: 'Quicksand', sans-serif;
        font-weight: 500;
    }
  </style>
</head>
<body>

 @include('partials.navbar')
     <div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18">
       @yield('container')
     </div>

</body>
</html>