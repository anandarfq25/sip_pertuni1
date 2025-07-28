<!DOCTYPE html>
<html lang="">

<head>
  <title>Galeri | DPD PERTUNI SUMUT</title>
  <link rel="icon" href='images/LogoPertuni.png'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
  <div class="bgded overlay" style="background-image:url('{{ asset('images/galeri.jpg') }}');background-size: cover;">
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
          <a href="{{ route('home') }}"><img src="{{ asset('images/logo-pertuni.png') }}" alt="pertunil;" style="width: 90%"></a>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li data-description="Beranda"><a href="{{ route('home') }}">Beranda</a></li>
            <li data-description="tentang kami"><a href="{{ route('sosial') }}">Tentang Kami</a></li>
            <li data-description="Artikel & Blog"><a href="{{ route('artikel') }}">Artikel & Blog</a></li>
            <li data-description="galeri" class="active"><a>Galeri</a></li>
          </ul>
        </nav>
      </header>
    </div>
    <div id="breadcrumb" class="hoc clear">
      <h6 class="heading" data-description="Halaman Galeri">Halaman Galeri</h6>
      <ul>
        <li><a href="{{ route('home') }}" data-description="Halaman Beranda">Home</a></li>
        <li><a data-description="Halaman Galeri">Galeri</a></li>
      </ul>
    </div>
  </div>
  <!-- End Top Background Image Wrapper -->
  <div class="wrapper row3">
    <section class="hoc container clear">
      <div class="sectiontitle" data-description="Galeri Foto dpd pertuni sumatera utara">
        <p class="nospace font-xs">DPD PERTUNI SUMUT</p>
        <p class="heading underline font-x2"> Galeri dan Photo</p>
      </div>
      <main class="hoc container clear" style="padding-top: 0;">
        <!-- main body -->
        <div class="content">
          <div id="gallery">
            <figure>
              
              <ul id="latest" class="nospace group">
                @foreach ($galeri as $item)
              <li class="one_third" data-description="{{ $item->description }}">
                <article>
                <a><img src="{{ asset('media/' . $item->image) }}" alt="{{ $item->tile }}"></a>
                <figcaption style="border: 1px solid #ccc; padding: 5px; margin-top: 5px; text-align: center;">
                <span style="font-weight: bold;"></span>{{ $item->title }}
                </figcaption>
                </article>
              </li>
              @endforeach
              </ul>
            </figure>
          </div>          
        </div>
        <!-- / main body -->
      </main>
    </section>
  </div>
  @include('partials.footer')
  
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>

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