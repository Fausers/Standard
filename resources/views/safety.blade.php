@extends('layouts.safari')

@section('template_title', 'Safety')

@section('content')
    <!-- promo start-->
    <section class="promo-primary">
        <picture>
            <source srcset="/images/safety.webp" media="(min-width: 992px)"/>
            <img class="img--bg" src="/images/safety.webp" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Safety</span>
                            <h1 class="promo-primary__title"><span>{{ config('app.name', 'POS') }}</span> <span>Our approach to safety</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo end-->
    <!-- blog post start-->
    <section class="section blog-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <p>{{$safety->desc}}</p>
                    <div class="blog-post__top">
                        <div class="blog-post__img"><img class="img--bg" src="/{{$safety->image}}" alt="img"/></div>
                        <div class="blog-post__description">
                            <div class="row align-items-center">
{{--                                <div class="col-6">--}}
{{--                                    <div class="blog-post__author"><span class="blog-post__author-img">--}}
{{--                                            <img class="img--bg" src="/img/author_3.png" alt="author"/></span>--}}
{{--                                        <span class="blog-post__author-name">{{$safety->organizer}}</span></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 text-right"><span class="blog-post__date">{{date('D d M Y',strtotime($safety->start_date))}}</span></div>--}}
                            </div>
                        </div>
                    </div>
                    {!! $safety->description !!}


                </div>

            </div>
        </div>
    </section>
    <!-- blog post end-->

    <!-- section end-->
@endsection
