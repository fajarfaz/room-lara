<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ mix('js/app.js') }}" defer></script>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
      defer
    ></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500,700,800" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
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
     <div class="container mx-auto bg-white my-24 md:mt-30">
       @yield('container')
     </div>

</body>
</html>