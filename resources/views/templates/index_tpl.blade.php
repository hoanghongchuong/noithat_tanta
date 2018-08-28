@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
$categories_noithat = DB::table('news_categories')->where('status',1)->where('com','noi-that')->orderBy('stt','asc')->get();
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
		background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.6)), url('./public/images/break.jpg');
		background-size: cover;
		/* opacity: .4; */
	}
	.regis {
		background: url(./public/images/38.jpg) no-repeat top center;
		background-size: cover;
	}
</style>
<main class="index">
    <section class="slider-area">
        <div id="slider">
            @foreach($slider as $k=>$s)
            <a href="#" title=""><img alt="" class="slider-img" src="{{asset('upload/hinhanh/'.$s->photo)}}" alt="slider-img" title="#caption{{$k}}" /></a>
            @endforeach
            
        </div>
    </section>
    <!-- slider-area-end --> 
    <section class="about">
		<div class="container">
			<div class="row no-gutters about-row">
				<div class="col-lg-6 d-flex align-items-center justify-content-center wow fadeInLeft" data-wow-delay="1s" data-wow-offset="80">
					<img src="{{asset('upload/banner/'.$banner->image)}}" title="" alt="">
				</div>
				<div class="col-lg-6 d-flex align-items-center justify-content-center">
					<div class="row">
						@foreach($slogans as $slogan)
						<div class="col-6 d-flex align-items-center">
							<div class="text-center py-4 about-item">
								<img class="about-item-img wow fadeInRight" data-wow-delay=".3s" src="{{asset('upload/hinhanh/'.$slogan->photo)}}" alt="">

								<h2 class="s15 text-center text-uppercase about-tit wow fadeInRight" data-wow-delay=".5s">{{$slogan->name}}</h2>

								<div class="s14 about-sum wow fadeInRight" data-wow-delay=".7s">
									{!! $slogan->content !!}
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="b2 solution">
		<div class="container">
			<h2 class="s24 text-center sol-tit wow fadeInUp" data-wow-delay=".2s">TANNC mang lại giải pháp cho bạn</h2>

			<div class="sol-wrap">
				<div class="row no-gutters">
					<div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
						<div class="sol-l-wrap">
							<a class="w-100 linkyoutube sol-l" data-fancybox data-type="iframe" href="https://www.youtube.com/embed/{{$video_one->code}}" title=""><img class="w-100" src="https://i.ytimg.com/vi/{!! $video_one->code !!}/hqdefault.jpg" alt="" title=""></a>
						</div>
					</div>

					<div class="col-lg-6 d-flex align-items-center">
						<div class="row no-gutters sol-row">
							@foreach($whys as $why)
							<div class="col-6 d-flex align-items-center wow fadeInUp" data-wow-delay=".6s">
								<div class="d-flex align-items-center flex-md-row flex-column sol-item">
									<img src="{{asset('upload/hinhanh/'.$why->photo)}}" title="{{$why->name}}" alt="{{$why->name}}">

									<div class="text-md-left text-center sol-item-r">
										<h3 class="medium s16">{{$why->name}}</h3>
										<h4 class="s14 t2">{{$why->mota}}</h4>
									</div>
								</div>
							</div>
							@endforeach							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="project">
		<div class="container-flush">
			<h2 class="s24 text-center pt-2 pb-4 pj-tit wow fadeInUp">Dự án của chúng tôi</h2>

			<ul class="s16 justify-content-md-center nav nav-pills da-tabs" role="tablist">
			  	@foreach($cateProject as $k=>$cate_item)
			  	<li class="nav-item">
			    	<a class="nav-link @if($k==0)active @endif" data-toggle="pill" href="#noithat{{$k}}"><span>{{$cate_item->name}}</span></a>
			  	</li>
			  	@endforeach
			</ul>

			<div class="tab-content da-tabs-content">
				@foreach($cateProject as $k=>$cate_item)
				<?php 
					$ids=[];
					$ids[] = $cate_item->id;
					$cateChilds = DB::table('news_categories')->where('parent_id', $cate_item->id)->get();
					// dd($cateChilds);
					foreach($cateChilds as $child)
					{
						$ids[] = $child->id;
					}
					
					$data = DB::table('news')->where('status', 1)->where('com', 'du-an')->whereIn('cate_id', $ids)->orderBy('stt', 'asc')->get();
				?>
			  	<div class="tab-pane fade @if($k==0) show active @endif" id="noithat{{$k}}">
					<div class="project-slider">
					@foreach($data as $item)
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}"></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
							</figcaption>
						</div>
					@endforeach
						
					</div>
			  	</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="b2 pt-4 break">
		<div class="container">
			<div class="break-wrap">
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

	<section class="b2 video">
		<div class="container">
			<h2 class="s24 text-center video-tit wow fadeInUp" data-wow-offset="80">Video dự án</h2>

			<div class="video-slider">
				@foreach($videos as $video)
				<article class="video-item">
					<figure class="text-center video-img">
						<a href="{{ url('video/'.$video->alias.'.html') }}" title=""><img src="https://i.ytimg.com/vi/{!! $video->code !!}/hqdefault.jpg" alt="{{$video->name}}" title="{{$video->name}}"></a>
					</figure>

					<figcaption class="video-content">
						<h3 class="medium py-2"><a href="{{ url('video/'.$video->alias.'.html') }}" title="{{$video->name}}">{{$video->name}}</a></h3>

						<p class="s15 t4">{{$video->mota}}</p>
					</figcaption>
				</article>
				@endforeach
				
			</div>
		</div>
	</section>

	<section class="b2 blog">
		<div class="container">
			<h2 class="s24 text-center blog-tit wow fadeInUp" data-wow-offset="80">Tin tức nổi bật</h2>

			<div class="blog-slider">
				@foreach($hotNews as $news)
				<article class="blog-item">
					<figure class="text-center blog-img">
						<a href="{{ url('tin-tuc/'.$news->alias.'.html') }}" title=""><img src="{{ asset('upload/news/'.$news->photo) }}" title="{{$news->name}}" alt="{{$news->name}}"></a>
					</figure>

					<figcaption class="blog-content">
						<h3 class="medium pt-3 pb-2"><a href="{{ url('tin-tuc/'.$news->alias.'.html') }}" title="{{$news->name}}">{{$news->name}}</a></h3>
						<h4 class="s15 t5 bdetail-time">{{date('d/m/Y', strtotime($news->created_at))}}</h4>
						<div class="s15 blog-content-wrap">
							<p>{!! $news->mota !!}</p>
						</div>
					</figcaption>
				</article>
				@endforeach
				
			</div>
		</div>
	</section>

	<section class="regis" id="regis">
		<div class="container">
			<h2 class="s24 t3 op8 text-center regis-tit wow fadeInUp" data-wow-offset="80">Đăng ký nhận thông tin tư vấn</h2>

			<form action="{{route('postContact')}}" method="post" class="regis-frm">
				{{csrf_field()}}
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="row">
							<div class="col-lg-4 wow fadeInLeft" data-wow-offset="80">
								<input class="w-100" type="text" name="name" placeholder="Họ tên" required="required">
							</div>
							<div class="col-lg-4 wow fadeInUp" data-wow-offset="80">
								<input class="w-100" type="tel" name="phone" placeholder="Số điện thoại" required="required">
							</div>
							<div class="col-lg-4 wow fadeInRight" data-wow-offset="80">
								<input class="w-100" type="email" name="email" placeholder="Email" required="required">
							</div>
						</div>
						<div class="mt-4 text-center wow swing" data-wow-offset="80">
							<button class="btn text-uppercase regis-btn">Đăng ký</button>
						</div>						
					</div>
				</div>
			</form>
		</div>
	</section>   
</main>
@endsection
