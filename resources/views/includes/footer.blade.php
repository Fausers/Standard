
<footer class="footer"><img class="footer__bg img--bg" src="/img/background__layout.png" alt="bg"/>
    <div class="container">
        <div class="row bottom-50">
            <div class="col-md-5 col-xl-4 text-center text-md-left"><a class="logo logo--footer" href="/"><img class="logo__img" src="/logo.jpg" alt="logo"/></a>
                <div class="footer__details">
                    <p><strong>Location:</strong> <span>Arusha, Tanzania</span></p>
                    <p><strong>Phone:</strong> <a href="tel:+255 762 026 599">+255 762 026 599</a></p>
                    <p><strong>Email:</strong> <a href="mailto:info@safarishieldadventures.co.tz">info@safarishieldadventures.co.tz</a></p>
                    <p><strong>Open Hours:</strong> <span>24/7</span></p>
                </div>
                <ul class="socials">
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-7 col-xl-5 d-none d-md-block">
                <h6 class="footer__title">Important Information</h6>
                <ul class="footer-menu">
                    <li class="footer-menu__item"><a class="footer-menu__link" href="/">Home</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('destinations')}}">Destinations</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('events')}}">Events</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('contacts')}}">Contacts</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('gallery')}}">Gallery</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('about')}}">About Us</a></li>
                </ul>
                <ul class="footer-submenu">
                    @foreach(\App\Models\WEB\Category::get() as $gategory)
                        <li class="footer-submenu__item"><a class="footer-submenu__link" href="{{route('safaris',[$gategory->id,$gategory->title])}}"><span>{{$gategory->title}}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 d-none d-xl-block">
                <h6 class="footer__title"><span>Gallery</span> <i class="fa fa-instagram" aria-hidden="true"></i>
                </h6>
                <div class="footer-instagram">
                    @foreach(\App\Models\WEB\Gallery::limit(6)->get() as $item)
                        <a class="footer-instagram__item" href="{{route('gallery')}}">
                            <div class="footer-instagram__img"><img class="img--bg" src="/{{$item->thumb}}" alt="ig"/></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-6 text-center text-sm-left">
                <div class="footer-privacy">
                    <a class="footer-privacy__link" >© {{date('Y')}} {{ config('app.name', Lang::get('titles.app')) }}</a>
                    <span class="footer-privacy__divider">|</span>
                    <a class="footer-privacy__link" href="/terms">Term and Conditions</a></div>
            </div>
        </div>
    </div>
</footer>
