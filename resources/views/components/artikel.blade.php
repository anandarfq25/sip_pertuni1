<style>
  #latest {
    display: flex;
    flex-wrap: nowrap;
    gap: 10px;
    overflow-x: auto;
  }

  #latest .one_third {
    flex: 0 0 calc(25% - 15px);
    box-sizing: border-box;
    background: #f9f9f9;
    border: 1px solid #ddd;
    padding: 10px;
    display: flex;
    flex-direction: column;
    min-height: 500px;
    /* tinggi seragam */
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
    /* gambar tidak rusak dan pas kotak */
    margin-bottom: 10px;
  }

  #latest .excerpt {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  @media (max-width: 1024px) {
    #latest .one_third {
      flex: 0 0 calc(50% - 10px);
    }
  }

  @media (max-width: 600px) {
    #latest .one_third {
      flex: 0 0 100%;
    }
  }
</style>

<div class="wrapper row3">
  <section class="hoc container clear">
    <div class="sectiontitle">
      <p class="nospace font-xs" data-description="Seputar Kegiatan Pertuni">Seputar Kegiatan Pertuni</p>
      <p class="heading underline font-x2" data-description="Artikel & Blog">Artikel & Blog</p>
    </div>

    <ul id="latest" class="nospace group">
      @foreach ($artikel->sortByDesc('published_at')->take(4  ) as $item)
      <li class="one_third">
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
        <h6 class="heading" data-description="{{ $item->title }}">{{ $item->title }}</h6>
        <p data-description="{{ Str::limit($item->content, 150, '...') }}">{{ Str::limit($item->content, 150, '...') }}</p>
        <footer style="text-align:center">
          <a class="btn" href="{{ route('artikel.show', $item->slug) }}" style="text-transform:none" data-description="baca selengkapnya">Selengkapnya</a>
        </footer>
        </div>
      </article>
      </li>
    @endforeach
    </ul>

    <footer class="center" style="margin-top:20px;">
      <a class="btn" href="{{ route('artikel') }}" data-description="Artikel dan Blog Selengkapnya">Selengkapnya</a>
    </footer>
  </section>
</div>