@extends('layouts.gco')

@section('template_title')
Resources
@endsection

@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Resources</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="/">Home</a></li>
                <li><span>Resources</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="gallery-one section-space" id="reports">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline @@extraClassName">Annual Reports</h6><!-- /.sec-title__tagline -->

                        {{-- <h3 class="sec-title__title">Our <span class="sec-title__title__inner">Core</span> Values</h3><!-- /.sec-title__title --> --}}
                    </div><!-- /.sec-title -->
                </div><!-- /.col-xxl-8 col-lg-7 -->
                @foreach($resources as $resource)
                    @if($resource->category=="Annual Report")
                        <div class="row">
                            <div class="col-md-2">
                                <a href="/" class="">
                                    <img src="/assets/a/pdf.png" style="width: 90px" >
                                </a><!-- /.event-card-four__image -->
                            </div><!-- /.event-card-four -->
                                <div class="col-md-8">
                                    <h4 class="event-card-four__title"><a href="/">{{$resource->title}}</a></h4><!-- /.event-card-four__title -->
                                    <div class="event-card-four__text">

                                        <a target="_blank" href="{{url(Storage::url($resource->file_location))}}" class="product-details__btn-wishlist cleenhearts-btn cleenhearts-btn--border">
                                            <div class="cleenhearts-btn__icon-box">
                                                <div class="cleenhearts-btn__icon-box__inner"><span class="fa fa-download"></span></div>
                                            </div>
                                            <span class="cleenhearts-btn__text pull-right">Download</span>
                                        </a>
                                    </div><!-- /.event-card-four__text -->

                                </div><!-- /.event-card-four__content -->
                        </div>
                    @endif
                @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.gallery-one section-space -->


    <section class="gallery-one section-space" id="publications">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline @@extraClassName">Publications</h6><!-- /.sec-title__tagline -->

                        {{-- <h3 class="sec-title__title">Our <span class="sec-title__title__inner">Core</span> Values</h3><!-- /.sec-title__title --> --}}
                    </div><!-- /.sec-title -->
                </div><!-- /.col-xxl-8 col-lg-7 -->
                @foreach($resources as $resource)
                @if($resource->category=="Publication")
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/" class="">
                                <img src="/assets/a/pdf.png" style="width: 90px" >
                            </a><!-- /.event-card-four__image -->
                        </div><!-- /.event-card-four -->
                            <div class="col-md-8">
                                <h4 class="event-card-four__title"><a href="/">{{$resource->title}}</a></h4><!-- /.event-card-four__title -->
                                <div class="event-card-four__text">

                                    <a target="_blank" href="{{url(Storage::url($resource->file_location))}}" class="product-details__btn-wishlist cleenhearts-btn cleenhearts-btn--border">
                                        <div class="cleenhearts-btn__icon-box">
                                            <div class="cleenhearts-btn__icon-box__inner"><span class="fa fa-download"></span></div>
                                        </div>
                                        <span class="cleenhearts-btn__text pull-right">Download</span>
                                    </a>
                                </div><!-- /.event-card-four__text -->

                            </div><!-- /.event-card-four__content -->
                    </div>
                @endif
            @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.gallery-one section-space -->
@endsection
