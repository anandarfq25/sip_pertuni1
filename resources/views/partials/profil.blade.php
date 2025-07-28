<div class="bgded overlay" style="background-image:url('{{ asset('images/bg-home-tengah.jpg') }}');background-size: cover;">
  <section id="splitfifty" class="hoc container clear" aria-labelledby="judul-seksi">
    <div class="sectiontitle">
      <p class="nospace font-xs" data-descriptiion="Pertuni indonesia" id="subjudul-seksi" data-description="dpd pertuni sumut">DPD PERTUNI SUMUT</p>
      <p class="heading underline font-x2" id="judul-seksi" data-description="Profil Organisasi">Profil Organisasi</p>
    </div>

    <div class="bgded clear" style="background-color: white);background-size: cover;">
      @foreach ($profil as $item)
      <article 
        tabindex="0" 
        aria-labelledby="profil-judul-{{ $loop->index }}" 
        aria-describedby="profil-text-{{ $loop->index }}"
        role="region"
        class="btmspace-30"
      >
        <h6 class="heading font-x2" id="profil-judul-{{ $loop->index }}" data-description="{{ $item->title }}" style="margin-top:0px">{{ $item->title }}</h6>

        <p id="profil-text-{{ $loop->index }}" style="text-align:justify" data-description="{{ $item->description }}">
          {{ $item->description }}
        </p>
      </article>
      @endforeach
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