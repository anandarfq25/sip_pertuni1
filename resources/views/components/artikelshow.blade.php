<!DOCTYPE html>
<html lang="">

<head>
  <title>{{ $artikel->title }} | Pertuni </title>
  <link rel="shortcut icon" href="logoPertuni.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="{{ asset('patuni.png') }}" type="image/x-icon">
  <link href="{{ asset('css/layout.css') }}" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style type="text/css">
    /* DEMO ONLY */
    .container .demo {
      text-align: center;
    }

    .container .demo div {
      padding: 8px 0;
    }

    .container .demo div:nth-child(odd) {
      color: #FFFFFF;
      background: #CCCCCC;
    }

    .container .demo div:nth-child(even) {
      color: #FFFFFF;
      background: #979797;
    }

    @media screen and (max-width:900px) {
      .container .demo div {
        margin-bottom: 0;
      }
    }

    /* DEMO ONLY */


    .article-header {
      text-align: center;
      padding: 0 0 2rem 0;
      background-color: #f8f9fa;
      border-bottom: 1px solid #ddd;
    }

    .article-header h1 {
      font-size: 2.5rem;
      margin: 0.5rem 0;
    }

    .article-header p {
      font-size: 1rem;
      color: #666;
    }

    .article-content {
      max-width: 800px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .article-content img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 1.5rem;
    }

    .article-content p {
      text-align: justify
      line-height: 1.8;
      margin: 1rem 0;
    }

    .back-button {
      display: block;
      text-align: center;
      margin: 2rem 0;
    }

    .back-button a {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }

    .back-button a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body id="top">
  <!-- Top Background Image Wrapper -->
  <div class="bgded overlay"
    style="background-image:url('{{ asset('media/' . $artikel->media) }}');background-size: cover;">
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
          <a href="{{ route('home') }}"><img src="{{ asset('images/logo-pertuni.png') }}" alt="logo pertuni" style="width: 90%"></a>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li data-description="Beranda"><a href="{{ route('home') }}">Beranda</a></li>
            <li data-description="tentang kami"><a href="{{ route('sosial') }}">Tentang Kami</a></li>
            <li data-description="Artikel & Blog" class="active"><a href="{{ route('artikel') }}">Artikel & Blog</a></li>
            <li data-description="galeri"><a href="{{ route('galeri') }}">Galeri</a></li>
          </ul>
        </nav>
      </header>
    </div>
    <div id="breadcrumb" class="hoc clear">
      <h6 class="heading" data-description="laman Artikel & Blog">Laman Artikel & Blog</h6>
      <ul>
        <li><a href="{{ route('home') }}" data-description="Halaman Beranda">Home</a></li>
        <li><a href="{{ route('artikel') }}" data-description="Halaman Artikel & Blog">Artikel & Blog</a></li>
        <li><a data-description="laman artikel {{ $artikel->title }}">{{ $artikel->title }}</a></li>
      </ul>
    </div>
  </div>
  <!-- End Top Background Image Wrapper -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <header class="article-header">
        <h1 data-description="{{ $artikel->title }}">{{ $artikel->title }}</h1>
        <p data-description="Dipublikasikan pada: {{ $artikel->published_at->format('d M Y') }}">Dipublikasikan pada: {{ $artikel->published_at->format('d M Y') }}</p>
      </header>

      <main class="article-content">
        @if ($artikel->media)
      <img src="{{ asset('media/' . $artikel->media) }}" alt="{{ $item->title }}" data-description="foto dokumentasi">
    @endif
        <p data-description="{!! nl2br(e($artikel->content)) !!}" style="text-align: justify">{!! nl2br(e($artikel->content)) !!}</p>
      </main>

      <div class="back-button">
        <a href="{{ route('artikel') }}" data-description="Kembali ke daftar artikel"><i class="fas fa-arrow-left"></i>Kembali ke daftar artikel</a>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
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
</body>
</html>