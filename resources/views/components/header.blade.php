<!-- Header Area Start -->
<div class="header__area">
    <!-- Top Bar Area Start -->
    <div class="container">
        <div class="header__area-top-bar">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="header__area-top-bar-left">
                        <ul>
                            <li><a href="mailto:info@webmail.com"><i class="fas fa-envelope"></i>info@webmail.com</a></li>
                            <li><a href="tel:89709806789"><i class="fas fa-phone-alt"></i>897 098 067 89</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="header__area-top-bar-right">
                        <div class="header__area-top-bar-right-item">
                            <div class="header__area-top-bar-right-item-language">
                                <select name="select">
                                    <option value="1">Inglês</option>
                                    <option value="2">Hindi</option>
                                    <option value="3">Tamil</option>
                                </select>
                            </div>
                        </div>
                        <div class="header__area-top-bar-right-item">
                            <div class="header__area-top-bar-right-item-menu">
                                <ul>
                                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                                    <li><a href="{{ url('about') }}">Carreira</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar Area End -->
    <!-- Menu Bar Area Start -->
    <div class="container">
        <div class="header__area-menu-bar">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="header__area-menu-bar-left">
                        <div class="header__area-menu-bar-left-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                        </div>
                        <div class="responsive-menu"></div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="header__area-menu-bar-main-menu header-meanmenu">
                        <ul id="mobilemenu">
                            <li><a href="#">Início<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">Início Um</a>
                                    </li>
                                    <li><a href="{{ url('/index-2') }}">Início Dois</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('about') }}">Sobre</a>
                            </li>
                            <li><a href="#">Serviços<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('services') }}">Serviços</a>
                                    </li>
                                    <li><a href="{{ url('services-details') }}">Detalhes dos Serviços</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Páginas<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('team') }}">Equipe</a>
                                    </li>
                                    <li><a href="{{ url('team-details') }}">Detalhes da Equipe</a>
                                    </li>
                                    <li><a href="{{ url('faq') }}">FAQ</a>
                                    </li>
                                    <li><a href="{{ url('case') }}">Casos</a>
                                    </li>
                                    <li><a href="{{ url('case-details') }}">Detalhes dos Casos</a>
                                    </li>
                                    <li><a href="{{ url('error') }}">Erro</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Notícias<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('news-grid') }}">Grade de Notícias</a>
                                    </li>
                                    <li><a href="{{ url('news-standard') }}">Notícias Padrão</a>
                                    </li>
                                    <li><a href="{{ url('news-details') }}">Detalhes das Notícias</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('contact') }}">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1">
                    <div class="header__area-menu-bar-right">
                        <div class="header__area-menu-bar-right-item">
                            <div class="header__area-menu-bar-right-item-search">
                                <div class="search">
                                    <span class="header__area-menu-bar-right-item-search-icon open"><i
                                            class="fal fa-search"></i></span>
                                </div>
                                <div class="header__area-menu-bar-right-item-search-box">
                                    <form>
                                        <input type="search" placeholder="Pesquisar Aqui.....">
                                        <button type="submit"><i class="fal fa-search"></i>
                                        </button>
                                    </form> <span class="header__area-menu-bar-right-item-search-box-icon"><i
                                            class="fal fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menu-bar-right-item">
                            <div class="header__area-menu-bar-right-item-hamburger">
                                <div class="hamburger-icon">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menu-bar-right-item">
                            <div class="header__area-menu-bar-right-item-login">
                                <div class="search">
                                    <span class="header__area-menu-bar-right-item-login-icon open"><i
                                            class="far fa-user"></i></span>
                                </div>
                                <div class="header__area-menu-bar-right-item-login-box">
                                    <div class="header__area-menu-bar-right-item-login-area">
                                        <div class="header__area-menu-bar-right-item-login-area-bg">
                                            <h3>Entrar</h3>
                                            <form action="#">
                                                <input type="text" name="email" placeholder="Seu Email"
                                                    required="">
                                                <input type="password" name="password" placeholder="Digite a Senha"
                                                    required="">
                                                <button class="theme-btn1" type="submit" name="button">Entrar</button>
                                                <input type="checkbox" checked="checked" name="remember">
                                                Lembrar-me
                                            </form>
                                            <span class="header__area-menu-bar-right-item-login-box-icon"><i
                                                    class="fal fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hamburger Menu Start -->
        <div class="hamburger-popup">
            <div class="hamburger-close-btn">
                <i class="fal fa-times"></i>
            </div>
            <div class="menu-box">
                <div class="hamburger-popup-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/hamburger.png') }}" alt="">
                    </a>
                </div>
                <p class="pb-30">Proin cursus ex a vestibulum mattis. Vivamus in mauris dignissim, imperdiet risus ac,
                    congue nunc. Nullam feugiat id dolor id iaculis. Maecenas diam justo, consectetur vitae enim non,
                    maximus venenatis nisl. Pellentesque habitant morbi tristique senectus et</p>
                <img src="{{ asset('img/bar.jpg') }}" alt="">
                <div class="contact__info">
                    <h3 class="mb-25">Informações de Contato</h3>
                    <div class="contact__info-list">
                        <a href="tel:89709806789"><i class="fal fa-phone-alt"></i>897 098 067 89</a>
                        <a href="mailto:info@webmail.com"><i
                                class="fal fa-envelope-open-text"></i>info@webmail.com</a>
                        <a href="#"><i class="fal fa-map-marker-alt"></i>12/A, New Boston, NYC</a>
                    </div>
                </div>
                <div class="follow__us">
                    <h3 class="mb-25">Siga-nos</h3>
                    <div class="follow__us-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-overlay"></div>
        <!-- Hamburger Menu Start -->
    </div>
    <!-- Menu Bar Area End -->
