@extends('layouts.gco')

@section('template_title')
Blog
@endsection

@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">our news</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="/">Home</a></li>
                <li><span>Latest News</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach($posts as $post)
                    <div class="col-md-6 ">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <a href="{{route('post',[$post->id,$post->title])}}" class="blog-card__image">
                                <img src="/{{$post->image}}" alt="{{$post->title}}">
                                <div class="blog-card__date">
                                    <span>{{date('d',strtotime($post->created_at))}}</span>{{date('M',strtotime($post->created_at))}}</div><!-- /.blog-card__date -->
                            </a><!-- /.blog-card__image -->
                            <div class="blog-card__content" style="background-image: url('/assets/images/blog/blog-bg-1-1.png');">
                                <h3 class="blog-card__title">
                                    <a href="{{route('post',[$post->id,$post->title])}}">{{$post->title}}</a></h3><!-- /.blog-card__title -->
                                <a href="{{route('post',[$post->id,$post->title])}}" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icon-duble-arrow"></span></span>
                                    <span class="blog-card__link__back"><span class="icon-duble-arrow"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div>
                @endforeach
            </div>
        </div><!-- /.container -->
    </section><!-- /.blog-page section-space -->
@endsection
