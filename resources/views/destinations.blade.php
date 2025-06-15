@extends('layouts.safari')

@section('template_title','Destinations')

@section('content')
    <!-- promo start-->
    <section class="promo-primary">
        <picture>
            <source srcset="/images/destinations.webp" media="(min-width: 992px)"/><img class="img--bg" src="/images/destinations.webp" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Wild Africa</span>
                            <h1 class="promo-primary__title"><span>{{ config('app.name', 'POS') }}</span> <span>Destinations</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo end-->
    <!-- blog start-->
    <section class="section blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        @foreach($destinations as $destination)
                            <div class="col-12">
                                <div class="blog-item">
                                    <a href="{{route('destination',[$destination->id,$destination->title])}}" class="blog-item__img"><img class="img--bg" src="/{{$destination->image}}" alt="blog"/>
{{--                                        <div class="blog-item__date"><span>{{date('d',strtotime($destination->start_date))}}</span><span>{{date('M',strtotime($destination->start_date))}}</span></div>--}}
                                    </a>
                                    <h4 class="blog-item__title"><a href="{{route('destination',[$destination->id,$destination->title])}}">{{$destination->title}}</a></h4>
                                    <p>{{$destination->desc}}</p>
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
                        <p>Get up to date with new destinations.</p>
                        <form class="form subscribe-form" action="javascript:void(0);">
                            <input class="form__field" type="email" placeholder="Enter your mail here..."/>
                            <input class="form__submit" type="submit" value="Subscribe"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end-->
@endsection
