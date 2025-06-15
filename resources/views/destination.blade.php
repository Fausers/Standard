@extends('layouts.safari')

@section('template_title', $destination->title)

@section('content')
    <!-- promo start-->
    <section class="promo-primary">
        <picture>
            <source srcset="/{{$destination->image}}" media="(min-width: 992px)"/>
            <img class="img--bg" src="/{{$destination->image}}" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Destination</span>
                            <h1 class="promo-primary__title"><span></span> <span>{{$destination->title}}</span></h1>
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
                    <p>{{$destination->desc}}</p>
                    <div class="blog-post__top">
                        <div class="blog-post__img"><img class="img--bg" src="/{{$destination->image}}" alt="img"/></div>
                        <div class="blog-post__description">
                            <div class="row align-items-center">
{{--                                <div class="col-6">--}}
{{--                                    <div class="blog-post__author"><span class="blog-post__author-img">--}}
{{--                                            <img class="img--bg" src="/img/author_3.png" alt="author"/></span>--}}
{{--                                        <span class="blog-post__author-name">{{$destination->organizer}}</span></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 text-right"><span class="blog-post__date">{{date('D d M Y',strtotime($destination->start_date))}}</span></div>--}}
                            </div>
                        </div>
                    </div>
                    {!! $destination->description !!}

                    <hr>

                    <h3 class="mt-30">{{$destination->title}} Attractions</h3>
					<div class="row ">
                        @foreach($destination->attractions as $attraction)
                            <div class=" col-md-6 ">
                                <div class="">
                                    <img class="" src="/{{$attraction->image}}" alt="{{$attraction->title}}"/>
                                    <h4 class="blog-item__title">{{$attraction->title}}</h4>
                                    <p>{{$attraction->title}}</p>
                                </div>

                            </div>
                        @endforeach

					</div>

                </div>

                <div class="col-md-8 offset-md-2 col-lg-4 offset-lg-0 col-xl-3">
                    <div class="blog__inner-block bottom-50">
                        <h5 class="blog__title">Tours & Safaris</h5>
                        @foreach($safaris->reverse() as $safari)
                            <div class="latest-item">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <a class="latest-item__img" href="{{route('safari',[$safari->id,$safari->title])}}"><img class="img--bg" src="/{{$safari->image}}" alt="img"/></a>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="latest-item__title"><a href="{{route('safari',[$safari->id,$safari->title])}}">{{$safari->title}} </a></h6>
                                        <p>{{$destination->address}}</p>
                                        <div class="latest-item__details">
                                            <div class="row">
                                                <div class="col-7">
{{--                                                    <div class="latest-item__date">{{$safari->category->title}}</div>--}}
                                                </div>
                                                <div class="col-5">
                                                    <div class="latest-item__comments">
                                                        <svg class="icon text-danger">
                                                            <i class="fa fa-fire "></i>
                                                        </svg><span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="subscribe-block">
                        <h5 class="subscribe-block__title">Subscribe Now</h5>
                        <p>Get up to date with destinations.</p>
                        <form class="form subscribe-form" action="javascript:void(0);">
                            <input class="form__field" type="email" placeholder="Enter your mail here..."/>
                            <input class="form__submit" type="submit" value="Subscribe"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog post end-->

    <!-- section end-->
@endsection
