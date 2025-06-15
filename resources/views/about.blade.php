@extends('layouts.safari')

@section('template_title')
    About
@endsection

@section('content')
    <!-- promo start-->
    <section class="promo-primary" style="height: 450px">
        <picture>
            <source srcset="/images/about.jpg" media="(min-width: 992px)"/>
            <img class="img--bg" src="/images/about.jpg" alt="img" height="100px"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item "><span class="promo-primary__pre-title">Adventure Beyond Boundaries. Safety Without Compromise.</span>
                            <h1 class="promo-primary__title"><span>About</span> <span>{{ config('app.name', Lang::get('titles.app')) }}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo end-->
    <!-- section start-->
    <section class="section py-7">
        <img class="section__bg t50 r0" src="/img/about_bg.png" alt="img"/>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="img-box">
                        <div class="img-box__img"><img class="img--bg" src="/img/gallery_2.jpg" alt="img"/></div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8 " style="text-align: justify">
                    <div class="heading heading--primary heading--style-2"><span class="heading__pre-title">About us</span>
                        <h2 class="heading__title" style="text-align: left"><span></span>{{ config('app.name', Lang::get('titles.app')) }}<span></span></h2>
                    </div>
                     <p><strong>At <strong> Safari Shield Adventures</strong> , we specialize in offering transformative travel experiences across East Africa, tailored to the unique interests of every traveler. Guided by our motto, "Adventure Beyond Boundaries, Safety Without Compromise," we provide unforgettable safaris, treks, and explorations that connect you with the natural wonders of this diverse and awe-inspiring region.</strong></p>
                    <p class="no-margin-bottom justify-end">Our company is driven by a passion for conservation and sustainability, working in harmony with the environment and local communities to preserve East Africa’s rich biodiversity. Whether you are seeking thrilling wildlife safaris, serene beach getaways, or adventurous mountain treks, our expertly curated itineraries allow you to experience the best the region has to offer, all while promoting responsible tourism.</p>
                    <p class="mt-4">Safari Shield Adventure is a tour company that aims to significantly contribute to the development and growth of the tourism industry in Tanzania. Our  aim is to provide traditional and innovative tour packages for clients who would like to experience the natural beauty and distinctive environment of Tanzania,in an up close and personal manners.Also constantly investing in product development, focused on using the preferred assortment of safari vehicles and operations team needed to provide the best conditions for visitors to share with us the beauty & natural wonders of Tanzania.</p>
                    <p class="mt-4" style="text-align: left"><strong> Adventure Beyond Boundaries. Safety Without Compromise. </strong></p>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->

    <!-- front services start-->
    <section class="section front-services tour-details__contacts">
{{--        <img class="section__bg t0 l0" src="img/front-services__bg.jpg" alt="bg"/>--}}
        <div class="container">
            <div class="row bottom-70">
                <div class="col-md-5 bottom-30">
                    <div class="heading heading--primary heading--style-2"><span class="heading__pre-title">Mission</span>
                        <h2 class="heading__title">Our <span>Mission</span><br/> <span></span></h2>
                    </div>
{{--                    <a class="button button--primary d-none d-md-inline-block" href="#">All Services</a>--}}
                </div>
                <div class="col-md-7">
                    <div class="app-block">
                        <div class="app-block__icon">
                                <i class="fa fa-shield" ></i>
                            <svg class="icon">
                            </svg>
                        </div>
                        <h6 class="app-block__title">Adventure Beyond Boundaries. Safety Without Compromise. </h6>
                        <p class="no-margin-bottom">We ensure:</p>
                    </div>
                </div>
            </div>
            <div class="row offset-margin">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                                <i class="fa fa-safari" ></i>
                            <svg class="icon">
                            </svg>
                        </div>
                        <h6 class="icon-item__title">SAFETY</h6>
                        <p> We ensure safety for our clients as our first priority to make good and unforgettable memories together.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                            <i class="fa fa-check-square-o " ></i>
                            <svg class="icon">
{{--                                <use xlink:href="#cutlery"></use>--}}
                            </svg>
                        </div>
                        <h6 class="icon-item__title">ACCOUNTABILITY </h6>
                        <p>We build  knowledgeable, responsible, and accountable teams who are proud to be associated with a company that recognises them as part of it: “ Fondamental is our people.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                            <svg class="icon">
                                <use xlink:href="#cutlery"></use>
                            </svg>
                        </div>
                        <h6 class="icon-item__title">SERVICES </h6>
                        <p>We provide each and every  incredible service, ensuring an exceptional travel experience to our clients.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                            <i class="fa fa-lightbulb-o" ></i>
                            <svg class="icon">
{{--                                <use xlink:href="#trophy"></use>--}}
                            </svg>
                        </div>
                        <h6 class="icon-item__title">INNOVATION </h6>
                        <p>We demonstrate our creativity, innovation, and commitment in a manner that sets us apart from others in the business.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                            <i class="fa fa-globe" ></i>
                            <svg class="icon">
{{--                                <use xlink:href="#trophy"></use>--}}
                            </svg>
                        </div>
                        <h6 class="icon-item__title">RELATIONSHIP  </h6>
                        <p>We build sustainable relationships with our clients and service providers in the industry.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                            <i class="fa fa-bolt" ></i>
                            <svg class="icon">
{{--                                <use xlink:href="#trophy"></use>--}}
                            </svg>
                        </div>
                        <h6 class="icon-item__title">EMPOWERMENT </h6>
                        <p>We improve the welfare of Tanzanians through tourism.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__icon">
                            <svg class="icon">
                                <use xlink:href="#trophy"></use>
                            </svg>
                        </div>
                        <h6 class="icon-item__title">DEVELOPMENT  </h6>
                        <p>We target and identify the markets that we want to develop.</p>
                    </div>
                </div>
            </div>
{{--            <div class="row top-50 d-flex d-md-none">--}}
{{--                <div class="col-12 text-center"><a class="button button--primary" href="#">All Services</a></div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- front services end-->


    <!-- section start-->
    <section class="section no-padding-top no-padding-bottom ">
        <div class="row no-gutters">
            <div class="col-xl-4"><a class="action-block" href="{{route('safaris',['All','All Safaris'])}}">
                    <div class="action-block__inner"><img class="img--bg" src="/img/action-block_3.jpg" alt="img"/>
                        <h3 class="action-block__title"><span>The Biggest Cats</span><br/> <span>in Manyara</span></h3>
                    </div></a></div>
            <div class="col-xl-4"><a class="action-block" href="{{route('safaris',['All','All Safaris'])}}">
                    <div class="action-block__inner"><img class="img--bg" src="/images/serengeti.jpg" alt="img"/>
                        <h3 class="action-block__title"><span>The Great Migration</span><br/> <span>in Serengeti</span></h3>
                    </div></a></div>
            <div class="col-xl-4"><a class="action-block" href="{{route('safaris',['All','All Safaris'])}}">
                    <div class="action-block__inner"><img class="img--bg" src="/img/action-block_2.jpg" alt="img"/>
                        <h3 class="action-block__title"><span>Amazing Terrarium</span><br/> <span>in Snake Park</span></h3>
                    </div></a></div>
        </div>
    </section>
    <!-- section end-->
    <!-- section start-->
    <section class="section"><img class="section__bg t0 l0" src="/img/front-services__bg.jpg" alt="img"/>
        <div class="container">
            <div class="row align-items-end bottom-50">
                <div class="col-12">
                    <div class="heading heading--primary heading--style-2"><span class="heading__pre-title">{{ config('app.name', Lang::get('titles.app')) }} staff</span>
                        <h2 class="heading__title no-margin-bottom"><span>Meat our</span> <span>Team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row offset-margin">

                @foreach($teams as $team)
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-item team-item--style-1">
                            <div class="team-item__img"><img class="img--bg" src="/{{$team->image}}" alt="img"/></div>
                            <div class="team-item__name">{{$team->name}}</div>
                            <div class="team-item__position">{{$team->title}}</div>
{{--                            <ul class="team-item__socials">--}}
{{--                                <li><a class="link--facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a class="link--twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a class="link--youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- section start-->
    <section class="section no-padding-top no-padding-bottom ">
        <div class="testimonials testimonials--style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonials__img"><img class="img--bg" src="/images/tourist.png" alt="img"/></div>
                    </div>
                    <div class="col-lg-9 tour-details__contacts">
                        <div class="row align-items-center">
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
    <!-- section start-->
    <section class="section">
        <div class="container">
            <div class="row bottom-50">
                <div class="col-12">
                    <div class="heading heading--primary heading--center"><span class="heading__pre-title">Our partners</span>
{{--                        <h2 class="heading__title no-margin-bottom"><span>People Who</span> <span>Trust Us</span></h2>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="logos-slider">
                        <div class="logos-slider__item"><img src="/images/about/1.png" alt="logo"/></div>
                        <div class="logos-slider__item"><img src="/images/about/2.jpeg" alt="logo"/></div>
                        <div class="logos-slider__item"><img src="/images/about/3.svg.png" alt="logo"/></div>
                    </div>
                    <div class="logos-slider__dots"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
@endsection
