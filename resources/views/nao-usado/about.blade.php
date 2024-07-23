<!DOCTYPE html>
<html lang="pt-br">

@include('components.head')

<body>
    <!-- Preloader start -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- Preloader end -->
    <!-- Header Area Start -->

    @include('components.header')

    <!-- Header Area End -->
    <!-- Page Header Start End -->
    <div class="page__banner" data-background="{{ asset('img/page/page.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span class="subtitle-two">Consult</span>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a><span>|</span></li>
                            <li>About us</li>
                        </ul>
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Area End -->
    <!-- About Area Start -->
    <div class="about__area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="about__area-left">
                        <div class="about__area-left-image">
                            <img src="{{ asset('img/about/about.jpg') }}" alt="">
                            <div class="about__area-left-image-content">
                                <div class="about__area-left-image-content-icon">
                                    <img src="{{ asset('img/icon/award.png') }}" alt="">
                                </div>
                                <h2 class="counter">30</h2>
                                <span>Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about__area-right">
                        <div class="about__area-right-title">
                            <span class="subtitle-two">About</span>
                            <span class="subtitle-one">About Us</span>
                            <h2>We turn information into actionable</h2>
                            <p>Our mission is to provide quality English language instruction a variety of courses to
                                international and local students in a professional and supportive atmosphere .</p>
                        </div>
                        <div class="about__area-right-list">
                            <h5><i class="fal fa-check"></i>Valuation Services</h5>
                            <h5><i class="fal fa-check"></i>Development of Financial Models</h5>
                        </div>
                        <div class="about__area-right-bottom">
                            <div class="about__area-right-bottom-item">
                                <div class="about__area-right-bottom-item-author">
                                    <div class="about__area-right-bottom-item-author-image">
                                        <img src="{{ asset('img/avtar/1.png') }}" alt="">
                                    </div>
                                    <div class="about__area-right-bottom-item-author-content">
                                        <span>Head Of Idea</span>
                                        <h4>Kim Kardashian</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="about__area-right-bottom-item">
                                <a class="theme-btn1" href="{{ url('contact') }}">Get In Touch<i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!-- Sponsors Area Start -->
    <div class="sponsors__area">
        <div class="container">
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
        </div>
    </div>
    <!-- Sponsors Area End -->
    <!-- Blog Area Start -->
    <div class="blog__area section-padding pt-60">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="blog__area-title">
                        <span class="subtitle-two">News</span>
                        <span class="subtitle-one">Company News</span>
                        <h2>News & Insights</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 xl-mb-30">
                    <div class="blog__area-item">
                        <div class="blog__area-item-area">
                            <div class="blog__area-item-area-meta">
                                <ul>
                                    <li><a href="#">Consultancy</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>June 12, 2022</li>
                                </ul>
                            </div>
                            <div class="blog__area-item-area-content">
                                <h4><a href="{{ url('news-details') }}">Transform your community create a lasting
                                        impact.</a></h4>
                                <p>Content is information produced & direct at an end-user or audience in the sectors of
                                    publishing, art, & communication.</p>
                            </div>
                            <div class="blog__area-item-area-post">
                                <div class="blog__area-item-area-post-image">
                                    <img src="{{ asset('img/avtar/2.png') }}" alt="">
                                </div>
                                <div class="blog__area-item-area-post-title">
                                    <span><a href="#">Posted By</a></span>
                                    <h5>Rory Kinnear</h5>
                                </div>
                            </div>
                        </div>
                        <div class="blog__area-item-btn">
                            <a href="{{ url('news-details') }}">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__area-item">
                        <div class="blog__area-item-area">
                            <div class="blog__area-item-area-meta">
                                <ul>
                                    <li><a href="#">Financial</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>June 09, 2022</li>
                                </ul>
                            </div>
                            <div class="blog__area-item-area-content">
                                <h4><a href="{{ url('news-details') }}">The role of a business is to produce &
                                        distribute</a></h4>
                                <p>Content is information produced & direct at an end-user or audience in the sectors of
                                    publishing, art, & communication.</p>
                            </div>
                            <div class="blog__area-item-area-post">
                                <div class="blog__area-item-area-post-image">
                                    <img src="{{ asset('img/avtar/4.png') }}" alt="">
                                </div>
                                <div class="blog__area-item-area-post-title">
                                    <span><a href="#">Posted By</a></span>
                                    <h5>Judi Dench</h5>
                                </div>
                            </div>
                        </div>
                        <div class="blog__area-item-btn">
                            <a href="{{ url('news-details') }}">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog__area-item">
                        <div class="blog__area-item-area">
                            <div class="blog__area-item-area-meta">
                                <ul>
                                    <li><a href="#">Marketing</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>June 07, 2022</li>
                                </ul>
                            </div>
                            <div class="blog__area-item-area-content">
                                <h4><a href="{{ url('news-details') }}">Goods and services satisfy a public need or
                                        demand.</a></h4>
                                <p>Content is information produced & direct at an end-user or audience in the sectors of
                                    publishing, art, & communication.</p>
                            </div>
                            <div class="blog__area-item-area-post">
                                <div class="blog__area-item-area-post-image">
                                    <img src="{{ asset('img/avtar/5.png') }}" alt="">
                                </div>
                                <div class="blog__area-item-area-post-title">
                                    <span><a href="#">Posted By</a></span>
                                    <h5>Hans Zimmer</h5>
                                </div>
                            </div>
                        </div>
                        <div class="blog__area-item-btn">
                            <a href="{{ url('news-details') }}">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <!-- Footer Top Start -->
    @includes ('components.footer')
    <!-- Footer Top End-->
</body>

</html>
