@extends('layouts.gco')


@section('content')
    <hr>
    <!-- Login Start -->
    <section class="login-page section-space">
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="login-page__image">
                        <img src="/img/w/w (1).png" alt="login">
                    </div><!-- /.login-page__image -->
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="login-page__form">
                        <span class="login-page__form__top-title">Log in</span>
                        <h2 class="login-page__form__title">welcome to our community</h2>
                        <form class="login-page__form__box form-one" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-page__form__input-box form-one__control">
                                <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email address" class="form-one__control__input">
                                @if ($errors->has('email'))
                                    <p class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
                            </div>
                            <div class="login-page__form__input-box form-one__control">
                                <input required type="password" id="password" name="password" placeholder="Password" class="form-one__control__input">
                                @if ($errors->has('password'))
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </p>
                                @endif
                            </div>
                            <div class="login-page__form__input-box login-page__form__checkbox-forgot">
                                <div class="login-page__form__checkbox">
                                    <input type="checkbox" id="save_login" name="remember">
                                    <label for="save_login">save log in</label>
                                </div>
                                <a href="{{ route('password.request') }}" class="login-page__form__forgot">forgot your password?</a>
                            </div>
                            <div class="login-page__form__input-box">
                                <button type="submit" class="cleenhearts-btn">
                                        <span class="cleenhearts-btn__icon-box">
                                            <span class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></span>
                                        </span>
                                    <span class="cleenhearts-btn__text">log in</span>
                                </button>
                            </div>
                            {{--                                <div class="login-page__form__or">--}}
                            {{--                                    <hr class="login-page__form__or-line">--}}
                            {{--                                    <span class="login-page__form__or-text">Or</span>--}}
                            {{--                                    <hr class="login-page__form__or-line">--}}
                            {{--                                </div>--}}
                            {{--                                <div class="login-page__form__signin">--}}
                            {{--                                    <button type="button" class="login-page__form__signin-btn">--}}
                            {{--                                        <span>sign in with facebook</span>--}}
                            {{--                                        <img src="/assets/images/resources/login-facebook.png" alt="">--}}
                            {{--                                    </button>--}}
                            {{--                                    <button type="button" class="login-page__form__signin-btn">--}}
                            {{--                                        <span>sign in with google</span>--}}
                            {{--                                        <img src="/assets/images/resources/login-google.png" alt="">--}}
                            {{--                                    </button>--}}
                            {{--                                    <p class="login-page__form__register-text">don’t have an account? <a href="login.html">Register</a></p>--}}
                            {{--                                </div>--}}
                        </form>
                    </div><!-- login-form -->
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->
@endsection
