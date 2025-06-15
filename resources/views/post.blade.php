@extends('layouts.gco')

@section('template_title')
{{$post->title}}
@endsection

@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">{{$post->title}}</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="/">Home</a></li>
                <li><a href="{{route('posts')}}">News List</a></li>
                <li><span>{{$post->title}}</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-card blog-card-four @@extraClassName wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <a  class="blog-card__image">
                                <img src="/{{$post->image}}" alt="{{$post->title}}">
{{--                                <div class="blog-details__hall">--}}
{{--                                    <span>Hall no:</span>--}}
{{--                                    <span>69</span>--}}
{{--                                </div><!-- /.blog-details__hall -->--}}
                                <div class="blog-card__date"><span>{{date('d',strtotime($post->created_at))}}</span>{{date('M',strtotime($post->created_at))}}</div><!-- /.blog-card__date -->
                            </a><!-- /.blog-card__image -->
                            <div class=" blog-card-four__content">
                                <ul class="list-unstyled blog-card-four__meta">
                                    <li><a href="#">
                                            <span class="icon-user"></span>
                                            {{$post->author->first_name}} {{$post->author->last_name}}</a></li>
{{--                                    <li><a href="#">--}}
{{--                                            <span class="icon-comment"></span>--}}
{{--                                            2 Comments</a></li>--}}
                                </ul><!-- /.list-unstyled blog-card-four__meta -->

                                {!! $post->description !!}

                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.blog-details -->


                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title">Latest posts</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__posts list-unstyled">
                                    @foreach($resents as $resent)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="/{{$resent->image}}" alt="Latest posts">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><a >
                                                        <span class="icon-user"></span>
                                                        By {{$resent->author->first_name}} {{$resent->author->last_name}}</a></p><!-- /.sidebar__posts__date -->
                                                <h4 class="sidebar__posts__title"><a href="{{route('post',[$resent->id,$resent->title])}}">{{$resent->title}}</a></h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                    @endforeach
                                </ul><!-- /.sidebar__posts list-unstyled -->
                            </div><!-- /.sidebar__posts-wrapper sidebar__single -->
                        </aside><!-- /.widget-area -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-page section-space -->
@endsection
