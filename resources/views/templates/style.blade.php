@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 10)->first();
?>
<main class="b1 index">
	<section class="bread-wrap" style="background: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.3)), url({{ asset('upload/banner/'.@$banner->image)  }})">

		<div class="container">
			<h1 class="t3 text-center s30 bread-tit">Thiết kế - thi công nội thất</h1>
			<ul class="s15 list-unstyled justify-content-center bread op7 text-center">
				<li><a href="{{url('')}}" title="">Trang chủ</a></li>
				<li><a href="#" title="">Phong cách thiết kế</a></li>
				<li>{{$cate->name}}</li>
			</ul>
		</div>
	</section>

	<div class="container">
		<ul class="list-unstyled py-2 d-flex align-items-center justify-content-md-center text-uppercase text-center dstyle-list">
			@if(count($cateChilds) > 0)
				@foreach($cateChilds as $cateStyle)
				<li><a href="{{url('phong-cach-thiet-ke/'.$cateStyle->alias.'-'.$cateStyle->id)}}" title="{{$cateStyle->name}}">{{$cateStyle->name}}</a></li>
				@endforeach
			@else
				<?php $cateSam = DB::table('news_categories')->where('status',1)->where('com','phongcach')->where('parent_id', $cate->parent_id)->get(); ?>
				@foreach($cateSam as $sam)
				<li class=" @if($cate->id == $sam->id) active @endif"><a href="{{url('phong-cach-thiet-ke/'.$sam->alias.'-'.$sam->id)}}" title="{{$sam->name}}">{{$sam->name}}</a></li>
				@endforeach
			@endif
		</ul>
	</div>

	<section class="b2 dstyle">
		<div class="container">
			<div class="dstyle-wrap">
				<div class="row dstyle-row">
					@foreach($styles as $item)
					<div class="col-lg-4 col-md-6">
						<article class="dstyle-item">
							<figure class="text-center dstyle-img">
								<a href="{{ url('phong-cach-thiet-ke/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
							</figure>
							<figcaption class="dstyle-info">
								<h2 class="medium py-2 s18"><a href="{{ url('phong-cach-thiet-ke/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h2>

								<div class="op8">
									<p>{!! $item->mota !!}</p>
								</div>
							</figcaption>
						</article>
					</div>
					@endforeach
				</div>
				<div class="paginations" style="text-align: center; margin-top: 30px;">
					{!! $styles->links() !!}
				</div>
				<!-- <ul class="pagi text-center">
					<li><a href="#" title="">1</a></li>
					<li><a href="#" title="">2</a></li>
					<li><a href="#" title="">3</a></li>
					<li><a href="#" title="">4</a></li>
				</ul> -->
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
                            <a href="tel:{{ $setting->phone }}" title="" title="" class="btn text-uppercase phone-btn">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection