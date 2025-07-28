<div class="bgded overlay row4"
  style="background-image:url('{{ asset('images/footer-bg.jpg') }}');background-size: cover;">
  <footer id="footer" class="hoc clear">
    <div class="center btmspace-50">
      <div style="width:fit-content; justify-self:center" data-description="Dewan Pengurus Daerah Persatuan Tunanetra Indonesia Sumatera Utara">
      <h6 class="heading">DEWAN PENGURUS DAERAH</h6>
      <h6 class="heading">PERSATUAN TUNANETRA INDONESIA</h6>
      <h6 class="heading">SUMATERA UTARA</h6>
</div>
      @foreach ($kontak as $item)
      <ul class="faico clear">
      <li><a class="faicon-whatsapp" href="https://{{ $item->whatsapp_url }}" target="_blank" rel="nofollow noopener" data-description="Media Sosial Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
      <li><a class="faicon-instagram" href="https://{{ $item->instagram_url }}" target="_blank" rel="nofollow noopener" data-description="Media Sosial Instagram"><i class="fab fa-instagram"></i></a></li>
      <li><a class="faicon-youtube" href="https://{{ $item->youtube_url }}" target="_blank" rel="nofollow noopener" data-description="Media Sosial Youtube"><i class="fab fa-youtube"></i></a></li>
      </ul>
    @endforeach
      <p class="nospace" data-description="Organisasi nasional yang bergerak dalam advokasi, pemberdayaan, dan perlindungan hak-hak
        penyandang tunanetra di Indonesia.">Organisasi nasional yang bergerak dalam advokasi, pemberdayaan, dan perlindungan hak-hak
        penyandang tunanetra di Indonesia.</p>
    </div>
    
      <div class="clear">
      <ul class="nospace clear">        
        <li>
        <div class="block clear" data-description="Buka Mulai Senin sampai Minggu, pada Jam 8 Pagi hingga 6 Sore"><a><i class="fas fa-clock" style="padding-right:10px"></i></a> <span><strong style="width:145px"> Senin -
            Minggu:</strong> 08.00am - 18.00pm</span></div>
        </li>
        <li style="margin:0 0 0 20px">
        <div class="block clear" data-description="Ayo Kunjungi Kami, arah menuju lokasi kami"><a><i class="fas fa-map-marker-alt" style="padding-right:10px"></i></a> <span><strong style="width: max-content">Ayo Kunjungi
            Kami:</strong> Arah ke <a href="https://maps.app.goo.gl/Xz2uoXvG1ue1hPfk9">lokasi kami</a></span></div>
        </li>
      </ul>
      </div>
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left" data-description="Hak Cipta 2025 yang dilindungi Undang-Undang diberikan kepada dpd pertuni sumut">Copyright &copy; 2025 - All Rights Reserved - <a>DPD PERTUNI SUMUT</a></p>
    <p class="fl_right" data-description="di desain oleh dpd pertuni sumut">Design by DPD PERTUNI SUMUT</a></p>
  </div>
</div>
<a id="backtotop" href="#top" data-description="kembali ke paling atas halaman"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.backtotop.js') }}"></script>
<script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>

@stack('script')
</body>
</html>