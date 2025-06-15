@extends('layouts.gco')


@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">{{$member->name}}</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="/">Home</a></li>
                <li><a href="{{route('about')}}">Our Team</a></li>
                <li><span>{{$member->name}}</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="volunteer-details section-space">
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="volunteer-details__image">
                        <img src="/{{$member->image}}" alt="{{$member->name}}">
                        {{--  <div class="volunteer-details__social" style="background-image: url('/assets/images/shapes/volunteer-shape-1-1.png');">
                            <ul class="person-social">
                               <li>
                                    <a target="_blank" href="https://facebook.com/"><span class="icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com"><span class="icon-twitter"></span></a>
                                </li> 
                                <li>
                                    <a target="_blank" href="https://linkedin.com/"><span class="icon-linkedin"></span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://youtube.com/"><span class="icon-youtube"></span></a>
                                </li>
                            </ul>
                        </div><!-- /.volunteer-details__social -->  --}}
                    </div><!-- /.volunteer-details__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="volunteer-details__info">
                        <div class="volunteer-details__info__top">
                            <div class="volunteer-details__info__left">
                                <h3 class="volunteer-details__name">{{$member->name}}</h3><!-- /.volunteer-details__name -->
                                <p class="volunteer-details__designation">{{$member->title}}</p><!-- /.volunteer-details__designation -->
                                <a target="_blank" href="https://linkedin.com/"><span class="icon-linkedin"></span></a>
                            </div><!-- /.volunteer-details__info__left -->
{{--                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="volunteer-details__video video-button video-popup">--}}
{{--                                <span class="icon-play"></span>--}}
{{--                                <i class="video-button__ripple"></i>--}}
{{--                            </a><!-- /.video-button -->--}}
                        </div><!-- /.volunteer-details__info__top -->
                        <p class="volunteer-details__text">{!! $member->bio !!}</p><!-- /.volunteer-details__text -->
{{--                        <div class="volunteer-details__progress">--}}
{{--                            <div class="progress-box">--}}

{{--                                <h4 class="progress-box__title">Donation collect</h4><!-- /.progress-box__title -->--}}

{{--                                <div class="progress-box__bar">--}}
{{--                                    <div class="progress-box__bar__inner count-bar" data-percent='100%'>--}}
{{--                                        <div class="progress-box__number count-text">100%</div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.progress-box__bar -->--}}
{{--                            </div><!-- /.progress-box -->--}}
{{--                            <div class="progress-box">--}}

{{--                                <h4 class="progress-box__title">Team building</h4><!-- /.progress-box__title -->--}}

{{--                                <div class="progress-box__bar">--}}
{{--                                    <div class="progress-box__bar__inner count-bar" data-percent='50%'>--}}
{{--                                        <div class="progress-box__number count-text">50%</div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.progress-box__bar -->--}}
{{--                            </div><!-- /.progress-box -->--}}
{{--                            <div class="progress-box">--}}

{{--                                <h4 class="progress-box__title">Successful events</h4><!-- /.progress-box__title -->--}}

{{--                                <div class="progress-box__bar">--}}
{{--                                    <div class="progress-box__bar__inner count-bar" data-percent='80%'>--}}
{{--                                        <div class="progress-box__number count-text">80%</div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.progress-box__bar -->--}}
{{--                            </div><!-- /.progress-box -->--}}
{{--                        </div><!-- /.volunteer-details__progress -->--}}
{{--                        <div class="volunteer-profile">--}}
{{--                            <div class="volunteer-profile__inner">--}}
{{--                                <img src="/assets/images/resources/robert-joe-kerry.png" alt="{{$member->name}}" class="Robert Joe Kerry">--}}
{{--                                <div class="volunteer-profile__info">--}}
{{--                                    <h4 class="volunteer-profile__name"><a href="volunteer-details.html">Robert Joe Kerry</a></h4><!-- /.volunteer-profile__name -->--}}
{{--                                    <p class="volunteer-profile__designation">country manager</p><!-- /.volunteer-profile__designation -->--}}
{{--                                </div><!-- /.volunteer-profile__info -->--}}
{{--                            </div><!-- /.volunteer-profile__inner -->--}}
{{--                            <img src="/assets/images/resources/volunteer-d-signature.png" alt="Robert Joe Kerry signature" class="volunteer-profile__signature">--}}
{{--                        </div><!-- /.volunteer-profile -->--}}
                    </div><!-- /.volunteer__info -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.volunteer-details section-space -->

{{--    <section class="volunteer-details__background">--}}
{{--        <div class="container">--}}
{{--            <div class="volunteer-details__background__Inner">--}}
{{--                <h4 class="volunteer-details__background__heading">skills and education background</h4><!-- /.volunteer-details__background__heading -->--}}
{{--                <div class="volunteer-details__background__content wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">--}}
{{--                    <h5 class="volunteer-details__background__title">Bachelor's Degree <span class="volunteer-details__background__year">2010</span></h5><!-- /.volunteer-details__background__title -->--}}
{{--                    <div class="volunteer-details__background__content__inner">--}}
{{--                        <p class="volunteer-details__background__text">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p><!-- /.volunteer-details__background__text -->--}}
{{--                    </div><!-- /.volunteer-details__background__content__inner -->--}}
{{--                </div><!-- /.volunteer-details__background__content -->--}}
{{--                <div class="volunteer-details__background__content wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">--}}
{{--                    <h5 class="volunteer-details__background__title">P.H.D in communiction building <span class="volunteer-details__background__year">2014</span></h5><!-- /.volunteer-details__background__title -->--}}
{{--                    <div class="volunteer-details__background__content__inner">--}}
{{--                        <p class="volunteer-details__background__text">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p><!-- /.volunteer-details__background__text -->--}}
{{--                        <p class="volunteer-details__background__text">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p><!-- /.volunteer-details__background__text -->--}}
{{--                    </div><!-- /.volunteer-details__background__content__inner -->--}}
{{--                </div><!-- /.volunteer-details__background__content -->--}}
{{--            </div><!-- /.volunteer-details__background__Inner -->--}}
{{--        </div><!-- /.container -->--}}
{{--    </section><!-- /.volunteer-details__background -->--}}
@endsection
