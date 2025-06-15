@extends('layouts.safari')


@section('content')
    <!-- promo start-->
    <section class="promo">
        <div class="promo-slider">
            <div class="promo-slider__item promo-slider__item--style-2">
                <picture>
                    <source srcset="img/promo_2.jpg" media="(min-width: 992px)"/><img class="img--bg" src="/img/promo_2.jpg" alt="img"/>
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-5">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="promo-slider__title"><span>Welcome to Tanzania!</span><br/>
                                            <span>KARIBU SANA!</span></h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="promo-slider__subtitle">Adventure Beyond Boundaries.<br> Safety Without Compromise.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="{{route('safaris',['All','All Safaris'])}}">Discover</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="promo-slider__item promo-slider__item--style-2">--}}
{{--                <picture style="background-color: black">--}}
{{--                    <source srcset="/images/cheatah.jpg" media="(min-width: 992px)"/>--}}
{{--                    <img style="opacity: 1; background-color: black" class="img--bg" src="/images/cheatah.jpg" alt="img"/>--}}
{{--                </picture>--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-7">--}}
{{--                            <div class="align-container">--}}
{{--                                <div class="align-container__item">--}}
{{--                                    <div class="promo-slider__wrapper-1">--}}
{{--                                        <h2 class="promo-slider__title"><span>The Greatest Tour</span><br/><span>in the World</span></h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="promo-slider__wrapper-2">--}}
{{--                                        <p class="promo-slider__subtitle">Animals World accreditation standards. Members are proactive in both undertaking and applying animal welfare scientific research, contributing</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="promo-slider__item promo-slider__item--style-3">
                <picture>
                    <source srcset="img/promo_3.jpg" media="(min-width: 992px)"/><img class="img--bg" src="/img/promo_3.jpg" alt="img"/>
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="align-container">
                                <div class="align-container__item"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <a class="anchor promo__anchor" href="#about"><span>Scroll Down</span></a>--}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- slider nav start-->
                    <div class="promo-slider__nav"></div>
                    <!-- slider nav end-->
                </div>
            </div>
        </div>
        <!-- promo pannel start-->
        <div class="promo-pannel">
            <div class="promo-pannel__details">
                <h6 class="promo-pannel__title">Contact Information</h6>
                <p><strong>Location:</strong>Arusha, Tanzania</p>
                <p><strong>Phone:</strong>
                    <a class="promo-pannel__link" href="tel:+255 762 026 599">+255 762 026 599</a>
{{--                    <a class="promo-pannel__link" href="tel:+255 789 782 658">+255 789 782 658</a>--}}
                </p>
                <p><strong>Email:</strong><a class="promo-pannel__link" href="mailto:info@safarishieldadventures.co.tz"> info@safarishieldadventures.co.tz</a></p>
            </div><a class="video-trigger" href="https://www.youtube.com/watch?v=XBl89XOefeI">
                <img class="img--bg" src="/images/home/1.jpg" alt="image"/><span class="video-trigger__icon"><span>View Safari</span><i class="fa fa-play" aria-hidden="true"></i></span></a>
        </div>
        <!-- promo pannel end-->
    </section>

    <!-- promo end-->
    <!-- section start-->
    <section class="section about-safari"><img class="about-safari__left" src="/img/about-safari_left.png" alt="img"/><img class="about-safari__right" src="/img/about-safari_right.png" alt="img"/>
        <div class="container">
            <div class="row bottom-70">
                <div class="col-lg-4">
                    <div class="heading heading--style-2 bottom-30"><span class="heading__pre-title">About US</span>
                        <h2 class="heading__title no-margin-bottom"><span>We are</span> <span>{{ config('app.name', Lang::get('titles.app')) }}</span></h2>
                    </div><a class="button button--primary d-none d-lg-inline-block" href="{{route('about')}}">More About</a>
                </div>
                <div class="col-lg-8">
                    <p><strong>At <strong> Safari Shield Adventures</strong> , we specialize in offering transformative travel experiences across East Africa, tailored to the unique interests of every traveler. Guided by our motto, "Adventure Beyond Boundaries, Safety Without Compromise," we provide unforgettable safaris, treks, and explorations that connect you with the natural wonders of this diverse and awe-inspiring region.</strong></p>
                    <p class="no-margin-bottom justify-end">Our company is driven by a passion for conservation and sustainability, working in harmony with the environment and local communities to preserve East Africa’s rich biodiversity. Whether you are seeking thrilling wildlife safaris, serene beach getaways, or adventurous mountain treks, our expertly curated itineraries allow you to experience the best the region has to offer, all while promoting responsible tourism.</p>
                    <p class="mt-4"><strong> Adventure Beyond Boundaries. Safety Without Compromise. </strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-safari__img"><img class="img--bg" src="/img/about-safari_img.png" alt="img"/></div>
                </div>
            </div>
            <div class="row top-50 d-flex d-lg-none">
                <div class="col-12 text-center"><a class="button button--primary" href="{{route('about')}}">Learn more</a></div>
            </div>
        </div>
    </section>
    <!-- section end-->


    <!-- section start-->
    <section class="section no-padding-top no-padding-bottom">
        <div class="container">
            <div class="row bottom-50">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Destinations</span>
                        <h2 class="heading__title no-margin-bottom"><span>Safari</span> <span>Destinations</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($safaris as $safari)
                    <div class="col-md-6 col-lg-4 bottom-30">
                        <div class="tours-item">
                            <div class="tours-item__img"><img class="img--bg" src="/{{$safari->image}}" alt="img"/></div>
                            <div class="tours-item__details">
                                <h4 class="tours-item__title">{{$safari->title}}<br/> <span></span></h4>
                                <div class="tours-item__price">{{$safari->days}} Days</div>
                                <div class="tours-item__edition">From ${{number_format($safari->price)}}<sub>/Person</sub></div><a class="tours-item__link" href="{{route('safari',[$safari->id,$safari->title])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row top-50">
                <div class="col-12 text-center"><a class="button button--primary" href="{{route('safaris',['All','All Safaris'])}}">View all Safaris</a></div>
            </div>
        </div>
    </section>
    <!-- section end-->


    <!-- section start-->
    <section class="section animals-section"><img class="animals-section__left" src="/img/animals-section_left.png" alt="img"/><img class="animals-section__right" src="/img/animals-section_right.png" alt="img"/>
        <div class="container">
            <div class="row bottom-50">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Animals</span>
                        <h2 class="heading__title no-margin-bottom"><span>Animals you</span> <span>will meet</span></h2>
                    </div>
                </div>
            </div>
            <div class="row offset-30">
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 bottom-30">
                    <div class="amimal text-center">
                        <div class="animal__img"><img src="/images/cheetah.webp" alt="img"/></div>
                        <h6 class="animal__title">Cheetahs</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 bottom-30">
                    <div class="amimal text-center">
                        <div class="animal__img"><img src="/img/girafes.png" alt="img"/></div>
                        <h6 class="animal__title">Girafes</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 bottom-30">
                    <div class="amimal text-center">
                        <div class="animal__img"><img src="/img/orangutans.png" alt="img"/></div>
                        <h6 class="animal__title">Orangutans</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 bottom-30">
                    <div class="amimal text-center">
                        <div class="animal__img"><img src="/img/zebras.png" alt="img"/></div>
                        <h6 class="animal__title">Zebras</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 bottom-30">
                    <div class="amimal text-center">
                        <div class="animal__img"><img src="/img/elephants.png" alt="img"/></div>
                        <h6 class="animal__title">Elephants</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 bottom-30">
                    <div class="amimal text-center">
                        <div class="animal__img"><img src="/img/lions.png" alt="img"/></div>
                        <h6 class="animal__title">Lions</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->

{{--    <!-- section start-->--}}
{{--    <section class="section no-padding-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row bottom-50 align-items-end">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="heading heading--style-2"><span class="heading__pre-title">Destination</span>--}}
{{--                        <h2 class="heading__title no-margin-bottom"><span>your adventure</span> <span>begins here</span></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="destination-slider__dots text-left text-md-right"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="slider-holder">--}}
{{--            <div class="slider-holder__wrapper">--}}
{{--                <div class="destination-slider">--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/img/destination_1.jpg" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>01</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Serengeti</h6><a class="destination-item__link" href="">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/images/kilimanjaro.avif" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>02</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Kilimanjaro</h6><a class="destination-item__link" href="">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/img/destination_2.jpg" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>03</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Manyara</h6><a class="destination-item__link" href="#">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/img/destination_3.jpg" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>04</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Tarangire</h6><a class="destination-item__link" href="#">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/img/destination_4.jpg" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>05</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Ngorngoro</h6><a class="destination-item__link" href="#">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/img/destination_5.jpg" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>06</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Tanzania</h6><a class="destination-item__link" href="#">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="destination-slider__item">--}}
{{--                        <div class="destination-item"><img class="img--bg" src="/img/destination_1.jpg" alt="img"/>--}}
{{--                            <div class="destination-item__count"><span>07</span></div>--}}
{{--                            <div class="destination-item__details">--}}
{{--                                <h6 class="destination-item__title">Botswana</h6><a class="destination-item__link" href="#">Learn Adventure</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- section end-->--}}

    <!-- section start-->
    <section class="section no-padding-top no-padding-bottom">
        <div class="map-banner"><img class="img--bg" src="/img/cta_bg.jpg" alt="img"/>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="align-container">
                            <div class="align-container__item">
                                <div class="heading heading--primary">
                                    <h2 class="heading__title no-margin-bottom"><span>Wild Animals</span> <span>Safari</span></h2>
                                </div><a class="button button--primary" href="{{route('contacts')}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- section start-->
    <section class="section">
        <div class="testimonials testimonials--style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonials__img"><img class="img--bg" src="/images/tourist.png" alt="img"/></div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
                                    <h2 class="heading__title"><span>What People<br/> Says</span> <span>About Us</span></h2>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="testimonials--style-1__dots text-md-right"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonials-slider testimonials-slider--style-1">
                                    @foreach($testimonies as $testimony)
                                        <div class="testimonials-slider__item">
                                            <div class="testimonials-slider__text">
                                                <p>{{$testimony->content}}</p>
                                            </div>
                                            <div class="testimonials-slider__details"><span class="testimonials-slider__name">{{$testimony->name}}</span></div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- instagram start-->
    <section class="section instagram instagram--front-5"><img class="instagram__img" src="/img/instagram_img.png" alt="img"/>
        <div class="container">
            <div class="row align-items-end bottom-30">
                <div class="col-7 col-lg-8">
                    <div class="heading heading--primary">
                        <h2 class="heading__title no-margin-bottom"><span>#Safari_shield_adventures</span></h2>
                    </div>
                </div>
                <div class="col-5 col-lg-4 text-right"><span class="instagram__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span></div>
            </div>
        </div>
        <div class="instagram-slider"><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_1.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_2.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_3.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_4.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_5.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_6.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="/img/ig_4.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a></div>
    </section>
    <!-- instagram end-->
@endsection
