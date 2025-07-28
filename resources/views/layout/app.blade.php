<!DOCTYPE html>
<html lang="">
<head>
<title>Selamat Datang di Website DPD PERTUNI SUMUT</title>
<link rel="icon" href='images/LogoPertuni.png'> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ asset('css/layout.css') }}" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{ asset('images/bg-home-atas.jpg') }}');background-size: contain;">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        @foreach ($kontak as $item)
        <ul class="nospace">
            <li data-description="Hubungi Nomor ini {{ $item->phone}}"><i class="fas fa-phone rgtspace-5"></i>{{ $item->phone}}</li>
            <li data-description="Email kami {{ $item->email }}"><i class="far fa-envelope rgtspace-5"></i>{{ $item->email }}</li>
        </ul>
        @endforeach
      </div>      
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left" style="margin-bottom: 5px; margin-top: 5px; inline-size: 20%;">
        <a><img src="{{ asset('images/logo-pertuni.png') }}" alt="pertuni;" style="width: 90%"></a>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li data-description="Beranda" class="active"><a>Beranda</a></li>
          <li data-description="tentang kami"><a href="{{ route('sosial') }}">Tentang Kami</a></li>
          <li data-description="Artikel & Blog"><a href="{{ route('artikel') }}">Artikel & Blog</a></li>
          <li data-description="galeri"><a href="{{ route('galeri') }}">Galeri</a></li>
        </ul>
      </nav>
    </header>
  </div>


  @yield('content')

  @include('partials.footer')

  <!-- Script Voice Reader -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=hwWbC0nK"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('[data-description]').forEach((element) => {
        element.addEventListener('mouseenter', () => {
          const text = element.getAttribute('data-description');
          if (!text) return;
          responsiveVoice.speak(text, "Indonesian Female", {
            rate: 1,
            pitch: 1,
            volume: 1
          });
        });
      });
    });
  </script>

  <!-- JAVASCRIPTS -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.backtotop.js') }}"></script>
  <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>

  <!-- Script Voice Reader -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=hwWbC0nK"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('[data-description]').forEach((element) => {
        element.addEventListener('mouseenter', () => {
          const text = element.getAttribute('data-description');
          if (!text) return;
          responsiveVoice.speak(text, "Indonesian Female", {
            rate: 1,
            pitch: 1,
            volume: 1
          });
        });
      });
    });
  </script>
  </body>
</html>