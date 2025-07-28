<!DOCTYPE html>
<html lang="">

<head>
  <title> Artikel & Blog | DPD PERTUNI SUMUT </title>
  <link rel="icon" href='logoPertuni.png'>
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

    #latest {
      display: flex;
      flex-wrap: wrap;
      row-gap: 10px;
      /* Jarak antar elemen */
      padding: 0;
      list-style: none;
    }

    #latest .one_third {
      flex: 0 0 calc(25% - 15px);
      /* 4 kolom per baris */
      box-sizing: border-box;
      background: #f9f9f9;
      border: 1px solid #ddd;
      padding: 15px;
      display: flex;
      flex-direction: column;
      min-height: 600px;
    }

    #latest .one_third article {
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    #latest .one_third img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    #latest .excerpt {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    #latest .excerpt h6 {
      font-size: 18px;
      margin: 10px 0;
    }

    #latest .excerpt p {
      flex-grow: 1;
      font-size: 14px;
      color: #444;
    }

    #latest .excerpt footer {
      margin-top: 10px;
    }

    /* Responsive breakpoints */
    @media (max-width: 1200px) {
      #latest .one_third {
        flex: 0 0 calc(33.333% - 15px);
        /* 3 kolom */
      }
    }

    @media (max-width: 900px) {
      #latest .one_third {
        flex: 0 0 calc(50% - 10px);
        /* 2 kolom */
      }
    }

    @media (max-width: 600px) {
      #latest .one_third {
        flex: 0 0 100%;
        /* 1 kolom */
      }
    }
  </style>
</head>

<body id="top">
  <!-- Top Background Image Wrapper -->
  <div class="bgded overlay" style="background-image:url('{{ asset('images/artikel-bg.jpg') }}');background-size: cover;">
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
            <li data-description="Artikel & Blog" class="active"><a>Artikel & Blog</a></li>
            <li data-description="galeri"><a href="{{ route('galeri') }}">Galeri</a></li>
          </ul>
        </nav>
      </header>
    </div>

    <div id="breadcrumb" class="hoc clear">
      <h6 class="heading" data-description="Halaman Artikel & Blog">Halaman Artikel & Blog</h6>
      <ul>
        <li><a href="{{ route('home') }}" data-description="Halaman Beranda">Home</a></li>
        <li><a data-description="Halaman Artikel & Blog">Artikel & Blog</a></li>
      </ul>
    </div>
  </div>
  <!-- End Top Background Image Wrapper -->
  <div class="wrapper row3">
    <section class="hoc container clear">
      <div class="sectiontitle">
        <p class="nospace font-xs" data-description="artikel dan bolg">ARTIKEL DAN BLOG</p>
        <p class="heading underline font-x2" data-description="Berita Seputar dpd Pertuni Sumut">Berita Seputar Dpd Pertuni Sumut</p>
      </div>
      <main class="hoc container clear" style="padding-top: 0;">
        <!-- main body -->
        <ul id="latest" class="nospace group" > <!-- Hanya satu <ul> -->
          @foreach ($artikel->sortByDesc('published_at') as $item)
        <li class="one_third"> <!-- Pastikan semua artikel berada dalam satu <ul> -->
        <article>
          <a class="imgover" href="{{ route('artikel.show', $item->slug) }}" data-description="{{ $item->title }}">
          <img src="{{ asset('media/' . $item->media) }}" alt="{{ $item->title }}">
          </a>
          <ul class="nospace meta group" data-description="di publikasi oleh Admin pada {{ $item->published_at->format('d M Y') }}">
          <li><i class="fas fa-user"></i> <a>Admin</a></li>
          <li><i class="far fa-clock"></i>
            <time datetime="{{ $item->published_at }}">{{ $item->published_at->format('d M Y') }}</time>
          </li>
          </ul>
          <div class="excerpt">
          <h6 class="heading" style="font-size: 15px;" data-description="{{ $item->title }}">{{ $item->title }}</h6>
          <p data-description="{{ Str::limit($item->content, 150, '...') }}">{{ Str::limit($item->content, 100, '...') }}</p>
          <footer style="text-align:center">
            <a class="btn" href="{{ route('artikel.show', $item->slug) }}" style="text-transform:none" data-description="baca selengkapnya">Selengkapnya</a>
          </footer>
          </div>
        </article>
        </li>
      @endforeach
        </ul>
        <!-- / main body -->
        <div class="clear"></div>
      </main>
    </section>
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