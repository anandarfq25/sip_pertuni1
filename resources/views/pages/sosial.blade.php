<!DOCTYPE html>
<html lang="id">

<head>
  <title>Tentang Kami | Pertuni</title>
  <link rel="icon" href='images/LogoPertuni.png'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="{{ asset('patuni.png') }}" type="image/x-icon">
  <link href="{{ asset('css/layout.css') }}" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style type="text/css">
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

    .screen-reader-btn {
      padding: 10px 15px;
      background-color: #0d6efd;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-bottom: 20px;
    }
  </style>
</head>

<body id="top">
  <div class="bgded overlay"
    style="background-image:url('{{ asset('images/background1.jpg') }}');background-size: cover;">
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
            <li data-description="tentang kami"  class="active"><a>Tentang Kami</a></li>
            <li data-description="Artikel & Blog"><a href="{{ route('artikel') }}">Artikel & Blog</a></li>
            <li data-description="galeri"><a href="{{ route('galeri') }}">Galeri</a></li>
            </ul>
        </nav>
      </header>
    </div>

    <div id="breadcrumb" class="hoc clear">
      <h6 class="heading" data-description="Halaman Tentang Kami">Halaman Tentang Kami</h6>
      <ul>
        <li><a href="{{ route('home') }}" data-description="Halaman Beranda">Home</a></li>
        <li><a data-description="Halaman Tentang Kami">Tentang Kami</a></li>
      </ul>
    </div>
  </div>

  <div class="wrapper row3">
    <main class="hoc container clear">
      <div class="wrapper row3">
        <section class="hoc container clear" style="padding: 0 0 20px 0">
          <div class="sectiontitle" data-description="tentang dpd pertuni sumatera utara">
            <p class="nospace font-xs">DPD PERTUNI SUMUT</p>
            <p class="heading underline font-x2">Tentang Pertuni</p>
          </div>
          <div class="visi-misi" style="display: flex; justify-content: space-between; gap: 20px;">
            <div class="visi" style="flex: 1; padding-right: 10px; border-right: 1px solid #ccc;">
              <h3 class="heading" data-description="Visi">Visi</h3>
              <p style="text-align:justify" data-description="Visi Mewujudkan masyarakat inklusif yang menghormati hak-hak tunanetra dan memberikan kesempatan yang setara dalam segala aspek kehidupan">"Mewujudkan masyarakat inklusif yang menghormati hak-hak tunanetra dan memberikan kesempatan yang
                setara dalam segala aspek kehidupan."</p>
            </div>
            <div class="misi" style="flex: 1; padding-left: 10px;">
              <h3 class="heading" data-description="Misi">Misi</h3>
              <ol start="1" style="text-align:justify">
                <li>
                  <p data-description="1 Membangun Organisasi yang Demokratis dan Berdaya"><strong>Membangun Organisasi yang Demokratis dan Berdaya</strong></p>
                  <ul>
                    <li data-description="Mengembangkan Pertuni sebagai organisasi yang mandiri, profesional, dan berdaya dalam aspek 
                      sumber daya manusia, pendanaan, serta sarana dan prasarana">
                      Mengembangkan Pertuni sebagai organisasi yang mandiri, profesional, dan berdaya dalam aspek 
                      sumber daya manusia, pendanaan, serta sarana dan prasarana.
                    </li>
                    <li data-description="Meningkatkan kapasitas anggota dalam kepemimpinan, advokasi, serta keterampilan teknis guna 
                      memperkuat peran Pertuni dalam memperjuangkan hak penyandang tunanetra">
                      Meningkatkan kapasitas anggota dalam kepemimpinan, advokasi, serta keterampilan teknis guna 
                      memperkuat peran Pertuni dalam memperjuangkan hak penyandang tunanetra.
                    </li>
                  </ul>
                </li>
                <li>
                  <p data-description="2 Advokasi dan Perlindungan Hak"><strong>Advokasi dan Perlindungan Hak</strong><br data-description="Memastikan penyandang tunanetra memperoleh hak asasi mereka, termasuk:">Memastikan penyandang tunanetra memperoleh hak asasi mereka, termasuk:</p>
                  <ul>
                    <li data-description="Hak hidup dan kebebasan dari stigma">Hak hidup dan kebebasan dari stigma.</li>
                    <li data-description="Hak atas privasi, keadilan, dan perlindungan hukum">Hak atas privasi, keadilan, dan perlindungan hukum.</li>
                    <li data-description="ak memperoleh pendidikan, pekerjaan, kewirausahaan, dan koperasi">Hak memperoleh pendidikan, pekerjaan, kewirausahaan, dan koperasi.</li>
                    <li data-description="Hak atas layanan kesehatan, politik, keagamaan, keolahragaan, serta kebudayaan dan pariwisata">Hak atas layanan kesehatan, politik, keagamaan, keolahragaan, serta kebudayaan dan pariwisata.</li>
                    <li data-description="Hak atas kesejahteraan sosial, aksesibilitas, pelayanan publik, serta perlindungan dari bencana">Hak atas kesejahteraan sosial, aksesibilitas, pelayanan publik, serta perlindungan dari bencana.</li>
                    <li data-description="Hak atas habilitasi dan rehabilitasi, konsesi, dan pendataan">Hak atas habilitasi dan rehabilitasi, konsesi, dan pendataan.</li>
                    <li data-description="Hak untuk hidup mandiri serta dilibatkan dalam masyarakat">Hak untuk hidup mandiri serta dilibatkan dalam masyarakat.</li>
                    <li data-description="Hak berekspresi, berkomunikasi, dan memperoleh informasi">Hak berekspresi, berkomunikasi, dan memperoleh informasi.</li>
                    <li data-description="Hak berpindah tempat dan kewarganegaraan">Hak berpindah tempat dan kewarganegaraan.</li>
                    <li data-description="Hak untuk terbebas dari diskriminasi, penelantaran, penyiksaan, dan eksploitasi">Hak untuk terbebas dari diskriminasi, penelantaran, penyiksaan, dan eksploitasi.</li>
                  </ul>
                </li>
                <li>
                  <p data-description="3 Peningkatan Kesadaran Publik dan Pemberdayaan Masyarakat"><strong>Peningkatan Kesadaran Publik dan Pemberdayaan Masyarakat</strong></p>
                  <ul>
                    <li data-description="Membangun kesadaran masyarakat mengenai hakikat ketunanetraan untuk menciptakan pemahaman 
                      yang lebih baik">
                      Membangun kesadaran masyarakat mengenai hakikat ketunanetraan untuk menciptakan pemahaman 
                      yang lebih baik.
                    </li>
                    <li data-description="Menghapus stigma negatif dan membentuk sikap positif serta suportif terhadap penyandang tunanetra">
                      Menghapus stigma negatif dan membentuk sikap positif serta suportif terhadap penyandang tunanetra.
                    </li>
                    <li data-description="Mengedukasi masyarakat tentang pentingnya aksesibilitas dan kesempatan yang setara bagi penyandang tunanetra">
                      Mengedukasi masyarakat tentang pentingnya aksesibilitas dan kesempatan yang setara bagi penyandang tunanetra.
                    </li>
                  </ul>
                </li>
              </ol>
            </div>
          </div>
        </section>
      </div>

      <section class="hoc container clear">
        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
          <div style="flex: 1; min-width: 250px;">
            <img src="{{ asset('images/background.jpg') }}" alt="Sejarah Pertuni"
              style="width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          </div>
          <div style="flex: 2; min-width: 300px;">
            <h3 class="heading" data-description="Sejarah">Sejarah</h3>
            <p style="text-align: justify; line-height: 1.8; font-size: 1rem;" data-description="Dewan Pimpinan Daerah Persatuan Tunanetra Indonesia (dpd pertuni) Sumatera Utara didirikan pada tahun 1977 di Kota Medan. Sebagai organisasi yang menjunjung tinggi prinsip demokrasi, dpd pertuni Sumatera Utara menyelenggarakan Musyawarah Daerah (Musda) setiap lima tahun sekali untuk menentukan kepemimpinan serta arah kebijakan organisasi.">Dewan Pimpinan Daerah Persatuan Tunanetra Indonesia (DPD PERTUNI) Sumatera Utara didirikan pada tahun <strong>1977</strong> di Kota Medan. Sebagai organisasi yang menjunjung tinggi prinsip demokrasi, DPD PERTUNI Sumatera Utara menyelenggarakan Musyawarah Daerah (Musda) setiap lima tahun sekali untuk menentukan kepemimpinan serta arah kebijakan organisasi.</p>
            <p style="text-align: justify; line-height: 1.8; font-size: 1rem;" data-description="Sejak berdirinya, dpd pertuni Sumatera Utara telah dipimpin oleh sejumlah tokoh, antara lain">Sejak berdirinya, DPD PERTUNI Sumatera Utara telah dipimpin oleh sejumlah tokoh, antara lain:</p>
            <ol>
              <li data-description="1 Robinson Girsang, menjabat sebagai ketua pertama selama satu periode"><strong>Robinson Girsang</strong>, menjabat sebagai ketua pertama selama satu periode.</li>
              <li data-description="2 Romel Silalahi, melanjutkan kepemimpinan dan menjabat selama satu periode"><strong>Romel Silalahi</strong>, melanjutkan kepemimpinan dan menjabat selama satu periode.</li>
              <li data-description="3 Dr. Sama’un Suhut"><strong>Dr. Sama’un Suhut</strong>, menjabat selama dua periode kepemimpinan.</li>
              <li data-description="4 Musawir Hasibuan"><strong>Musawir Hasibuan</strong>, memimpin organisasi selama satu periode.</li>
              <li data-description="5 Luqman Hakim Harahap, S.Ag"><strong>Luqman Hakim Harahap, S.Ag.</strong>, menjabat sebagai ketua selama satu periode.</li>
              <li data-description="6 Khairul Batu Bara"><strong>Khairul Batu Bara</strong>, memimpin selama dua periode berturut-turut.</li>
              <li data-description="7 Syaiful Bakti Daulay, S.H."><strong>Syaiful Bakti Daulay, S.H.</strong>, menjabat sebagai ketua hingga saat ini.</li>
            </ol>
            <p style="text-align: justify; line-height: 1.8; font-size: 1rem;" data-description="Pergantian kepemimpinan ini mencerminkan semangat regenerasi dan keberlanjutan dalam memperjuangkan hak-hak serta pemberdayaan penyandang disabilitas netra di Sumatera Utara">Pergantian kepemimpinan ini mencerminkan semangat regenerasi dan keberlanjutan dalam memperjuangkan hak-hak serta pemberdayaan penyandang disabilitas netra di Sumatera Utara.</p>
            </div>
        </div>
      </section>

      <section class="hoc container clear"  style="padding: 20px 0 0 0">
        <div class="sectiontitle">
          <p data-description="Apa yang Kami Lakukan" class="nospace font-xs">APA YANG KAMI LAKUKAN</p>
          <p data-description="Program Unggulan" class="heading underline font-x2">Program Unggulan</p>
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; text-align:center">
          <div style="flex: 1; min-width: 250px; background: #f7f7f7; padding: 20px; border-radius: 8px;"">
            <h4 data-description=" Pendidikan & Pelatihan">Pendidikan & Pelatihan</h4>
            <p data-description="Menyediakan pelatihan keterampilan komputer bicara dan bahasa braille untuk meningkatkan kemandirian.">
              Menyediakan pelatihan keterampilan, komputer bicara, dan bahasa braille untuk meningkatkan kemandirian.
            </p>
          </div>
          <div style="flex: 1; min-width: 250px; background: #f7f7f7; padding: 20px; border-radius: 8px;">
            <h4 data-description="Advokasi Hak Tunanetra">Advokasi Hak Tunanetra</h4>
            <p data-description="Berperan aktif dalam mendorong kebijakan inklusif dari pemerintah dan lembaga publik.">
              Berperan aktif dalam mendorong kebijakan inklusif dari pemerintah dan lembaga publik.</p>
          </div>
          <div style="flex: 1; min-width: 250px; background: #f7f7f7; padding: 20px; border-radius: 8px;">
            <h4 data-description="Kampanye Kesadaran">Kampanye Kesadaran</h4>
            <p data-description="Mengadakan seminar pelatihan dan kampanye publik untuk mengedukasi masyarakat umum.">
              Mengadakan seminar, pelatihan, dan kampanye publik untuk mengedukasi masyarakat umum.</p>
          </div>
        </div>
      </section>

      <section class="hoc container clear">
        <div class="sectiontitle">
          <p class="nospace font-xs" data-description="Apa Kata Mereka?">APA KATA MEREKA?</p>
          <p class="heading underline font-x2" data-description="Testimoni Anggota">Testimoni Anggota</p>
        </div>
        <div style="display: flex; gap: 20px; flex-wrap: wrap;">
          <div
            style="flex: 1; min-width: 250px; background: #fff; border-left: 4px solid #0d6efd; padding: 15px; border-radius: 6px;"
            data-description="Testimoni dari Rudi Jakarta">
            <p><em>"PERTUNI telah mengubah hidup saya. Sekarang saya bisa bekerja dan percaya diri di masyarakat."</em>
            </p>
            <strong>- Rudi, Jakarta</strong>
          </div>
          <div
            style="flex: 1; min-width: 250px; background: #fff; border-left: 4px solid #0d6efd; padding: 15px; border-radius: 6px;"
            data-description="Testimoni dari Sari Bandung,">
            <p><em>"Lewat pelatihan dari PERTUNI, saya belajar komputer dan mampu berwirausaha."</em></p>
            <strong>- Sari, Bandung</strong>
          </div>
        </div>
      </section>

      <section class="hoc container clear" style="text-align: center; padding-bottom: 0;">
        <div class="sectiontitle">
          <p class="nospace font-xs" data-description="Ayo Berpartisipasi">AYO BERPARTISIPASI</p>
          <p class="heading underline font-x2" data-description="Gabung atau Dukung Kami">Gabung atau Dukung Kami</p>
        </div>
        <p style="max-width: 1100px; margin: 0 auto;"
          data-description="Mari bersama membangun masyarakat inklusif! Anda bisa menjadi relawan, mitra, atau berdonasi untuk mendukung
          program-program pertuni">
          Mari bersama membangun masyarakat inklusif! Anda bisa menjadi relawan, mitra, atau berdonasi untuk mendukung
          program-program PERTUNI.
        </p>
        <a href="https://instagram.com/dpdpertunisumut" target="_blank" rel="nofollow noopener" 
          style="margin-top: 20px; display: inline-block; padding: 12px 24px; background-color: #0d6efd; color: white; border-radius: 6px; text-decoration: none;"
          data-description="Tombol untuk menghubungi PERTUNI">Hubungi Kami</a>
      </section>

      <div class="clear"></div>
    </main>
  </div>
  @include('partials.footer')

  <script>
    function playAudio() {
      const teks = document.getElementById("desc1").innerText + " " +
        document.getElementById("desc2").innerText + " " +
        document.getElementById("desc3").innerText;

      responsiveVoice.speak(teks, "Indonesian Female");
    }
  </script>

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