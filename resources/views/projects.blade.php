@extends('layouts.gco')

@section('template_title')
Projects
@endsection

@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">{{ config('app.name', Lang::get('titles.app'))}} Projects</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="/">Home</a></li>
                <li><span>Our Projects</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach($projects as $project)
                    <div class="col-md-6 ">
                        <div class="blog-card-two" style="background-image: url('/assets/images/blog/blog-bg-2-1.png');">
                            <a href="{{route('project',[$project->id,$project->title])}}" class="donation-card__image">
                                <img src="/{{$project->image}}" alt="Give African Children's Good medical support">
                                <div class="donation-card__category">{{$project->category->title}}</div><!-- /.donation-card__category -->
                            </a><!-- /.donation-card__image -->
                            <div class="blog-card-two__content">
                                <h3 class="blog-card-two__title">
                                    <a href="{{route('project',[$project->id,$project->title])}}">{{$project->title}}</a></h3><!-- /.blog-card-two__title -->
                                <p class="blog-card-two__text" style="text-align: justify">{{$project->desc}}</p><!-- /.blog-card-two__text -->
                                <a href="{{route('project',[$project->id,$project->title])}}" class="blog-card-two__link">
                                    <i class="icon-duble-arrow"></i>
                                    <span>Read More</span>
                                </a><!-- /.blog-card-tow__link -->
                            </div><!-- /.blog-card-two__content -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- /.container -->
    </section><!-- /.blog-page section-space -->

@endsection

