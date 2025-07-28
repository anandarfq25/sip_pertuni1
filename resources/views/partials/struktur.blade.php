<div class="wrapper row2">
  <div class="hoc container clear" aria-labelledby="judul-struktur">
    <div class="sectiontitle" data-description="Struktur Organisasi dpd pertuni sumut">
      <p class="nospace font-xs" id="subjudul-struktur">DPD PERTUNI SUMUT</p>
      <p class="heading underline font-x2" id="judul-struktur">Struktur Organisasi</p>
    </div>

    <div class="struktur-grid">
      @foreach ($struktur as $item)
      <div class="struktur-item">
      <figure data-description="{{ $item->name }} selaku {{ $item->description }}">
        <a>
        <img src="{{ asset('struktur/' . $item->photo) }}" alt="{{ $item->name }}"
          style="border-radius: 50%; width: 120px; height: 120px; object-fit: cover; border: 3px solid #007BFF; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        </a>
        <figcaption>
        <strong style="display: block; font-size: 1.1em; color: #333; text-align: center;">{{ $item->name }}</strong>
        <em style="font-size: 0.9em; color: #555; text-align: center;">{{ $item->position }}</em>
        </figcaption>
      </figure>
      </div>
    @endforeach
    </div>
  </div>
  
</div>

<style>
  .struktur-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
  }

  .struktur-item {
    text-align: center;
  }

  .struktur-item figure {
    margin: 0;
  }

  .struktur-item figcaption {
    margin-top: 10px;
  }
</style>

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