@extends('layouts.safari')

@section('template_title')
    {{$safari->title}}
@endsection

@section('content')
    <!-- promo start-->
    <section class="promo-primary" style="height: 450px">
        <picture>
            <source srcset="/{{$safari->image}}" media="(min-width: 992px)"/>
            <img class="img--bg" src="/{{$safari->image}}" alt="img" height="100px"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="align-container">
                        <div class="align-container__item "><span class="promo-primary__pre-title">{{ config('app.name', Lang::get('titles.app')) }}</span>
                            <h1 class="promo-primary__title"><span></span> <span>{{$safari->title}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section start-->
    <section class="section tour-details no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12 bottom-50">
                            <h4 class="tour-details__section-title">{{$safari->title}}<span></span></h4><span class="tour-details__price">Tour Summary</span>
                            <p>{{$safari->desc}}</p>
                            {{--										<p class="no-margin-bottom">Moray eel; tailor goatfish houndshark airsac catfish silver driftfish sand tilefish! Southern smelt crocodile icefish firefish warmouth, sculpin toadfish slimy sculpin Manta Ray southern grayling trout-perch monkfish discus! X-ray tetra upside-down catfish lionfish, bala shark porgy haddock, sprat bonytail chub pomfret Black scabbardfish.</p>--}}
                        </div>

                        <div class="col-12 tour-details__contacts bottom-30">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="icon-item text-center">
                                        <div class="icon-item__icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <h5 class="icon-item__title no-margin-bottom">Availability</h5>
                                        <h6>Whole Year</h6>
                                    </div>
                                </div>
                                @if(!in_array($safari->category->id, [5]) )
                                    <div class="col-6 col-md-4">
                                        <div class="icon-item text-center">
                                            <div class="icon-item__icon">
                                                <svg class="icon">
                                                    <use xlink:href="#debitcard"></use>
                                                </svg>
                                            </div>
                                            <h5 class="icon-item__title no-margin-bottom">Price</h5>
                                            <h6>${{number_format($safari->price)}}<sub>/Person</sub></h6>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-6 col-md-4">
                                    <div class="icon-item text-center">
                                        <div class="icon-item__icon">
                                            <svg class="icon">
                                                <use xlink:href="#jeep"></use>
                                            </svg>
                                        </div>
                                        <h5 class="icon-item__title no-margin-bottom">Duration</h5>
                                        <h6>{{number_format($safari->days)}} Days</h6>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 bottom-30">
                            <h5 class="tour-details__title">Tour Highlights</h5>
                            <ul class="list-icon">
                                @php $highlights = explode(",", $safari->highlights); @endphp
                                @foreach($highlights as $highlight)
                                    <li class="list-icon__item">{{$highlight}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-12 tour-details__contacts bottom-50">
                            <p>{!! $safari->description !!}</p>
                            {{--										<p class="no-margin-bottom">Moray eel; tailor goatfish houndshark airsac catfish silver driftfish sand tilefish! Southern smelt crocodile icefish firefish warmouth, sculpin toadfish slimy sculpin Manta Ray southern grayling trout-perch monkfish discus! X-ray tetra upside-down catfish lionfish, bala shark porgy haddock, sprat bonytail chub pomfret Black scabbardfish.</p>--}}
                        </div>
                        <div class="col-12">
                            <div class="row bottom-30">
                                <div class="col-md-8">
                                    <h5 class="tour-details__title no-margin-bottom">Gallery</h5>
                                </div>
                                <div class="col-md-4 text-left text-md-right">
                                    <div class="tours-slider__dots"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tours-slider">
                                        @foreach($safari->images as $image)
                                            <a class="tours-slider__item photo-trigger" href="/{{$image->image}}" data-fancybox="gallery"><img class="img--bg" src="/{{$image->thumb}}" alt="img"/></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 offset-md-2 col-lg-3 offset-lg-0">
                    {{--								<div class="tour-details__inner-block">--}}
                    {{--									<h5 class="tour-details__title">Categories</h5>--}}
                    {{--									<ul class="categories-list">--}}
                    {{--										<li class="categories-list__item"><span class="categories-list__name">Botswana</span><span class="categories-list__count">5</span></li>--}}
                    {{--										<li class="categories-list__item"><span class="categories-list__name">Kenya</span><span class="categories-list__count">14</span></li>--}}
                    {{--										<li class="categories-list__item categories-list__item--active"><span class="categories-list__name">South Africa</span><span class="categories-list__count">1</span></li>--}}
                    {{--										<li class="categories-list__item"><span class="categories-list__name">Uganda</span><span class="categories-list__count">4</span></li>--}}
                    {{--										<li class="categories-list__item"><span class="categories-list__name">Tanzania</span><span class="categories-list__count">8</span></li>--}}
                    {{--										<li class="categories-list__item"><span class="categories-list__name">Wakanda</span><span class="categories-list__count">8</span></li>--}}
                    {{--									</ul>--}}
                    {{--								</div>--}}
                    {{--								<div class="tour-details__inner-block">--}}
                    {{--									<h5 class="tour-details__title">Popular Destinations</h5><a class="popular-item" href="#"><img class="img--bg" src="/img/popular_1.jpg" alt=""/>--}}
                    {{--										<h6 class="popular-item__title">Bostwana</h6></a><a class="popular-item" href="#"><img class="img--bg" src="/img/popular_2.jpg" alt=""/>--}}
                    {{--										<h6 class="popular-item__title">Uganda</h6></a><a class="popular-item" href="#"><img class="img--bg" src="/img/popular_3.jpg" alt=""/>--}}
                    {{--										<h6 class="popular-item__title">Wakanda</h6></a><a class="popular-item" href="#"><img class="img--bg" src="/img/popular_4.jpg" alt=""/>--}}
                    {{--										<h6 class="popular-item__title">Tanzania</h6></a>--}}
                    {{--								</div>--}}

                    <div class="tour-details__inner-block">
                        <div class="action-item"><img class="img--bg" src="/img/action_bg.jpg" alt="img"/>
                            <h5 class="action-item__title">Wild <span>Safari</span></h5><a class="button action-item__button" href="{{route('contacts')}}">Book Now</a>
                        </div>
                    </div>


                    <div class="tour-details__inner-block">
                        <div class="tour-details__contacts">
                            <p><strong>Phone:</strong> <a href="tel:+255 762 026 599">+255 762 026 599</a></p>
                            <p><strong>Email:</strong> <a href="mailto:info@safarishieldadventures.co.tz">info@safarishieldadventures.co.tz</a></p>
                            <ul class="socials socials--rounded">
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
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
                    <div class="heading heading--primary heading--center"><span class="heading__pre-title">Similar in {{$safari->category->title}}</span>
                        <h2 class="heading__title no-margin-bottom"><span>similar in {{$safari->category->title}}</span> <span>you may like</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($safari->category->safaris()->where('id','NOT LIKE',$safari->id)->limit(6)->get() as $similar)
                    <div class="col-sm-6 col-xl-4 bottom-30">
                        <div class="tours-item">
                            <div class="tours-item__img"><img class="img--bg" src="/{{$similar->image}}" alt="img"/></div>
                            <div class="tours-item__details">
                                <h4 class="tours-item__title">{{$similar->title}}</h4>
                                {{--                                    <div class="tours-item__price">125.99 USD</div>--}}
                                {{--                                    <div class="tours-item__edition">Limited Edition</div>--}}
                                <a class="tours-item__link" href="{{route('safari',[$similar->id,$similar->title])}}">Read more</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- section end-->
@endsection
