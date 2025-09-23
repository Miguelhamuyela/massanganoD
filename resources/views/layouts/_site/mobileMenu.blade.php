<div class="th-menu-wrapper">
    <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="/"><img src="{{ url('site/assets/img/sigecepa2.png') }}"
                    alt="Sigecepa"></a></div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('site.news.list', ['Politica']) }}">Política</a></li>
                <li><a href="{{ route('site.news.list', ['Sociedade']) }}">Sociedade</a></li>
                <li><a href="{{ route('site.news.list', ['Economia']) }}">Economia</a></li>
                <li><a href="{{ route('site.news.list', ['Cultura']) }}">Artes & Cultura</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Desportos</a>
                    <ul class="sub-menu">
                        <li><a href="https://www.abola.pt/internacional" target="_blank"
                                rel="noopener noreferrer">Desporto
                                Internacional</a></li>
                        <li><a href="https://www.jornaldeangola.ao/noticias/6/desporto" target="_blank"
                                rel="noopener noreferrer">Desporto Nacional</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Multimídia</a>
                    <ul class="sub-menu">
                        {{-- <li><a href="/site/category">Todas</a></li> --}}
                        <li><a href="/site/publication">Publicação</a></li>
                        <li><a href="/site/videos">Vídeos</a></li>
                        <li><a href="/site/galery">Imagens</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
