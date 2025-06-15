@extends('layouts.safari')


@section('content')

    <!-- section start-->
				<section class="error section no-padding-top no-padding-bottom"><img class="img--bg" src="/img/404.jpg" alt="img"/>
					<div class="align-container">
						<div class="align-container__item">
							<div class="container">
								<div class="row">
									<div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7 text-center">
										<div class="error__title">@yield('code')</div>
										<div class="error__subtitle">@yield('title')</div>
										<div class="error__text">@yield('message')</div><a class="button button--filled" href="/">Home</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->

@endsection

@section('page_js')
@endsection
