@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProjects = DB::table('news_categories')->where('com', 'du-an')->get();
    
?>

<main class="b1 index">
	<section class="slider-area">
		<div id="slider">
			@foreach($sliders as $slider)
			<a href="#" title=""><img class="slider-img" src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="slider-img" title="" /></a>
			@endforeach
			<!-- <a href="#" title=""><img class="slider-img" src="images/breadslider2.jpg" alt="slider-img" title="#caption2" /></a> -->
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
			<h2 class="s30 text-center pt-2 pb-4 pj-tit">{{ $cate->name }}</h2>

			<div class="pt-4 inter-child-contain">
				<div class="row inter-child-row result_product">
					
					@foreach($projects as $item)
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="{{ url('du-an/'.$item->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="">{{$item->name}}</a></h3>
							</figcaption>
						</div>
					</div>
					@endforeach
				</div>

				<div class="text-center inter-child-link">
					<!-- <a href="javascript:;" class="regis-btn btn btn-loadmore-product" title="">Xem thêm</a> -->
					{!! $projects->links() !!}
				</div>
			</div>
		</div>
	</section>


</main>
@endsection