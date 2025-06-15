@extends('layouts.gco')

@section('content')
<section class="page-header @@extraClassName">
    <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Our work</h2>
        <ul class="cleenhearts-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="/">Home</a></li>
            <li><span>Our work</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="blog-page section-space" id="programs">
    <div class="container">
        <div class="team-one__top" style="margin-bottom: 10px!important;">
        <div class="row gutter-y-30 align-items-center">
            <div class="col-xxl-8 col-lg-7">
                <div class="sec-title">
                    <h6 class="sec-title__tagline @@extraClassName">Programs</h6><!-- /.sec-title__tagline -->
                </div><!-- /.sec-title -->
            </div><!-- /.col-xxl-8 col-lg-7 -->
            <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1500ms">
            </div><!-- /.col-xxl-4 col-lg-5 -->
        </div><!-- /.row gutter-y-40 -->
    </div>
    <div class="container">
        <div class="row gutter-y-30">
            @foreach($categories as $category)
                <div class="col-md-6 ">
                    <div class="blog-card-two" style="background-image: url('/assets/images/blog/blog-bg-2-1.png');">
                        
                        <a href="{{route('ourwork',[$category->id,$category->title])}}" class="donation-card__image">
                            <img src="/{{$category->image}}" alt="Give African Children's Good medical support">
                            {{-- <div class="donation-card__category">{{$project->category->title}}</div><!-- /.donation-card__category --> --}}
                        </a><!-- /.donation-card__image -->
                        <div class="blog-card-two__content">
                            <h3 class="blog-card-two__title">
                                <a href="{{route('project',[$category->id,$category->title])}}">{{$category->title}}</a></h3><!-- /.blog-card-two__title -->
                                <div class="event-card-four__text" style="text-align: justify">{{$category->description}}.</div>
                            {{-- <p class="blog-card-two__text">{{$project->desc}}</p><!-- /.blog-card-two__text --> --}}
                            {{-- <a href="{{route('project',[$project->id,$project->title])}}" class="blog-card-two__link">
                                <i class="icon-duble-arrow"></i>
                                <span>Read More</span>
                            </a><!-- /.blog-card-tow__link --> --}}
                        </div><!-- /.blog-card-two__content -->
                    </div>
                </div>
            @endforeach
        </div>
    </div><!-- /.container -->
</section><!-- /.blog-page section-space -->

    <section class="faq-one faq-one--about section-space" id="strategy">
        <div class="faq-one__bg" style="background-image: url('/assets/images/backgrounds/faq-bg-2.png');"></div><!-- /.faq-one__bg -->
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="faq-one__image">
                        <img src="/images/1.png">
                        {{-- <img src="/images/abt.jpg" alt="faq-image"> --}}
                    </div><!-- /.faq-one__image -->
                </div><!-- /.col-xl-6 col-lg-6 -->
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__content">
                        <div class="sec-title">

                            <h6 class="sec-title__tagline @@extraClassName">Strategies</h6><!-- /.sec-title__tagline -->

                            {{-- <h3 class="sec-title__title">GCO <span class="sec-title__title__inner">Strategies</span></h3><!-- /.sec-title__title --> --}}
                        </div><!-- /.sec-title -->
                        <ul>
                            <li><p class="faq-one__text text-black" style="font-size: 18px">STEM awareness creation and sensitization.</p><!-- /.faq-one__text --></li>
                            <li><p class="faq-one__text text-black" style="font-size: 18px">Build and strengthen capacity of construction actors and stakeholders through targeted capacity building programming.</p><!-- /.faq-one__text --></li>
                            <li><p class="faq-one__text text-black" style="font-size: 18px">Work to deepen knowledge and learning through researches, documentation and analysis papers on critical issues.</p><!-- /.faq-one__text --></li>
                            <li><p class="faq-one__text text-black" style="font-size: 18px">Bringing togethers actors and stakeholders through convening and dialogue platforms for collective action, and visibility of diverse voices.</p></li>
                            <li><p class="faq-one__text text-black" style="font-size: 18px">Build and grow robust financial resources to carry out GCO’s mandate.</p></li>
                        </ul>
                    </div><!-- /.faq-one__content -->
                </div><!-- /.col-xl-6 col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.faq-one section-space -->

    <section class="faq-one faq-one--about section-space" id="sdgs">
        <div class="faq-one__bg" style="background-image: url('/assets/images/backgrounds/whitebg.jpg');"></div>
            <div class="container">
                <div class="team-one__top" style="margin-bottom: 10px!important;">
                    <div class="row gutter-y-30 align-items-center">
                        <div class="col-xxl-8 col-lg-7">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline @@extraClassName">SDG's</h6><!-- /.sec-title__tagline -->

                                {{-- <h3 class="sec-title__title">Our <span class="sec-title__title__inner">Core</span> Values</h3><!-- /.sec-title__title --> --}}
                            </div><!-- /.sec-title -->
                        </div><!-- /.col-xxl-8 col-lg-7 -->
                        <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1500ms">
                        {{--  <p class="team-one__text">We help companies develop powerful corporate social responsibility, grantmaking, and employee engagement strategies.</p><!-- /.team-one__text -->--}}
                        </div><!-- /.col-xxl-4 col-lg-5 -->
                    </div><!-- /.row gutter-y-40 -->
                </div>
                <div class="row gutter-y-10 align-items-center">
                    <img src="/images/sdg.png" alt="SDGs">
                    {{-- <div class="col-md-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="/assets/images/sdg/education4.png" alt="Education" >
                    </div>
                    <div class="col-md-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="/assets/images/sdg/gender_equality5.png" alt="Gender" >
                    </div>
                    <div class="col-md-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="/assets/images/sdg/decent_work8.png" alt="Decent" >
                    </div>
                    <div class="col-md-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="/assets/images/sdg/industry9.png" alt="Industry" >
                    </div>
                    <div class="col-md-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="/assets/images/sdg/inequality10.jpeg" alt="Inequality" >
                    </div>
                    <div class="col-md-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="/assets/images/sdg/sustainable11.png" alt="Sustainable" >
                    </div> --}}

                </div><!-- /.row -->
            </div><!-- /.container -->
        
    </section>


@endsection