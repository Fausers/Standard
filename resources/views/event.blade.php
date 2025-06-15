@extends('layouts.safari')

@section('template_title', $event->title)

@section('content')
    <!-- promo start-->
    <section class="promo-primary">
        <picture>
            <source srcset="/{{$event->image}}" media="(min-width: 992px)"/>
            <img class="img--bg" src="/{{$event->image}}" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Events</span>
                            <h1 class="promo-primary__title"><span></span> <span>{{$event->title}}</span></h1>
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
                    <p>{{$event->desc}}</p>
                    <div class="blog-post__top">
                        <div class="blog-post__img"><img class="img--bg" src="/{{$event->image}}" alt="img"/></div>
                        <div class="blog-post__description">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="blog-post__author"><span class="blog-post__author-img">
                                            <img class="img--bg" src="/img/author_3.png" alt="author"/></span>
                                        <span class="blog-post__author-name">{{$event->organizer}}</span></div>
                                </div>
                                <div class="col-6 text-right"><span class="blog-post__date">{{date('D d M Y',strtotime($event->start_date))}}</span></div>
                            </div>
                        </div>
                    </div>
                    {!! $event->description !!}

                    <hr>

                    <h3 class="mt-30">Event Gallery</h3>
					<div class="row gallery-masonry no-gutters">
                        @foreach($event->images as $event_image)
                            <div class=" col-sm-6 col-lg-4 col-xl-4 gallery-masonry__item">
                                <a class="gallery-masonry__img gallery-masonry__item--height-1" href="/{{$event_image->image}}" data-fancybox="gallery">
                                    <img class="img--bg" src="/{{$event_image->thumb}}" alt="img"/>
                                </a>
                            </div>
                        @endforeach

					</div>

                </div>

                <div class="col-md-8 offset-md-2 col-lg-4 offset-lg-0 col-xl-3">
                    <div class="blog__inner-block bottom-50">
                        <h5 class="blog__title">Latest Events</h5>
                        @foreach($events as $event)
                            <div class="latest-item">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <a class="latest-item__img" href="{{route('event',[$event->id,$event->title])}}"><img class="img--bg" src="/{{$event->image}}" alt="img"/></a>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="latest-item__title"><a href="{{route('event',[$event->id,$event->title])}}">{{$event->title}} </a></h6>
                                        <p>{{$event->address}}</p>
                                        <div class="latest-item__details">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="latest-item__date">{{date('d M y',strtotime($event->start_date))}}</div>
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
                        <p>Get updated when there is a new event.</p>
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
