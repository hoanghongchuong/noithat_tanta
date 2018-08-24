@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 9)->first();
?>
<style type="text/css">
	/* slider */
	.slider-area {
		position: relative;
		z-index: 1;
	}
	.nivo-caption {
		background: transparent;
		padding: 0;
	}
	.break-wrap {
		background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.6)), url('./images/break.jpg');
		background-size: cover;
		/* opacity: .4; */
	}
	.regis {
		background: url(./images/38.jpg) no-repeat top center;
		background-size: cover;
	}
</style>
<main class="b1 index">
	<section class="bread-wrap" style="background: url({{ asset('upload/banner/'.@$banner->image)  }})>
		<div class="container">
			<h1 class="t3 text-center s30 bread-tit">Videos</h1>
			<ul class="s15 list-unstyled justify-content-center bread op7 text-center">
				<li><a href="{{url('')}}" title="">Trang chủ</a></li>
				<li>Video</li>
			</ul>
		</div>
	</section>

	<section class="video vpage">
		<div class="container">
			<ul class="s15 text-uppercase justify-content-md-center nav nav-pills video-tabs" role="tablist">
				@foreach($cateVideos as $catex)
			  	<li class="nav-item text-center">
			    	<a class="nav-link @if($cate->id == $catex->id) active @endif" href="{{url('video/'.$catex->alias)}}">
						<img src="{{asset('upload/news/'.$catex->photo)}}" title="" alt="">
			    		<span>{{$catex->name}}</span>
			    	</a>
			  	</li>
			  	@endforeach
			  	
			</ul>
		</div>
		<div class="b2">
			<div class="container">
				<div class="tab-content v-tabs-content">
			  		<div class="tab-pane fade show active" id="noithat">
						<div class="row video-row">
							@foreach($videos as $video)
							<div class="col-lg-4 col-md-6 col-sm-6">
								<article class="video-item">
									<figure class="text-center video-img">
										<a href="{{ url('video/'.$video->alias.'.html') }}" title="{{$video->name}}"><img src="https://i.ytimg.com/vi/{!! $video->mota !!}/hqdefault.jpg" alt="" title=""></a>
									</figure>

									<figcaption class="video-content">
										<h3 class="medium py-2"><a href="{{ url('video/'.$video->alias.'.html') }}" title="">{{$video->name}}</a></h3>
										
									</figcaption>
								</article>
							</div>
							@endforeach
							
						</div>

						<div class="text-center pb-3">
							<!-- <a href="inter-child.html" class="btn regis-btn text-uppercase">Xem thêm</a> -->
							{!! $videos->links() !!}
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</section>

	<section class="b2 pt-4 break">
		<div class="container">
			<div class="break-wrap" style="background: url({{ asset('public/images/break.jpg') }})">
				<div class="row">
					<div class="col-lg-7">
						<div class="d-flex align-items-center justify-content-center">
							<img class="wow tada" data-wow-iteration="infinite" src="{{ asset('public/images/phone.png')}}" title="" alt="">

							<div class="text-white break-info">
								<h2 class="s24 op7 pb-2 bold text-uppercase">Đăng ký nhận tư vấn thiết kế nội thất</h2>
								<h3 class="op7">Chúng tôi cam kết tạo ra không gian hoàn hảo cho tổ ấm của bạn.</h3>
							</div>
						</div>
					</div>

					<div class="col-lg-5">
						<div class="d-flex align-items-center justify-content-center py-3 break-r">
							<a href="tel:{{$setting->phone}}" title="" title="" class="btn text-uppercase phone-btn">Liên hệ ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>


@endsection