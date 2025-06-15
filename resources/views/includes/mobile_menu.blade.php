<div class="menu-dropdown">
    <div class="menu-dropdown__inner" data-value="start">
        <div class="screen screen--start">


            <div class="screen__item"><a class="screen__link" href="{{route('about')}}">Abouts Us</a></div>

            <div class="screen__item screen--trigger" data-category="destinations"><span>Destinations</span><span>
                    <svg class="icon">
                        <use xlink:href="#chevron"></use>
                    </svg>
                </span>
            </div>

            <div class="screen__item screen--trigger" data-category="safaris"><span>Tours & Safaris</span><span>
                    <svg class="icon">
                        <use xlink:href="#chevron"></use>
                    </svg>
                </span>
            </div>

            <div class="screen__item"><a class="screen__link" href="{{route('gallery')}}">Gallery</a></div>
            <div class="screen__item"><a class="screen__link" href="{{route('events')}}">Events</a></div>
            <div class="screen__item"><a class="screen__link" href="{{route('contacts')}}">Contact Us</a></div>

            <div class="screen__item screen--trigger" data-category="language"><span>Language</span><span>
                    <svg class="icon">
                        <use xlink:href="#chevron"></use>
                    </svg>
                </span>
            </div>

            <ul class="screen__socials">
                <li><a class="item--facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a class="item--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a class="item--youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a class="item--instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>

            <a class="screen__button" href="{{route('contacts')}}">Book Now</a>
        </div>
    </div>

    <div class="menu-dropdown__inner" data-value="destinations">
        <div class="screen screen--sub">
            <div class="screen__heading">
                <h6 class="screen__back">
                    <svg class="icon">
                        <use xlink:href="#chevron-left"></use>
                    </svg> <span>Our Destinations</span>
                </h6>
            </div>
            @foreach(\App\Models\WEB\Destination::get() as $destination)
                <div class="screen__item"><a class="screen__link" href="{{route('destination',[$destination->id,$destination->title])}}"><span>{{$destination->title}}</span></a></div>
            @endforeach
        </div>
    </div>

     <div class="menu-dropdown__inner" data-value="safaris">
        <div class="screen screen--sub">
            <div class="screen__heading">
                <h6 class="screen__back">
                    <svg class="icon">
                        <use xlink:href="#chevron-left"></use>
                    </svg> <span>Tours & Safaris</span>
                </h6>
            </div>
            @foreach(\App\Models\WEB\Category::get() as $gategory)
                <div class="screen__item"><a class="screen__link" href="{{route('safaris',[$gategory->id,$gategory->title])}}"><span>{{$gategory->title}}</span></a></div>
            @endforeach
        </div>
    </div>

    <div class="menu-dropdown__inner" data-value="language">
        <div class="screen screen--sub">
            <div class="screen__heading">
                <h6 class="screen__back">
                    <svg class="icon">
                        <use xlink:href="#chevron-left"></use>
                    </svg> <span>Language</span>
                </h6>
            </div>
            <div class="screen__item"><a class="screen__link" href="javascript:void(0);">English</a></div>
            <div class="screen__item"><a class="screen__link" href="javascript:void(0);">French</a></div>
            <div class="screen__item"><a class="screen__link" href="javascript:void(0);">Spanish</a></div>
            <div class="screen__item"><a class="screen__link" href="javascript:void(0);">Deutsch</a></div>
            <div class="screen__item"><a class="screen__link" href="javascript:void(0);">Russian</a></div>
        </div>
    </div>
</div>
