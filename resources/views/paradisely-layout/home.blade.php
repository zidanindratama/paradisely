<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('paradisely/assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('paradisely/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('paradisely/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">

    <!-- Primary Meta TagWs -->
    <title>Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!</title>
    <meta name="title" content="Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!">
    <meta name="description" content="
    Paradisely membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!">
    <meta property="og:description" content="
    Paradisely membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.">
    <meta property="og:image" content="{{asset('paradisely/assets/img/favicon/bali.jpg')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!">
    <meta property="twitter:description" content="
    Paradisely membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.">
    <meta property="twitter:image" content="{{asset('paradisely/assets/img/favicon/bali.jpg')}}">

    <!-- =====BOX ICONS===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

     <!-- ===== FONT AWESOME ===== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />

    <!-- ===== AOS ===== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('paradisely/assets/css/style.css')}}" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- ===== MAPBOX ===== -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css"
      rel="stylesheet"
    />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link
      rel="stylesheet"
      href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
      type="text/css"
    />
    
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!--===== HEADER =====-->
    @include('paradisely-layout.navbar')

    @yield('content')

    <!--===== FOOTER SECTION =====-->
    @include('paradisely-layout.footer')
    @include('sweetalert::alert')
    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!--===== MAIN JS =====-->
    <script src="{{asset('paradisely/assets/js/script.js')}}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