</div>
<!-- Header Area End -->
<div class="header__two">
    <!-- Top Bar Area Start -->
    <div class="header__two-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="header__two-top-bar-left">
                        <ul>
                            <li><a href="mailto:info@webmail.com"><i class="far fa-envelope"></i>info@webmail.com</a>
                            </li>
                            <li><a href="tel:12525926803"><i class="far fa-phone-alt"></i>125. 259. 268. 03</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="header__two-top-bar-right">
                        <ul>
                            <li><a href="#"><span><strong>Notícia:</strong></span> Nossa empresa é uma das</a>
                            </li>
                            <li><a href="#"><span>Entrega de sucesso sustentável</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar Area End -->
    <!-- Menu Bar Area Start -->
    <div class="header__two-menu-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="header__two-menu-bar-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/logo-1.png') }}" alt=""></a>
                        <div class="responsive-menu"></div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="header__area-menu-bar-main-menu header__two-menu-bar-main-menu header-meanmenu">
                        <ul id="mobilemenu">
                            <li><a href="#">Início<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">Início Um</a>
                                    </li>
                                    <li><a href="{{ url('/index-2') }}">Início Dois</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('about') }}">Sobre</a>
                            </li>
                            <li><a href="#">Serviços<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('services') }}">Serviços</a>
                                    </li>
                                    <li><a href="{{ url('services-details') }}">Detalhes dos Serviços</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Páginas<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('team') }}">Equipe</a>
                                    </li>
                                    <li><a href="{{ url('team-details') }}">Detalhes da Equipe</a>
                                    </li>
                                    <li><a href="{{ url('faq') }}">FAQ</a>
                                    </li>
                                    <li><a href="{{ url('case') }}">Casos</a>
                                    </li>
                                    <li><a href="{{ url('case-details') }}">Detalhes dos Casos</a>
                                    </li>
                                    <li><a href="{{ url('error') }}">Erro</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Notícias<i class="far fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('news-grid') }}">Grade de Notícias</a>
                                    </li>
                                    <li><a href="{{ url('news-standard') }}">Notícias Padrão</a>
                                    </li>
                                    <li><a href="{{ url('news-details') }}">Detalhes das Notícias</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('contact') }}">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="header__two-menu-bar-right">
                        <a class="theme-btn3" href="{{ url('about') }}">Consultoria Gratuita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Bar Area End -->
</div>
