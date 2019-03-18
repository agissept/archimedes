<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Arcimedes</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    </head>

    <body id="top">
        <!-- preloader
    ================================================== -->
        {{-- <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> --}}

        <header class="s-header header">
            <div class="header__logo">
                <a class="logo" href="/">
                    <img src="{{ asset('images/ikn.png') }}" alt="Homepage">
                </a>
            </div>
            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">
                <form role="search" method="get" class="header__search-form" action="#">
                    <label>
                        <span class="hide-content">
                            <font color="#11999e">Search for:</font>
                        </span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:"
                            autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>
            </div>

            <a class="header__toggle-menu" href="#0" title="Menu">
                <span>Menu</span>
            </a>
            <nav class="header__nav-wrap">
                <h2 class="header__nav-heading h6">Navigate to</h2>
                <ul class="header__nav">
                    <li class="current"><a href="/" title="">
                            <font color="white">Home</font>
                        </a></li>
                    <li class="has-children">
                        <a href="#0" title="">
                            <font color="white">Categories</font>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/category-article">Article post</a></li>
                            <li><a href="/category-video">Video Post</a></li>
                        </ul>
                    </li>
                    <li><a href="/gallery" title="">
                            <font color="white">Gallery</font>
                        </a></li>
                    <li><a href="/about" title="">
                            <font color="white">About</font>
                        </a></li>
                </ul>
                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
            </nav>
        </header>

        @yield('content')

        <section class="s-extra">
            <div class="row">
                <div class="col-seven md-six tab-full popular">
                    <h3>Popular Posts</h3>
                    <div class="block-1-2 block-m-full popular__posts">
                        @foreach ($popularPosts as $post)
                            <article class="col-block popular__post">
                                <a href="#0" class="popular__thumb">
                                    <img src="{{ Voyager::image($post->image) }}" alt="">
                                </a>
                            <h5>{{$post->title}}</h5>
                                <section class="popular__meta">
                                    <span class="popular__author"><span>By</span> <a href="#0">{{$post->authorId->name}}</a></span>
                                    <span class="popular__date"><span>on</span> {{ date_format($post->updated_at, 'F, d Y' ) }} </span>
                                </section>
                            </article>
                        @endforeach

                    </div>
                </div>

                <div class="col-four md-six tab-full end">
                    <div class="row">
                        <div class="col-six md-six mob-full categories">
                            <h3>Categories</h3>
                            <ul class="linklist">
                                <li><a href="#0">Lifestyle</a></li>
                                <li><a href="#0">Travel</a></li>
                                <li><a href="#0">Recipes</a></li>
                                <li><a href="#0">Management</a></li>
                                <li><a href="#0">Health</a></li>
                                <li><a href="#0">Creativity</a></li>
                            </ul>
                        </div>
                        <div class="col-six md-six mob-full sitelinks">
                            <h3>Site Links</h3>
                            <ul class="linklist">
                                <li><a href="#0">Home</a></li>
                                <li><a href="#0">Blog</a></li>
                                <li><a href="#0">Styles</a></li>
                                <li><a href="#0">About</a></li>
                                <li><a href="#0">Contact</a></li>
                                <li><a href="#0">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="s-footer">
            <div class="s-footer__main">
                <div class="row">
                    <div class="col-six tab-full s-footer__about">
                        <h4>About Arcimedes</h4>
                        Archimedes merupakan singkatan dari “belaj<b>AR</b> men<b>CI</b>ptakan dan <b>ME</b>ngenal
                        <b>DES</b>ain”.
                        Web Arcimedes ini sendiri dibuat untuk belajar mengenal dan juga menciptakan
                        desain-desain yang
                        bagus serta menarik. Banyak tutorial berupa artikel ataupun video yang akan
                        disuguhkan untuk
                        dapat ditiru atau dicoba
                        tentunya menegenai hal yang berkaitan dengan desain grafis.</p>
                    </div>
                    <div class="col-six tab-full s-footer__subscribe">
                        <h4>Suggestion</h4>
                        <p>Kontak kami jika ingin memberi kritik, saran, atau request materi yang ingin dishare.<p>
                                <div class="subscribe-form">
                                    <form id="mc-form" class="group" novalidate="true">
                                        <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                                            placeholder="Email Address" required="">
                                        <input type="submit" name="subscribe" value="Send">
                                        <label for="mc-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
            <div class="s-footer__bottom">
                <div class="row">
                    <div class="col-six">
                        <ul class="footer-social">
                            <li>
                                <a href="#0"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-six">
                        <div class="s-footer__copyright">
                            <span>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://Arcimedes.com"
                                    target="_blank">Arcimedes</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </footer>

        <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('js/plugins.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>

    </body>

</html>
