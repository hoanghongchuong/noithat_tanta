@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 4)->first();
?>
<main class="b1 index">
	<section class="slider-area">
		<div id="slider">
			@foreach($sliders as $slider)
			<a href="#" title=""><img class="slider-img" src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="slider-img" title="" /></a>
			@endforeach
		</div>
	</section>
	<!-- slider-area-end -->

	<section class="b2 inter-child">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 d-flex align-items-center justify-content-center" style="background: url('{{asset('public/images/aboutbg.png')}}') no-repeat center; background-size: cover;">
					<img src="{{asset('upload/news/'.$cate->photo)}}" title="" alt="" class="clip-circle wow rollIn" data-wow-delay=".3s" data-wow-offset="270">
				</div>
				<div class="col-sm-6">
					<div class="inter-child-wrap">
						<h1 class="s26 tit">{{ $cate->name }}</h1>
						<ul class="s15 list-unstyled bread op7">
							<li><a href="{{url('')}}" title="">Trang chủ</a></li>
							<li>{{ $cate->name }}</li>
						</ul>

						<div class="pt-2 inter-child-content">
							<p>{!! $cate->mota !!}
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="b3 project">
		<div class="container-flush">
			<h2 class="s30 text-center pt-2 pb-4 pj-tit">Dự án {{ $cate->name }}</h2>

			<div class="pt-4 inter-child-contain">
				<div class="row inter-child-row">
					@foreach($data as $item)
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="{{ url('thiet-ke-thi-cong-'.$item->com.'/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}"></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="{{ url('thiet-ke-thi-cong-'.$item->com.'/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
							</figcaption>
						</div>
					</div>
					@endforeach
				</div>

				<div class="text-center inter-child-link">
					<!-- <a href="#" class="regis-btn btn" title="">Xem thêm</a> -->
					{!! $data->links() !!}
				</div>
			</div>
		</div>
	</section>

	
</main>

@endsection