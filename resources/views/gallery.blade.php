@extends('layouts.safari')

@section('template_title','Gallery')

@section('content')
    <!-- promo start-->
    <section class="promo-primary">
        <picture>
            <source srcset="/images/gallery.webp" media="(min-width: 992px)"/><img class="img--bg" src="/images/gallery.webp" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Wild World</span>
                            <h1 class="promo-primary__title"><span>Gallery of </span> <span>{{ config('app.name', 'POS') }}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo end-->
    <!-- gallery start-->
    <section class="section gallery">
        <div class="container">
            <div class="row bottom-50 align-items-end">
                <div class="col-12">
                    <!-- filter panel start-->
                        <h5>Our Gallery</h5>

{{--                    <ul class="filter-panel">--}}
{{--                        <li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All</span></li>--}}
{{--                        <li class="filter-panel__item" data-filter=".category_2"><span>Bulls</span></li>--}}
{{--                        <li class="filter-panel__item" data-filter=".category_3"><span>Giraffes</span></li>--}}
{{--                        <li class="filter-panel__item" data-filter=".category_4"><span>Mammals</span></li>--}}
{{--                        <li class="filter-panel__item" data-filter=".category_5"><span>Birds</span></li>--}}
{{--                        <li class="filter-panel__item" data-filter=".category_6"><span>Fishes</span></li>--}}
{{--                    </ul>--}}
                    <!-- filter panel end-->
                </div>
            </div>
        </div>
        <div class="row no-gutters gallery-masonry">

            @foreach($gallery as $item)
                <div class="category_1 col-sm-6 col-md-3 gallery-masonry__item">
                    <a class="gallery-masonry__img gallery-masonry__item--height-{{$item->portrait ? 3 : 1}}" href="/{{$item->image}}" data-fancybox="gallery">
                        <img class="img--bg" src="/{{$item->image}}" alt="img"/>
                        <div class="gallery-masonry__description"><span> </span><span>{{$item->title}}</span></div>
                    </a>
                </div>
            @endforeach

        </div>
        <div class="container top-70">
            <div class="row">
                <div class="col-12 text-center"><a class="button button--primary" href="#">More Animals</a></div>
            </div>
        </div>
    </section>
    <!-- gallery end-->
@endsection

@section('page_js')
@endsection
