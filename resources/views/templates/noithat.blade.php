@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 4)->first();
?>
<style type="text/css">
	/* slider */
	.bread-wrap {
		background-image: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.8)), url('./images/interbg.jpg');
		padding: 190px 0px 50px;
	}
	@media (max-width: 767px) {
		.bread-wrap {
			padding-top: 30px;
		}
	}
</style>
<main class="b1 index">
	<section class="bread-wrap" style="background:linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.8)),  url({{ asset('upload/banner/'.@$banner->image)  }})">
		<div class="container">
			<h1 class="t3 text-center s30 bread-tit wow fadeInDown" data-wow-delay=".2s">Thiết kế - thi công nội thất</h1>
			<ul class="s15 list-unstyled justify-content-center bread op7 text-center wow fadeInUp" data-wow-delay=".5s" data-wow-offset="130">
				<li><a href="{{url('')}}" title="">Trang chủ</a></li>
				<li>Thiết kế - thi công nội thất</li>
			</ul>

			<div class="t11 inter-sum wow fadeInUp" data-wow-delay=".9s" data-wow-offset="130">
				<div class="inter-sum-content">
					<p class="text-center">{!! $mota->content !!}</p>
				</div>
			</div>
		</div>
	</section>

	<section class="inter">
		<div class="container-flush">
			<div class="inter-slider">
				@foreach($categories as $category)
				<article class="inter-item">
					<figure class="inter-img text-center">
						<a href="{{ url('thiet-ke-thi-cong-noi-that/'.$category->alias) }}" title="{{$category->name}}"><img src="{{url('upload/news/'.$category->background)}}" alt="{{$category->name}}"></a>
					</figure>
					<figcaption class="inter-info">
						<h2 class="medium s20 text-uppercase text-center pb-4 inter-info-tit"><a href="{{ url('thiet-ke-thi-cong-noi-that/'.$category->alias) }}" title="{{$category->name}}">{{$category->name}}</a></h2>
						<div class="text-center">
							<a href="{{ url('thiet-ke-thi-cong-noi-that/'.$category->alias) }}" class="btn op7 regis-btn text-uppercase">Xem thêm</a>
						</div>
					</figcaption>
				</article>
				@endforeach
			</div>
		</div>
	</section>

	<section class="b2 qt">
		<div class="container">
			<h2 class="s30 text-center qt-btit wow fadeInUp" data-wow-offset="250">Quy trình thiết kế - thi công nội thất</h2>
			<div class="row no-gutters justify-content-center qt-row">
				@foreach($steps as $k=>$item)
				<div class="col-sm-6">
					<div class="qt-item">
						<h3 class="bold s18 text-uppercase qt-tit wow @if($k%2 == 0 ) fadeInLeft @else fadeInRight @endif" data-wow-offset="250"><span>{{$item->name}}</span></h3>

						<div class="qt-content wow fadeInLeft" data-wow-offset="250">
							{!! $item->content !!}
						</div>

						<div class="text-center qt-img wow flipInX" data-wow-offset="250" style="background: url({{ asset('upload/hinhanh/'.$item->photo2) }}) no-repeat center center; background-size: cover;">
							<img src="{{ asset('upload/hinhanh/'.$item->photo)}}" alt="" title="">
						</div>
					</div>
				</div>
				@endforeach
								
			</div>
		</div>
	</section>

	<section class="project">
		<div class="container-flush">
			<h2 class="s24 t3 op8 text-center pt-2 pb-4 pj-tit">Dự án tiêu biểu</h2>

			<div class="pt-4 project-slider">
				@foreach($hotProject as $hot)
				<div class="pj-item">
					<figure class="text-center pj-item-img">
						<a href="{{ url('thiet-ke-thi-cong-noi-that/'.$hot->alias.'.html') }}" title="{{$hot->name}}"><img src="{{asset('upload/news/'.$hot->photo)}}" title="{{$hot->name}}" alt="{{$hot->name}}"></a>
					</figure>
					
					<figcaption class="pj-item-info">
						<h3 class="text-center"><a href="{{ url('thiet-ke-thi-cong-noi-that/'.$hot->alias.'.html') }}" title="{{$hot->name}}">{{$hot->name}}</a></h3>
					</figcaption>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>


</main>
@endsection