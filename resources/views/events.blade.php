@extends('layouts.safari')

@section('template_title','Events')

@section('content')
    <!-- promo start-->
    <section class="promo-primary">
        <picture>
            <source srcset="/img/blog.jpg" media="(min-width: 992px)"/><img class="img--bg" src="/img/blog.jpg" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Wild World</span>
                            <h1 class="promo-primary__title"><span>Our</span> <span>Events</span></h1>
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
                        @foreach($events as $event)
                            <div class="col-12">
                                <div class="blog-item">
                                    <div class="blog-item__img"><img class="img--bg" src="/{{$event->image}}" alt="blog"/>
                                        <div class="blog-item__date"><span>{{date('d',strtotime($event->start_date))}}</span><span>{{date('M',strtotime($event->start_date))}}</span></div>
                                    </div>
                                    <h4 class="blog-item__title"><a href="{{route('event',[$event->id,$event->title])}}">{{$event->title}}</a></h4>
                                    <p>{{$event->desc}}</p>
                                    <div class="blog-item__details">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <div class="blog-item__author">
                                                    <div class="blog-item__author-img"><img class="img--bg" src="/img/author_1.png" alt="author"/></div>
                                                    <div class="blog-item__author-name">{{$event->organizer}}</div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-right">
                                                <div class="blog-item__comments">
                                                    <svg class="icon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </svg><span>{{$event->address}}, {{$event->venue}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- blog end-->
@endsection
