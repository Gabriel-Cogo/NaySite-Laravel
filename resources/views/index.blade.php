@include ('components.head')

<body>
    <!-- Preloader Início -->
    {{-- <div class="theme-loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div> --}}
    <!-- Preloader Fim -->
    <!-- Cabeçalho Início -->

    @include ('components.header')

    <!-- Cabeçalho Fim -->
    <!-- Área do Banner Dois Início -->
    <div class="home-two-main-banner">
        <div class="banner__two swiper banner-slide">
            <div class="swiper-wrapper">
                <div class="banner__two-area swiper-slide" data-swiper-autoplay="5000">
                    <div class="banner__two-area-image" data-background="{{ asset('img/bg/banner-bg.jpg') }}"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 order-last order-lg-first">
                                <div class="banner__two-content">
                                    <span data-animation="fadeInLeft" data-delay=".4s">Invista Dinheiro em Seu
                                        Negócio</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Invista dinheiro<br> em uma
                                        plataforma sólida</h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s">Nós fornecemos serviços de
                                        planejamento financeiro e investimentos para indivíduos e instituições em
                                        diversos cenários.</p>
                                    <div class="banner__two-content-button" data-animation="fadeInLeft" data-delay="1s">
                                        <a href="{{ url('contact') }}" class="theme-btn3">Obter Direção</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="banner__two-right" data-animation="fadeInRight" data-delay="1.3s">
                                    <img src="{{ asset('img/bg/banner-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner__two-area swiper-slide" data-swiper-autoplay="5000">
                    <div class="banner__two-area-image" data-background="{{ asset('img/bg/banner-bg.jpg') }}"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 order-last order-lg-first">
                                <div class="banner__two-content">
                                    <span data-animation="fadeInLeft" data-delay=".4s">Faça um negócio de sucesso</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Nós criamos histórias para inspirar
                                        você</h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s">Ajudamos clientes de todo o mundo a
                                        encontrar e usar as melhores ferramentas e oportunidades para crescer seus
                                        negócios.</p>
                                    <div class="banner__two-content-button" data-animation="fadeInLeft" data-delay="1s">
                                        <a href="{{ url('contact') }}" class="theme-btn3">Obter Direção</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="banner__two-right" data-animation="fadeInRight" data-delay="1.3s">
                                    <img src="{{ asset('img/bg/banner-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner__two-area swiper-slide" data-swiper-autoplay="5000">
                    <div class="banner__two-area-image" data-background="{{ asset('img/bg/banner-bg.jpg') }}"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 order-last order-lg-first">
                                <div class="banner__two-content">
                                    <span data-animation="fadeInLeft" data-delay=".4s">Proteja sua riqueza para o
                                        futuro</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Melhor Empresa de Serviços
                                        Financeiros</h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s">As melhores empresas de serviços
                                        financeiros podem ser uma ótima maneira de iniciar uma carreira, crescer seu
                                        negócio e ajudar as pessoas a economizar dinheiro.</p>
                                    <div class="banner__two-content-button" data-animation="fadeInLeft" data-delay="1s">
                                        <a href="{{ url('contact') }}" class="theme-btn3">Obter Direção</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="banner__two-right" data-animation="fadeInRight" data-delay="1.3s">
                                    <img src="{{ asset('img/bg/banner-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__two-thumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="swiper banner-slide2">
                            <div class="swiper-wrapper">
                                <div class="banner__two-thumb-item swiper-slide">
                                    <h6><span>01.</span>Investimento</h6>
                                </div>
                                <div class="banner__two-thumb-item swiper-slide">
                                    <h6><span>02.</span>Consultoria</h6>
                                </div>
                                <div class="banner__two-thumb-item swiper-slide">
                                    <h6><span>03.</span>Finanças</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área do Banner Dois Fim -->
    <!-- Área de Recursos Início -->
    <div class="features__area">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-xl-4 col-lg-4">
                    <div class="features__area-item" data-background="{{ asset('img/features-1.jpg') }}">
                        <h3>Consultoria Financeira</h3>
                        <p>Torne a criação de blogs mais bonita com um modelo personalizado e um domínio gratuito.</p>
                        <a class="simple-btn" href="{{ url('case') }}">Leia Mais<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="features__area-item features__area-item-hover"
                        data-background="{{ asset('img/features-2.jpg') }}">
                        <h3>Análise de Oportunidades</h3>
                        <p>Torne a criação de blogs mais bonita com um modelo personalizado e um domínio gratuito.</p>
                        <a class="simple-btn" href="{{ url('case') }}">Leia Mais<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="features__area-item" data-background="{{ asset('img/features-3.jpg') }}">
                        <h3>Encontre Sua Nova Curva</h3>
                        <p>Torne a criação de blogs mais bonita com um modelo personalizado e um domínio gratuito.</p>
                        <a class="simple-btn" href="{{ url('case') }}">Leia Mais<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área de Recursos Fim -->
    <!-- Sobre Dois Início -->
    <div class="about__two section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="about__two-left">
                        <div class="about__two-left-image">
                            <img src="{{ asset('img/about/about-2.jpg') }}" alt="">
                            <div class="about__two-left-image-one">
                                <img src="{{ asset('img/about/about-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about__two-right">
                        <div class="about__two-right-title">
                            <span class="subtitle-page-two">Sobre Nós</span>
                            <h2>Uma Curva Ascendente de Vendas Garantida</h2>
                            <p>Nossa missão é fornecer instrução de qualidade em língua inglesa em uma variedade de
                                cursos para estudantes internacionais e locais. Por outro lado, repudiamos com justa
                                indignação e desgosto homens que são tão seduzidos e desmoralizados pelos encantos.</p>
                        </div>
                        <div class="about__two-right-contact">
                            <div class="about__two-right-contact-icon">
                                <img src="{{ asset('img/icon/call.png') }}" alt="">
                            </div>
                            <div class="about__two-right-contact-content">
                                <p><span>Ligue para nós 24/7.</span> Podemos responder a todas as suas perguntas.</p>
                                <h3><a href="tel:10533368956">105 333 689 56</a><span>ou</span><a
                                        href="tel:(098)09809801">(098) 098 09801</a></h3>
                            </div>
                        </div>
                        <a href="{{ url('contact') }}" class="theme-btn3">Obter uma Cotação<i
                                class="far fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sobre Dois Fim -->
    <!-- Área de Serviços Dois Início -->
    <div class="services__two" data-background="{{ asset('img/bg/services.jpg') }}">
        <div class="container">
            <div class="row mb-45">
                <div class="col-xl-12">
                    <div class="services__two-title">
                        <span class="subtitle-page-two-center">Serviços</span>
                        <h2>O Que Oferecemos para Você</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-45">
                <div class="col-xl-12">
                    <div class="swiper services-two-slider">
                        <div class="swiper-wrapper">
                            <div class="services__two-item swiper-slide">
                                <div class="services__two-item-area">
                                    <div class="services__two-item-area-icon">
                                        <img src="{{ asset('img/icon/services-4.png') }}" alt="">
                                    </div>
                                    <div class="services__two-item-area-content">
                                        <h4>Finanças Corporativas</h4>
                                        <p>Nossos serviços de consultoria de gestão se concentram em nossos clientes.
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ url('services-details') }}">Detalhes do Serviço<i
                                        class="far fa-chevron-right"></i></a>
                            </div>
                            <div class="services__two-item swiper-slide">
                                <div class="services__two-item-area">
                                    <div class="services__two-item-area-icon">
                                        <img src="{{ asset('img/icon/services-5.png') }}" alt="">
                                    </div>
                                    <div class="services__two-item-area-content">
                                        <h4>Análise Avançada</h4>
                                        <p>Nossos serviços de consultoria de gestão se concentram em nossos clientes.
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ url('services-details') }}">Detalhes do Serviço<i
                                        class="far fa-chevron-right"></i></a>
                            </div>
                            <div class="services__two-item swiper-slide">
                                <div class="services__two-item-area">
                                    <div class="services__two-item-area-icon">
                                        <img src="{{ asset('img/icon/services-6.png') }}" alt="">
                                    </div>
                                    <div class="services__two-item-area-content">
                                        <h4>Estrategia Digital</h4>
                                        <p>Nossos serviços de consultoria de gestão se concentram em nossos clientes.
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ url('services-details') }}">Detalhes do Serviço<i
                                        class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services__two-button">
                        <div class="services__two-button-prev"><i class="far fa-long-arrow-left"></i></div>
                        <div class="services__two-button-next"><i class="far fa-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="services__two-appointment">
                        <h5>Ideias de Transformação de Negócios que Transformam Totalmente uma Empresa em uma Máquina
                            Bem Lubrificada Faça<a href="{{ url('about') }}"> Um Pedido</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área de Serviços Dois Fim -->
    <!-- Área de Depósito Início -->
    <div class="deposit__area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="deposit__area-left">
                        <div class="deposit__area-left-title">
                            <span class="subtitle-page-two">Depósito</span>
                            <h2>Calcular Plano</h2>
                        </div>
                        <div class="deposit__area-left-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6 mb-30">
                                        <div class="deposit__area-left-form-item">
                                            <label>Valor do Depósito<span>**</span></label>
                                            <input type="text" name="name" placeholder="Seu Nome"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 sm-mb-30">
                                        <div class="deposit__area-left-form-item">
                                            <label>Categoria<span>**</span></label>
                                            <div class="quote__area-item-services">
                                                <select name="select">
                                                    <option value="1">Seguro</option>
                                                    <option value="2">Negócios</option>
                                                    <option value="3">Consultoria</option>
                                                    <option value="4">Financeiro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-30">
                                        <div class="deposit__area-left-form-item">
                                            <label>Prazo do Depósito<span>**</span></label>
                                            <input type="text" placeholder="24" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 sm-mb-30">
                                        <div class="deposit__area-left-form-item">
                                            <label>Acumular<span>**</span></label>
                                            <input type="text" placeholder="0" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-30">
                                        <div class="deposit__area-left-form-item">
                                            <div class="deposit__area-left-form-item">
                                                <label>Endereço de Email<span>**</span></label>
                                                <input type="text" name="email" placeholder="Seu Email"
                                                    required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="deposit__area-left-form-item">
                                            <button class="theme-btn3" type="submit" name="button">Enviar
                                                Agora</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="deposit__area-right">
                        <img src="{{ asset('img/plan.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área de Depósito Fim -->
    <!-- Área de Portfólio Dois Início -->
    <div class="portfolio__two section-padding">
        <div class="container">
            <div class="row align-items-center mb-45">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="portfolio__two-title">
                        <span class="subtitle-page-two">Portfólio</span>
                        <h2>Estudos de Caso</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="portfolio__two-right">
                        <a class="simple-btn" href="{{ url('case') }}">Ver Todos os Casos<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper portfolio-slider-two">
                        <div class="swiper-wrapper">
                            <div class="portfolio__two-item swiper-slide">
                                <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" alt="">
                                <div class="portfolio__two-item-content">
                                    <h4><a href="{{ url('case-details') }}">Tome melhores decisões</a></h4>
                                    <p>Finanças, Consultoria</p>
                                </div>
                            </div>
                            <div class="portfolio__two-item swiper-slide">
                                <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" alt="">
                                <div class="portfolio__two-item-content">
                                    <h4><a href="{{ url('case-details') }}">Design do site Paolo</a></h4>
                                    <p>Finanças, Consultoria</p>
                                </div>
                            </div>
                            <div class="portfolio__two-item swiper-slide">
                                <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" alt="">
                                <div class="portfolio__two-item-content">
                                    <h4><a href="{{ url('case-details') }}">Consultoria Mikado</a></h4>
                                    <p>Finanças, Consultoria</p>
                                </div>
                            </div>
                            <div class="portfolio__two-item swiper-slide">
                                <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" alt="">
                                <div class="portfolio__two-item-content">
                                    <h4><a href="{{ url('case-details') }}">Solução financeira Pao</a></h4>
                                    <p>Finanças, Consultoria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área de Portfólio Dois Fim -->
    <!-- Área da Equipe Início -->
    <div class="team__area section-padding" data-background="{{ asset('img/bg/team-bg.jpg') }}">
        <div class="container">
            <div class="row mb-55">
                <div class="col-xl-12">
                    <div class="team__area-video-icon video-pulse">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i
                                class="fas fa-play"></i></a>
                    </div>
                    <div class="team__area-title">
                        <span class="subtitle-page-two-center">Especialistas</span>
                        <h2>Nossa Casa de Vingadores</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-120">
                <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('img/team/team-1.jpg') }}" alt="">
                            <div class="team__area-item-image-icon">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#"> <i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="team__area-item-content">
                            <p>Fundador</p>
                            <h4><a href="{{ url('team-details') }}">David Bowie</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('img/team/team-2.jpg') }}" alt="">
                            <div class="team__area-item-image-icon">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#"> <i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="team__area-item-content">
                            <p>CEO</p>
                            <h4><a href="{{ url('team-details') }}">Duncan Jones</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('img/team/team-3.jpg') }}" alt="">
                            <div class="team__area-item-image-icon">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#"> <i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="team__area-item-content">
                            <p>Chefe de Ideias</p>
                            <h4><a href="{{ url('team-details') }}">John Lennon</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('img/team/team-4.jpg') }}" alt="">
                            <div class="team__area-item-image-icon">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#"> <i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="team__area-item-content">
                            <p>Designer</p>
                            <h4><a href="{{ url('team-details') }}">Elton John</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sponsors__area-box mb-0">
                <div class="col-xl-12">
                    <div class="swiper sponsors-slider">
                        <div class="swiper-wrapper">
                            <div class="sponsors__area-brand swiper-slide">
                                <a href="#"><img src="{{ asset('img/icon/brand-1.png') }}" alt=""></a>
                            </div>
                            <div class="sponsors__area-brand swiper-slide">
                                <a href="#"><img src="{{ asset('img/icon/brand-2.png') }}" alt=""></a>
                            </div>
                            <div class="sponsors__area-brand swiper-slide">
                                <a href="#"><img src="{{ asset('img/icon/brand-3.png') }}" alt=""></a>
                            </div>
                            <div class="sponsors__area-brand swiper-slide">
                                <a href="#"><img src="{{ asset('img/icon/brand-4.png') }}" alt=""></a>
                            </div>
                            <div class="sponsors__area-brand swiper-slide">
                                <a href="#"><img src="{{ asset('img/icon/brand-5.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team__area-bottom">
                        <h3>Você pode fazer um pedido para se juntar à nossa equipe</h3>
                        <ul>
                            <li><a href="{{ url('contact') }}">Obter um Compromisso</a></li>
                            <li><a href="{{ url('case-details') }}">Candidatar-se para um Trabalho</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área da Equipe Fim -->
    <!-- Área de FAQ Início -->
    <div class="faq__two section-padding">
        <div class="faq__two-left-bg">
            <img src="{{ asset('img/bg/faoq.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="faq__two-left">
                        <div class="faq__two-left-image">
                            <img src="{{ asset('img/faq-3.jpg') }}" alt="">
                            <div class="faq__two-left-image-one">
                                <img src="{{ asset('img/faq-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq__two-right">
                        <div class="faq__two-right-title">
                            <span class="subtitle-page-two">FAQ</span>
                            <h2>Algumas Perguntas e Respostas.</h2>
                        </div>
                        <div class="faq__two-collapse">
                            <div class="faq__two-collapse-item">
                                <div class="faq__two-collapse-item-card">
                                    <div class="faq__two-collapse-item-card-header">
                                        <h5>Nossa escolha de poder é irrestrita?</h5>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__two-collapse-item-card-header-content active">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__two-collapse-item">
                                <div class="faq__two-collapse-item-card">
                                    <div class="faq__two-collapse-item-card-header">
                                        <h5>Proteja seu negócio com seguro?</h5>
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <div class="faq__two-collapse-item-card-header-content display-none">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__two-collapse-item m-0">
                                <div class="faq__two-collapse-item-card">
                                    <div class="faq__two-collapse-item-card-header">
                                        <h5>Abra uma conta bancária para negócios?</h5>
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <div class="faq__two-collapse-item-card-header-content display-none">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq__two-right-bottom">
                            <i class="fas fa-question"></i>
                            <h6>Se você tiver mais perguntas<a href="{{ url('contact') }}"> Contate-nos</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Área de FAQ Fim -->
    <!-- Blog Dois Início -->
    <div class="blog__two section-padding">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="blog__two-title">
                        <span class="subtitle-page-two-center">Notícias</span>
                        <h2>Blog e Insights da Empresa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 xl-mb-30">
                    <div class="blog__two-item">
                        <div class="blog__two-item-image">
                            <img src="{{ asset('img/blog/blog-1.jpg') }}" alt="">
                            <span><a href="#">Consultoria</a></span>
                        </div>
                        <div class="blog__two-item-content">
                            <span>12 de Junho de 2022</span>
                            <h4><a href="{{ url('news-details') }}">Transforme a comunidade e crie um impacto
                                    duradouro.</a></h4>
                            <a class="simple-btn" href="{{ url('news-details') }}">Leia Mais</a>
                            <div class="blog__two-item-content-post">
                                <div class="blog__two-item-content-post-image">
                                    <img src="{{ asset('img/avtar/6.png') }}" alt="">
                                </div>
                                <div class="blog__two-item-content-post-title">
                                    <span><a href="#">Postado Por</a></span>
                                    <h5>Bob Dylan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__two-item">
                        <div class="blog__two-item-image">
                            <img src="{{ asset('img/blog/blog-2.jpg') }}" alt="">
                            <span><a href="#">Bancos</a></span>
                        </div>
                        <div class="blog__two-item-content">
                            <span>06 de Junho de 2022</span>
                            <h4><a href="{{ url('news-details') }}">Um Guia para Atrair Clientes para Sua Agência</a>
                            </h4>
                            <a class="simple-btn" href="{{ url('news-details') }}">Leia Mais</a>
                            <div class="blog__two-item-content-post">
                                <div class="blog__two-item-content-post-image">
                                    <img src="{{ asset('img/avtar/7.png') }}" alt="">
                                </div>
                                <div class="blog__two-item-content-post-title">
                                    <span><a href="#">Postado Por</a></span>
                                    <h5>Annie Lennox</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog__two-item">
                        <div class="blog__two-item-image">
                            <img src="{{ asset('img/blog/blog-3.jpg') }}" alt="">
                            <span><a href="#">Negócios</a></span>
                        </div>
                        <div class="blog__two-item-content">
                            <span>03 de Junho de 2022</span>
                            <h4><a href="{{ url('news-details') }}">Diferentes Maneiras de Projetar Páginas de
                                    Produtos Digitais</a></h4>
                            <a class="simple-btn" href="{{ url('news-details') }}">Leia Mais</a>
                            <div class="blog__two-item-content-post">
                                <div class="blog__two-item-content-post-image">
                                    <img src="{{ asset('img/avtar/8.png') }}" alt="">
                                </div>
                                <div class="blog__two-item-content-post-title">
                                    <span><a href="#">Postado Por</a></span>
                                    <h5>Tina Turner</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Dois Fim -->
    <!-- Rodapé Topo Início -->

    @include ('components.footer')

</body>

</html>
