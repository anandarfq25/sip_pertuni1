@extends('layout.app')

@section('title', 'Home - PERTUNI')

@section('content')
<!-- Wrapper untuk Gambar Background Utama -->
<div id="pageintro" class="hoc clear">
    <article>
        <h3 data-description="DPD PERTUNI SUMUT adalah Dewan Pengurus Daerah Persatuan Tunanetra Indonesia Sumatera Utara" class="heading" style="font-family:'Lucida Sans', sans-serif">
            <span style="color:orange;font-weight:bold;">DPD PERTUNI SUMUT</span>
            <br>Dewan Pengurus Daerah Persatuan Tunanetra Indonesia</br>
        </h3>
        <p data-description="Organisasi nasional yang berfokus pada advokasi, pemberdayaan, serta perlindungan hak-hak penyandang disabilitas netra di Indonesia.">
            Organisasi Nasional yang Berfokus pada Advokasi, Pemberdayaan, serta Perlindungan Hak-Hak Penyandang Disabilitas Netra di Indonesia.
        </p>
    </article>
</div>

<!-- Konten Utama -->
<div class="wrapper row3">
    <main class="container hoc clear">
        <!-- Intro Blok -->
        <section id="introblocks">
            <ul class="nospace group btmspace-80" style="display:flex; justify-content:space-evenly">
                <li class="one_third first" style="margin-right: 10px">
                    <figure>
                        <a><img src="{{ asset('images/inklusi-sosial.png') }}" alt="inklusi-sosial"></a>
                        <figcaption>
                            <h6 class="heading" data-description="Inklusi Sosial" style="text-align:center; font-size:13px;">
                                Inklusi Sosial
                            </h6>
                            <p data-description="PERTUNI terus memperjuangkan lingkungan sosial yang inklusif, di mana tunanetra dapat berpartisipasi aktif dalam segala aspek kehidupan." style="font-size:13px;">
                                PERTUNI terus memperjuangkan lingkungan sosial yang inklusif, di mana tunanetra dapat berpartisipasi aktif dalam segala aspek kehidupan.
                            </p>
                        </figcaption>
                    </figure>
                </li>

                <li class="one_third" style="margin-right: 10px">
                    <figure>
                        <a><img src="{{ asset('images/pelatihan-kemandirian.png') }}" alt="pelatihan-kemandirian"></a>
                        <figcaption>
                            <h6 class="heading" data-description="Pelatihan dan Kemandirian" style="text-align:center; font-size:13px;">
                                Pelatihan & Kemandirian
                            </h6>
                            <p data-description="PERTUNI menyediakan berbagai pelatihan keterampilan untuk meningkatkan kemandirian ekonomi dan kualitas hidup para anggotanya.">
                                PERTUNI menyediakan berbagai pelatihan keterampilan untuk meningkatkan kemandirian ekonomi dan kualitas hidup para anggotanya.
                            </p>
                        </figcaption>
                    </figure>
                </li>

                <li class="one_third">
                    <figure>
                        <a><img src="{{ asset('images/advokasi-hak.png') }}" alt="advokasi-hak"></a>
                        <figcaption>
                            <h6 class="heading" data-description="Advokasi dan Perlindungan Hak" style="text-align:center; font-size:13px;">
                                Advokasi & Perlindungan Hak
                            </h6>
                            <p data-description="PERTUNI aktif mengadvokasi kebijakan yang melindungi hak tunanetra dalam pendidikan, pekerjaan, serta akses informasi dan teknologi." style="font-size:13px;">
                                PERTUNI aktif mengadvokasi kebijakan yang melindungi hak tunanetra dalam pendidikan, pekerjaan, serta akses informasi dan teknologi.
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </section>

        <hr class="btmspace-80">

        <section id="overview">
            <div class="sectiontitle">
                <p class="nospace font-xs" data-description="layanan pertuni">LAYANAN DPD PERTUNI SUMUT</p>
                <p class="underline heading font-x2" data-description="Layanan Utama">Layanan Utama</p>
            </div>
            <ul class="nospace group btmspace-50" style="display:flex; justify-content:space-evenly">
                <li class="one_third">
                    <article style="margin-right: 10px">
                        <div class="clear" style="display: flex; align-items: center;">
                            <a><img src="{{ asset('images/Pelayanan-Pendidikan.png') }}" alt="Pelayanan Pendidikan" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                            <h6 class="heading" style="font-size:15px" data-description="Pelayanan Pendidikan">Pelayanan Pendidikan</h6>
                        </div>
                        <p data-description="PERTUNI berperan penting dalam memperjuangkan pendidikan inklusif dan berkualitas bagi para tunanetra." style="text-align:justify">
                            PERTUNI berperan penting dalam memperjuangkan pendidikan yang inklusif dan berkualitas bagi para penyandang tunanetra.
                        </p>
                    </article>
                </li>

                <li class="one_third">
                    <article style="margin-right: 10px" style="margin-right: 10px">
                        <div class="clear" style="display: flex; align-items: center;">
                            <a><img src="{{ asset('images/Bantuan-Hukum.png') }}" alt="Bantuan Hukum" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                            <h6 class="heading" style="font-size:15px" data-description="Bantuan Hukum">Bantuan Hukum</h6>
                        </div>
                        <p data-description="PERTUNI menyediakan layanan bantuan hukum dan advokasi bagi tunanetra yang mengalami diskriminasi atau pelanggaran hak." style="text-align:justify">
                            PERTUNI menyediakan layanan bantuan hukum dan advokasi bagi tunanetra yang mengalami diskriminasi atau pelanggaran hak.
                        </p>
                    </article>
                </li>

                <li class="one_third">
                    <article style="margin-right: 10px">
                        <div class="clear" style="display: flex; align-items: center;">
                            <a><img src="{{ asset('images/Pelatihan-Keterampilan.png') }}" alt="Pelatihan Keterampilan" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                            <h6 class="heading" style="font-size:15px" data-description="Pelatihan Keterampilan">Pelatihan Keterampilan</h6>
                        </div>
                        <p data-description="Melalui pelatihan keterampilan seperti pijat, teknologi aksesibel, dan wirausaha, PERTUNI membantu anggotanya hidup mandiri." style="text-align:justify">
                            Melalui pelatihan keterampilan seperti pijat, teknologi aksesibel, dan wirausaha, PERTUNI membantu anggotanya hidup mandiri.
                        </p>
                    </article>
                </li>

                <li class="one_third">
                    <article>
                        <div class="clear" style="display: flex; align-items: center;">
                            <a><img src="{{ asset('images/Kegiatan-Keagamaan.png') }}" alt="Kegiatan Keagamaan" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                            <h6 class="heading" style="font-size:15px" data-description="Kegiatan Keagamaan">Kegiatan Keagamaan</h6>
                        </div>
                        <p data-description="Kegiatan keagamaan bagi anggotanya, baik yang beragama Islam maupun Kristen, sebagai bentuk pembinaan spiritual dan penguatan nilai-nilai moral." style="text-align:justify">
                            Kegiatan keagamaan bagi anggotanya, baik yang beragama Islam maupun Kristen, sebagai bentuk pembinaan spiritual dan penguatan nilai-nilai moral.
                        </p>
                    </article>
                </li>
            </ul>

            <footer class="center">
                <a class="btn" href="{{ route('sosial') }}" data-description="Tentang PERTUNI">Tentang PERTUNI</a>
            </footer>
        </section>
        <div class="clear"></div>
    </main>
</div>

<!-- Include Komponen Tambahan -->
@include('partials.profil')
@include('partials.struktur')
@include('partials.profilpertuni')
@include('components.artikel')

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
@endsection
