<!-- menu dropdown start-->
@include('includes.mobile_menu')
<!-- menu dropdown end-->
<!-- header start-->

<header class="header header-common">
    <div class="header__top">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4"><a class="logo" href="/"><img class="logo__img" src="/logo.jpg" alt="logo"/></a></div>
            <div class="col-6 col-lg-8 d-flex justify-content-end">
                <!-- main menu start-->
                <ul class="main-menu">
                    <li class="main-menu__item main-menu__item--has-child">
                        <a class="main-menu__link" href="{{route('destinations')}}"><span>Destinations</span></a>
                        <ul class="main-menu__sub-list sub-list--style-1">
                            @foreach(\App\Models\WEB\Destination::get() as $destination)
                                <li><a href="{{route('destination',[$destination->id,$destination->title])}}"><span>{{$destination->title}}</span></a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="main-menu__item main-menu__item--has-child">
                        <a class="main-menu__link" href="javascript:void(0);"><span>Safaris</span></a>
                        <ul class="main-menu__sub-list sub-list--style-2">
                            @foreach(\App\Models\WEB\Category::get() as $gategory)
                                <li><a href="{{route('safaris',[$gategory->id,$gategory->title])}}"><span>{{$gategory->title}}</span></a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="main-menu__item main-menu__item--has-child">
                        <a class="main-menu__link" href="{{route('about')}}"><span>About</span></a>
                        <ul class="main-menu__sub-list sub-list--style-2">
                            <li><a href="{{route('about')}}"><span>About Us</span></a></li>
                            <li><a href="{{route('safety')}}"><span>Safety</span></a></li>
                        </ul>
                    </li>



{{--                    <li class="main-menu__item"><a class="main-menu__link" href="{{route('events')}}"><span>Shop</span></a></li>--}}
                    <li class="main-menu__item"><a class="main-menu__link" href="{{route('events')}}"><span>Events</span></a></li>

                    <li class="main-menu__item"><a class="main-menu__link" href="{{route('gallery')}}"><span>Gallery</span></a></li>

                    <li class="main-menu__item"><a class="main-menu__link" href="{{route('contacts')}}"><span>Contacts</span></a></li>

                </ul>
                <!-- main menu end--><a class="header__button" href="{{route('contacts')}}">Book Now</a>
                <!-- menu-trigger start-->
                <div class="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!-- menu-trigger end-->
            </div>
        </div>
    </div>
    <div class="header__lower">
        <div class="row">
            <div class="col-auto d-flex align-items-center">
                <ul class="lower-menu">
                    <li class="lower-menu__item"><a class="lower-menu__link" href="{{route('events')}}">Events</a></li>
                    <li class="lower-menu__item"><a class="lower-menu__link" href="#">Donate</a></li>
                    <li class="lower-menu__item"><a class="lower-menu__link" href="#">Foundation</a></li>
                </ul>
                <!-- lang select start-->
                <ul class="lang-select">
                    <li class="lang-select__item lang-select__item--active"><span>English</span>
                        <ul class="lang-select__sub-list">
                            <li><a href="#">French</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Deutsch</a></li>
                            <li><a href="#">Swahili</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- lang select end-->
                <ul class="header__socials">
                    <li><a class="item--facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a class="item--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a class="item--youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a class="item--instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
