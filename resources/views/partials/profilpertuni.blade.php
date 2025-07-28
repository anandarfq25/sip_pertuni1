<style>
.jumlahanggota {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
</style>

<div class="wrapper row3" aria-labelledby="judul-kependudukan">
  <section class="hoc container clear">
    <div class="sectiontitle">
      <p class="nospace font-xs" id="subjudul-kependudukan" data-description="Data Keanggotaan">DATA KEANGGOTAAN</p>
      <p class="heading underline font-x2" id="judul-kependudukan" data-description="Statistik Anggota Pertuni">Statistik Anggota Pertuni</p>
    </div>
    <ul id="stats" class="nospace group jumlahanggota">
      <li tabindex="0" data-description="Jumlah anggota Pertuni yang terdaftar adalah 877 orang">
        <i class="fab fa-pied-piper-alt" aria-hidden="true"></i>
        <p>877</p>
        <p>Anggota Terdaftar</p>
      </li>
    </ul>
  </section>
</div>

<div class="wrapper bgded" style="background-image:url('{{ asset('images/bg-home-bawah.jpg') }}');background-size: cover;">
  <section id="testimonials" class="hoc clear" aria-labelledby="judul-sambutan">
    <div class="one_half overlay">
      <ul class="nospace">
        <li tabindex="0" aria-label="Sambutan Ketua Pertuni Indonesia" data-description="Kata Sambutan, Assalamu’alaikum warahmatullahi wabarakatuh, Saya Syaiful Bakti Daulay S H, selaku Ketua Dewan Pimpinan Daerah Persatuan Tunanetra Indonesia (dpd pertuni) Sumatera Utara, menyambut baik dan mengapresiasi kegiatan penelitian yang dilaksanakan oleh saudara Muhammad Ananda Rafiq, mahasiswa Universitas Pembangunan Panca Budi dari Program Studi Sistem Komputer.
        Kami merasa senang atas kehadirannya dalam rangka menggali dan melengkapi data serta materi yang akan disajikan dalam penyusunan Tugas Akhir yang mengangkat topik seputar pertuni, khususnya dpd pertuni Sumut. Semoga informasi dan wawasan yang kami sampaikan dapat memberikan kontribusi yang bermakna dan menjadi bagian penting dalam penyusunan Tugas Akhir saudara Muhammad Ananda Rafiq. Demikian kata sambutan yang dapat saya sampaikan. Billahi taufik wal hidayah, Wassalamu’alaikum warahmatullahi wabarakatuh.">
          <blockquote id="textSambutan" style="text-align:justify">
            Assalamu’alaikum warahmatullahi wabarakatuh,
            Saya Syaiful Bakti Daulay, S.H., selaku Ketua Dewan Pimpinan Daerah Persatuan Tunanetra Indonesia (DPD PERTUNI) Sumatera Utara, menyambut baik dan mengapresiasi kegiatan penelitian yang dilaksanakan oleh saudara Muhammad Ananda Rafiq, mahasiswa Universitas Pembangunan Panca Budi dari Program Studi Sistem Komputer.
            Kami merasa senang atas kehadirannya dalam rangka menggali dan melengkapi data serta materi yang akan disajikan dalam penyusunan Tugas Akhir yang mengangkat topik seputar PERTUNI, khususnya DPD PERTUNI Sumatera Utara. Semoga informasi dan wawasan yang kami sampaikan dapat memberikan kontribusi yang bermakna dan menjadi bagian penting dalam penyusunan Tugas Akhir saudara Muhammad Ananda Rafiq.
            Demikian kata sambutan yang dapat saya sampaikan.
            Billahi taufik wal hidayah,
            Wassalamu’alaikum warahmatullahi wabarakatuh.
          </blockquote>
          <figure class="clear">
            <img class="circle" src="{{ asset('images/icon-contoh.jpeg') }}" width="50" height="50" alt="Foto Ketua Pertuni">
            <figcaption>
              <h6 class="heading">Syaiful Bakti Daulay</h6>
              <em>Ketua Umum / DPD PERTUNI SUMUT</em>
            </figcaption>
          </figure>
        </li>
      </ul>
    </div>
  </section>
</div>

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