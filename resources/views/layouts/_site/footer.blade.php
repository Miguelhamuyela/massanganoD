<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.png">
    <div class="widget-area">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="/">
                                    <img src="{{ url('site/assets/img/sigecepa.png')}}" alt="sigecepa">
                                </a>
                            </div>
                            <p class="about-text">As revistas abrangem uma ampla gama de assuntos, incluindo, entre
                                outros, moda, estilo de vida,
                                política, negócios, entretenimento, desportos, ciência...</p>
                            <div class="th-social style-black">
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.whatsapp.com">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Categorias</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach ($footerCategory as $dados)
                                    <li><a href="#">{{ $dados->name }}</a></li>
                                @endforeach
                                {{-- <li><a href="blog.html">Business</a></li>
                    <li><a href="blog.html">Health</a></li>
                    <li><a href="blog.html">Technology</a></li>
                    <li><a href="blog.html">Sports</a></li>
                    <li><a href="blog.html">Entertainment</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">links Usados</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="/">Home</a></li>
                                {{-- <li><a href="{{ 'site.' }}">About Us</a></li> --}}
                                <li><a href="#">Políticas</a></li>
                                <li><a href="#">Sociedade</a></li>
                                <li><a href="#">Economia & Negócio</a></li>
                                <li><a href="#">Artes & Cultura</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Posts Recentes</h3>
                        <div class="recent-post-wrap">
                            @foreach ($Recent as $recent)
                                <div class="recent-post img-footer">
                                    <div class="media-img img-footer">
                                        <a href="blog-details.html ">
                                            <img src="{{ asset('img/news/' . $recent->image) }}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line"
                                                href="blog-details.html">{{ Str::limit($recent->title, 45) }}</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">
                                                <i
                                                    class="fal fa-calendar-days"></i>{{ $recent->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/recent-post-2-2.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title">
                                        <a class="hover-line" href="blog-details.html">Key eyes on
                                            the latest update of technology</a>
                                    </h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">
                                            <i class="fal fa-calendar-days"></i>22 June, 2025
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row jusity-content-between align-items-center">
                <div class="col-lg-5">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a
                            href="home-newspaper.html">SigeCepa</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-auto ms-auto d-none d-lg-block">
                    <div class="footer-links">
                        <ul>
                            <li><a href="about.html">Privacy Policy</a></li>
                            <li><a href="about.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
