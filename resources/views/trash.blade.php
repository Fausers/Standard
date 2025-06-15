        <section class="help-donate-one section-space-top">
            <div class="help-donate-one__bg cleenhearts-jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(/assets/images/backgrounds/help-donate-bg-1-1.jpg);"></div><!-- /.cta-one__bg -->
            <div class="help-donate-one__shape-one" style="background-image: url(/assets/images/shapes/shape-1.png);"></div><!-- /.cta-one__shape-one -->
            <div class="help-donate-one__shape-two" style="background-image: url(/assets/images/shapes/shape-2.png);"></div><!-- /.cta-one__shape-two -->
            <div class="container">
                <div class="sec-title">
                    <h6 class="sec-title__tagline sec-title__tagline--center">OUR CURRENT PROJECTS</h6><!-- /.sec-title__tagline -->
                </div><!-- /.sec-title -->
            </div><!-- /.container -->
            <div class="help-donate-one__slide">
                <span class="help-donate-one__text help-donate-one__text--one">Equality</span><!-- /.help-donate-one__text -->
                <img src="/assets/images/resources/help-donate-1-1.png" alt="help-donate" class="help-donate-one__image">
                <span class="help-donate-one__text help-donate-one__text--two">Empowerment</span><!-- /.help-donate-one__text -->
                <img src="/assets/images/resources/help-donate-1-1.png" alt="help-donate" class="help-donate-one__image">
                <span class="help-donate-one__text help-donate-one__text--one">Dignity</span><!-- /.help-donate-one__text -->
                <img src="/assets/images/resources/help-donate-1-1.png" alt="help-donate" class="help-donate-one__image">
                <span class="help-donate-one__text help-donate-one__text--two">Diversity</span><!-- /.help-donate-one__text -->
                <img src="/assets/images/resources/help-donate-1-1.png" alt="help-donate" class="help-donate-one__image">
                <span class="help-donate-one__text help-donate-one__text--one">Respect</span><!-- /.help-donate-one__text -->
                <img src="/assets/images/resources/help-donate-1-1.png" alt="help-donate" class="help-donate-one__image">
                <span class="help-donate-one__text help-donate-one__text--two">Recognition</span><!-- /.help-donate-one__text -->
            </div><!-- /.help-donate-one__slide -->
        </section><!-- /.help-donate-one section-space-top -->

        <section class="donations-one donations-carousel section-space-bottom">
            <div class="container">
                <div class="donations-one__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel"
                     data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":true,
                        "dots":false,
                        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items": 1,
                                "margin": 20
                            },
                            "576":{
                                "items": 1,
                                "margin": 30
                            },
                            "768":{
                                "items": 2,
                                "margin": 30
                            },
                            "992":{
                                "items": 2,
                                "margin": 30
                            },
                            "1200":{
                                "items": 3,
                                "margin": 30
                            }
                        }
                        }'>
                    @foreach($projects as $project)
                        <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="donation-card @@extraClassName">
                                <div class="donation-card__bg" style="background-image: url('/assets/images/backgrounds/donation-bg-1-1.png');">
                                </div><!-- /.donation-card__bg -->
                                <a href="{{route('project',[$project->id,$project->title])}}" class="donation-card__image">
                                    <img src="/{{$project->image}}" alt="Give African Children's Good medical support">
                                    <div class="donation-card__category">Medical</div><!-- /.donation-card__category -->
                                </a><!-- /.donation-card__image -->
                                <div class="donation-card__content " style="padding-top: 10px">

                                    <h3 class="donation-card__title"><a href="{{route('project',[$project->id,$project->title])}}">{{$project->title}}</a></h3>
                                    <!-- /.donation-card__title -->
                                    <a href="{{route('project',[$project->id,$project->title])}}" class="donation-card__btn cleenhearts-btn cleenhearts-btn--border-base">
                                        <div class="cleenhearts-btn__icon-box">
                                            <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                        </div>
                                        <span class="cleenhearts-btn__text">Project details</span>
                                    </a><!-- /.donation-card__btn -->
                                </div><!-- /.donation-card__content -->
                            </div><!-- /.donation-card -->
                        </div>
                    @endforeach


                </div><!-- /.donations-one__carousel -->
                <div class="donations-one__row row gutter-y-30">
                    <div class="col-xl-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="donation-information">
                            <div class="donation-information__bg" style='background-image: url(/assets/images/resources/donation-information-bg-1-1.jpg)'></div><!-- /.donation-information__bg -->
                            <div class="donation-information__content">
                                <h3 class="donation-information__title">Make the Most Out of Tax Time</h3><!-- /.donation-information__title -->
                                <p class="donation-information__text">We help companies develop powerful corporate social responsibility, grantmaking, and employee engagement strategies.</p><!-- /.donation-information__text -->
                                <ul class="donation-information__list">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>Donate Money</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>handle with care</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>Donate Money</span>
                                    </li>
                                </ul><!-- /.donation-information__list -->
                                <a href="{{route('contacts')}}" class="cleenhearts-btn cleenhearts-btn--border">
                                    <div class="cleenhearts-btn__icon-box">
                                        <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                    </div>
                                    <span class="cleenhearts-btn__text">Learn more</span>
                                </a>
                            </div><!-- /.donation-information__content -->
                        </div><!-- /.donation-information -->
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="gift-card">
                            <div class="gift-card__bg" style='background-image: url(/assets/images/resources/gift-bg-1-1.jpg)'></div><!-- /.gift-card__bg -->
                            <div class="gift-card__content">
                                <h3 class="gift-card__title">Make a donation now</h3><!-- /.gift-card__title -->
                                <p class="gift-card__text">We help companies develop powerful corporate social responsibility, grantmaking, and employee</p><!-- /.gift-card__text -->
                                <div class="gift-card__amount">
                                    <form action="#" class="gift-card__form">
                                        <label for="custom_amount" class="gift-card__form__title">Custom</label>
                                        <input type="text" value="$25" name="custom-amount" id="custom_amount" class="gift-card__form__input" placeholder="Amount">
                                    </form><!-- /.gift-card__form -->
                                    <button type="button" class="gift-card__btn active">$<span class="gift-card__btn__text">25</span></button><!-- /.gift-card__btn -->
                                    <button type="button" class="gift-card__btn">$<span class="gift-card__btn__text">50</span></button><!-- /.gift-card__btn -->
                                    <button type="button" class="gift-card__btn">$<span class="gift-card__btn__text">99</span></button><!-- /.gift-card__btn -->
                                </div><!-- /.gift-card__amount -->
                                <a href="{{route('donate')}}" class="cleenhearts-btn cleenhearts-btn--border">
                                    <div class="cleenhearts-btn__icon-box">
                                        <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                    </div>
                                    <span class="cleenhearts-btn__text">donate now</span>
                                </a>
                            </div><!-- /.gift-card__content -->
                        </div><!-- /.gift-card -->
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.donations-one donations-carousel section-space-bottom -->

        <section class="inspiring-one section-space" style="background-image: url('/assets/images/backgrounds/inspiring-bg-1-1.png');">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-xl-6">
                        <div class="sec-title">

                            <h6 class="sec-title__tagline @@extraClassName">WHO ARE WE</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">{{ config('app.name', Lang::get('titles.app'))}}</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="inspiring-one__text">
                            Gender in Construction (GCO) is a youth and female-led organization, the first of its kind, established in January 2023 as a non-governmental entity, with registration number OONGO/R/4186. The organization seeks to contribute to the growth of the building sector in Tanzania through mainstreaming gender issues into the construction industry. GCO believes that both construction men and women in their diversity have an important role to play in the development of the sector and its sustainability.
                        </p><!-- /.inspiring-one__text -->
                        <div class="inspiring-one__inner">
                            <div class="inspiring-one__inner__content wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h4 class="inspiring-one__inner__title">Become A
                                    Volunteer</h4><!-- /.inspiring-one__inner__title -->
                                <div class="inspiring-one__inner__icon">
                                    <span class="icon-unity"></span>
                                </div><!-- /.inspiring-one__inner__icon -->
                            </div><!-- /.inspiring-one__inner__content -->
                            <div class="inspiring-one__inner__content wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                                <h4 class="inspiring-one__inner__title">Donate</h4><!-- /.inspiring-one__inner__title -->
                                <div class="inspiring-one__inner__icon">
                                    <span class="icon-healthcare"></span>
                                </div><!-- /.inspiring-one__inner__icon -->
                            </div><!-- /.inspiring-one__inner__content -->
                        </div><!-- /.inspiring-one__inner -->
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6">
                        <div class="inspiring-one__image">
                            <div class="inspiring-one__image__inner inspiring-one__image__inner--one wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <img src="/assets/images/inspiring/inspiring-1-1.jpg" alt="inspiring">
                            </div><!-- /.inspiring-one__image__one -->
                            <div class="inspiring-one__image__inner inspiring-one__image__inner--two wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                                <img src="/assets/images/inspiring/inspiring-1-2.jpg" alt="inspiring">
                            </div><!-- /.inspiring-one__image__two -->
                        </div><!-- /.inspiring-one__image -->
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="inspiring-one__shapes">
                <div class="inspiring-one__shape inspiring-one__shape--one"></div><!-- /.inspiring-one__shape__one -->
                <div class="inspiring-one__shape inspiring-one__shape--two"></div><!-- /.inspiring-one__shape__one -->
            </div><!-- /.inspiring-one__shape -->
        </section><!-- /.inspiring-one-one section-space -->





        <section class="events-one section-space">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline sec-title__tagline--center">How we make a difference</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">See Upcoming <span class="sec-title__title__inner">Events</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="horizontal-accordion">
                    @foreach($events as $event)
                        <div class="events-one__card card choice {{$loop->iteration == 2 ? 'expand': null}}">
                            <div class="card-body">
                                <div class="events-one__card__top" style="background-image: url('/{{$event->image}}');">
                                    <h4 class="events-one__card__title">{{$event->title}}</h4>
                                    <span class="events-one__card__icon icon-plus"></span><!-- /.accordion-title__icon -->
                                </div><!-- /.accordian-title -->
                                <div class="event-card-two">
                                    <a href="{{route('event',[$event->id,$event->title])}}" class="event-card-two__image">
                                        <img src="/{{$event->image}}" alt="cleenhearts">
                                        <div class="event-card-two__time">
                                            <span class="event-card-two__time__icon fa fa-clock"></span>{{date('j M Y',strtotime($event->start_date))}} @ {{$event->start_time}}
                                        </div><!-- /.event-card-four__time -->
                                    </a><!-- /.event-card-four__image -->
                                    <div class="event-card-two__content">
                                        <h4 class="event-card-two__title"><a href="{{route('event',[$event->id,$event->title])}}">{{$event->title}}</a></h4><!-- /.event-card-four__title -->
                                        <div class="event-card-two__text">{{$event->desc}}</div><!-- /.event-card-two__text -->
                                        <div class="event-card-two__meta">
                                            <h5 class="event-card-two__meta__title">Venue</h5>
                                            {{$event->address}}, {{$event->venue}}
                                        </div><!-- /.event-card-four__meta -->
                                    </div><!-- /.event-card-four__content -->
                                </div><!-- /.event-card-two -->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- /.container -->
        </section><!-- /.events-one section-space -->


        <div class="blog-one section-space">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="sec-title">

                            <h6 class="sec-title__tagline @@extraClassName">Our latest news</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Latest News & Articles From <span class="sec-title__title__inner">GCO</span></h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div><!-- /.col-xl-6 col-lg-7 col-md-9 -->
                </div><!-- /.row -->
                <div class="blog-one__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
            "items": 3,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":true,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
            "responsive":{
                "0":{
                    "items": 1,
                    "margin": 20
                },
                "575":{
                    "items": 1,
                    "margin": 30
                },
                "768":{
                    "items": 2,
                    "margin": 30
                },
                "992":{
                    "items": 3,
                    "margin": 30
                },
                "1200":{
                    "items": 3,
                    "margin": 30
                }
            }
            }'>
                    @foreach($posts as $post)
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <a href="{{route('post',[$post->id,$post->title])}}" class="blog-card__image">
                                    <img src="/{{$post->image}}" alt="Our donation is hope for poor childrens in africa">
                                    <div class="blog-card__date"><span>{{date('d',strtotime($post->created_at))}}</span>
                                        {{date('M',strtotime($post->created_at))}}</div><!-- /.blog-card__date -->
                                </a><!-- /.blog-card__image -->
                                <div class="blog-card__content" style="background-image: url('/assets/images/blog/blog-bg-1-1.png');">
                                    <h3 class="blog-card__title"><a href="{{route('post',[$post->id,$post->title])}}">{{$post->title}}</a></h3><!-- /.blog-card__title -->
                                    <a href="{{route('post',[$post->id,$post->title])}}" class="blog-card__link">
                                        <span class="blog-card__link__front"><span class="icon-duble-arrow"></span></span>
                                        <span class="blog-card__link__back"><span class="icon-duble-arrow"></span>Read More</span>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                            </div><!-- /.blog-card -->
                        </div>
                    @endforeach

                </div><!-- /.blog-one__carousel -->
            </div><!-- /.container -->
        </div>














         <div class="support-one section-space">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline sec-title__tagline--center">Worldwide non profit charity</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Give a Helping Hand a For Needy <span class="sec-title__title__inner">People</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="support-card">
                            <a href="{{route('donate')}}" class="support-card__image">
                                <img src="/assets/images/support/support-1-1.jpg" alt="Foods Support">
                            </a><!-- /.support-card__image -->
                            <a href="{{route('donate')}}" class="support-card__content">
                                <div class="support-card__content__inner">
                                    <h3 class="support-card__title">Empowerment</h3><!-- /.support-card__title -->
                                    <div class="support-card__collected"><span>Collected $25K</span></div><!-- /.support-card__collected -->
                                </div><!-- /.support-card__content__inner -->
                            </a><!-- /.support-card__content -->
                        </div><!-- /.support-card -->
                    </div><!-- /.col-xl-6 col-lg-6 -->
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="support-card">
                            <a href="{{route('donate')}}" class="support-card__image">
                                <img src="/assets/images/support/support-1-2.jpg" alt="Sports Support">
                            </a><!-- /.support-card__image -->
                            <a href="{{route('donate')}}" class="support-card__content">
                                <div class="support-card__content__inner">
                                    <h3 class="support-card__title">Equipments Support</h3><!-- /.support-card__title -->
                                    <div class="support-card__collected"><span>Collected $2.5M</span></div><!-- /.support-card__collected -->
                                </div><!-- /.support-card__content__inner -->
                            </a><!-- /.support-card__content -->
                        </div><!-- /.support-card -->
                    </div><!-- /.col-xl-6 col-lg-6 -->
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="support-card support-card--direction">
                            <a href="{{route('donate')}}" class="support-card__content">
                                <div class="support-card__content__inner">
                                    <h3 class="support-card__title">Scholarships</h3><!-- /.support-card__title -->
                                    <div class="support-card__collected"><span>Collected $2.5M</span></div><!-- /.support-card__collected -->
                                </div><!-- /.support-card__content__inner -->
                            </a><!-- /.support-card__content -->
                            <a href="{{route('donate')}}" class="support-card__image">
                                <img src="/assets/images/support/support-1-3.jpg" alt="Medical Support">
                            </a><!-- /.support-card__image -->
                        </div><!-- /.support-card -->
                    </div><!-- /.col-xl-6 col-lg-6 -->
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="support-card support-card--direction">
                            <a href="{{route('donate')}}" class="support-card__content">
                                <div class="support-card__content__inner">
                                    <h3 class="support-card__title">Education Support</h3><!-- /.support-card__title -->
                                    <div class="support-card__collected"><span>Collected $2.5M</span></div><!-- /.support-card__collected -->
                                </div><!-- /.support-card__content__inner -->
                            </a><!-- /.support-card__content -->
                            <a href="{{route('donate')}}" class="support-card__image">
                                <img src="/assets/images/support/support-1-4.jpg" alt="Education Support">
                            </a><!-- /.support-card__image -->
                        </div><!-- /.support-card -->
                    </div><!-- /.col-xl-6 col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="support-one__shape">
                <img src="/assets/images/shapes/support-shape-hand-1-1.png" alt="shape-hand" class="support-one__shape__one">
                <img src="/assets/images/shapes/support-shape-hand-1-2.png" alt="shape-hand" class="support-one__shape__two">
            </div><!-- /.support-one__shape -->
        </div><!-- /.support-one section-space -->
