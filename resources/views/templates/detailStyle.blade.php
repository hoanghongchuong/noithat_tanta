@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 10)->first();
?>
<main class="b1 index">
	<section class="breadetail-wrap">
		<div class="container">
			<ul class="list-unstyled pt-2 pb-3 d-flex align-items-center justify-content-md-center text-uppercase text-center dstyle-list">
				@foreach($categories as $category)
				<li class="@if($category->id == $data->cate_id) active  @endif"><a href="{{url('phong-cach-thiet-ke/'.$category->alias.'-'.$category->id)}}" title="">{{$category->name}}</a></li>
				@endforeach
			</ul>
			<div class="text-center">
				<img src="{{asset('upload/news/'.$data->background)}}" title="" alt="" class="w-100">
			</div>
			<h1 class="text-center s30 bread-tit">{{$data->name}}</h1>
			<ul class="s15 list-unstyled justify-content-center bread op7 text-center">
				<li><a href="{{url('')}}" title="">Trang chủ</a></li>
				<li><a href="#" title="">Phong cách thiết kế</a></li>
				<li><a href="{{url('phong-cach-thiet-ke/'.$cate_data->alias.'-'.$cate_data->id)}}" title="">{{$cate_data->name}}</a></li>
				<li>{{$data->name}}</li>
			</ul>
		</div>
	</section>
	<section class="b2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="dstyle-detail">
						{!! $data->content !!}
					</div>
				</div>
			</div>
			
			<div class="dstyle-detail-re">
				<h2 class="s24 text-center tit">Bài viết liên quan</h2>

				<div class="dstyle-detail-slider">
					@foreach($post as $item)
					<article class="video-item">
						<figure class="text-center video-img">
							<a href="{{ url('phong-cach-thiet-ke/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{ asset('upload/news/'.@$item->photo) }}" alt="{{$item->name}}" title="{{$item->name}}"></a>
						</figure>
						<figcaption class="video-content">
							<h3 class="medium py-2"><a href="{{ url('phong-cach-thiet-ke/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>

							<p class="s15 t4">{!! $item->mota !!}</p>
						</figcaption>
					</article>
					@endforeach
				</div>
			</div>
		</div>
	</section>
</main>
@endsection