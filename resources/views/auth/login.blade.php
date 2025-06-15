@extends('layouts.safari')


@section('content')

    <!-- promo start-->
    <section class="promo-primary" style="height: 300px">
        <picture>
            <source srcset="/images/tourism-pic.jpg" media="(min-width: 992px)"/><img class="img--bg" src="/images/tourism-pic.jpg" alt="img"/>
        </picture>
        <div class="container">
            <div class="row" >
                <div class="col-auto">
                    <div class="align-container" style="height: 360px;">
                        <div class="align-container__item"><span class="promo-primary__pre-title">{{ config('app.name', Lang::get('titles.app')) }}</span>
                            <h1 class="promo-primary__title" style="color: black"><span>Our</span> <span>Login</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo end-->

    <section class="section">
        <img class="section__bg t50 r0" src="/img/about_bg.png" alt="img"/>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="img-box">
                        <div class="img-box__img"><img class="img--bg" src="/img/gallery_2.jpg" alt="img"/></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary heading--style-2"><span class="heading__pre-title">Login to your account</span>
                        <h2 class="heading__title"><span>Login</span><br/> </h2>
                    </div>

                    <div class="row">
                <div class="col-md-12 ">
                    <form class="form" id="login" method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="row" >
                            <div class="col-md-12">
                                <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input class="form__field" type="email" value="{{old('email')}}" name="email" placeholder="Your Email" required/>
                                @if ($errors->has('email'))
                                    <p class="text-danger" style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <label for="email" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                                <input class="form__field" type="password" name="password" placeholder="* * * * *" required/>
                            </div>

                            <div class="col-12 text-center">
                                <button form="login" type="submit" class="form__submit">Login</button>
{{--                                <input class="form__submit" type="submit" value="Login"/>--}}
                            </div>

                        </div>
                    </form>
                </div>
            </div>

                </div>
            </div>
        </div>
    </section>


    <!-- section start-->
    <section class="section">
        <div class="container">
            <div class="row bottom-50">
                <div class="col-12">
                    <div class="heading heading--primary heading--center">
                        <h2 class="heading__title no-margin-bottom"><span>Get in touch</span> <span>with us</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <form class="form" id="ajax-form" action="javascript:void(0);" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form__field" type="text" name="name" placeholder="Your Name"/>
                            </div>
                            <div class="col-md-6">
                                <input class="form__field" type="email" name="email" placeholder="Your Email"/>
                            </div>
                            <div class="col-md-6">
                                <input class="form__field" type="tel" name="phone" placeholder="Your Phone"/>
                            </div>
                            <div class="col-md-6">
                                <input class="form__field" type="text" name="subject" placeholder="Subject"/>
                            </div>
                            <div class="col-12">
                                <textarea class="form__field form__message" name="message" placeholder="Text"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <input class="form__submit" type="submit" value="Send"/>
                            </div>
                            <div class="col-12">
                                <div class="alert alert--success alert--filled">
                                    <div class="alert__icon">
                                        <svg class="icon">
                                            <use xlink:href="#check"></use>
                                        </svg>
                                    </div>
                                    <p class="alert__text"><strong>Well done!</strong> Your form has been sent</p><span class="alert__close">
													<svg class="icon">
														<use xlink:href="#close"></use>
													</svg></span>
                                </div>
                                <div class="alert alert--error alert--filled">
                                    <div class="alert__icon">
                                        <svg class="icon">
                                            <use xlink:href="#close"></use>
                                        </svg>
                                    </div>
                                    <p class="alert__text"><strong>Oh snap!</strong> Your form has not been sent</p><span class="alert__close">
													<svg class="icon">
														<use xlink:href="#close"></use>
													</svg></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
@endsection
