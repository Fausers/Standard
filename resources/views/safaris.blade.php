@extends('layouts.safari')

@section('template_title')
    Safaris
@endsection

@section('content')
    <!-- promo start-->
    <section class="promo-primary" style="height: 450px">
        <picture>
            <source srcset="/img/safari-tours.jpg" media="(min-width: 992px)"/>
            <img class="img--bg" src="/img/safari-tours.jpg" alt="img" height="100px"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item "><span class="promo-primary__pre-title">{{ config('app.name', Lang::get('titles.app')) }}</span>
                            <h1 class="promo-primary__title"><span>Our</span> <span>Tours</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section no-padding-top no-padding-bottom">
        <div class="container">
            <div class="row bottom-50">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">safari tour</span>
                        <h2 class="heading__title no-margin-bottom"><span>Discover your</span> <span>way</span></h2>
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
{{--                                @if(!in_array($safari->category->id, [5]) )--}}
{{--                                    <div class="tours-item__edition">From ${{number_format($safari->price)}}<sub>/Person</sub></div>--}}
{{--                                @endif--}}
                                <a class="tours-item__link" href="{{route('safari',[$safari->id,$safari->title])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row top-50">
{{--                <div class="col-12 text-center"><a class="button button--primary" href="{{route('safari')}}">View all tours</a></div>--}}
            </div>
        </div>
    </section>
@endsection

