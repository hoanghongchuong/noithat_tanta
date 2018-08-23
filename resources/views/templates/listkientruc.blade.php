@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 8)->first();
?>
<main class="index">
	<section class="about">
		<div class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }});">
			<div class="container">
				<div class="pl-95">
					<h1 class="s36 light text-white text-uppercase bread-tit">Kiến trúc</h1>
					<ul class="s12 list-unstyled text-uppercase bread">
						<li><a href="{{url('')}}" title="">Trang chủ</a></li>
						<li>Kiến trúc</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<ul class="s14 text-uppercase justify-content-xl-center nav nav-pills da-tabs" role="tablist">
			  @foreach($categories as $category)
			  <li class="nav-item">
			    <a class="nav-link @if($category->id == $cate->id) active @endif" href="{{url('kien-truc/'.$category->alias)}}">{{$category->name}}</a>
			  </li>
			  @endforeach
			</ul>

			<div class="tab-content kt-tabs-content">
				<div class="tab-pane fade show active" id="bt">
					<div class="row kt-tabs-row">
						@foreach($projects as $item)
						<div class="col-sm-6">
							<article class="kt-item">
								<figure class="text-center da-item-img ">
									<a href="{{ url('kien-truc/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
								</figure>
								<figcaption class="kt-item-info">
									<h2 class="text-uppercase py-3 kt-item-tit"><a href="{{ url('kien-truc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h2>
									<div class="t1 kt-content">
										{!! $item->mota !!}
									</div>

									<h3 class="text-lg-left text-center italic t1 kt-link"><a href="{{ url('kien-truc/'.$item->alias.'.html') }}" title="">Xem chi tiết</a></h3>
								</figcaption>
							</article>
						</div>
						@endforeach
						
					</div>
					<div class="text-center">
						{!! $projects->links() !!}
					</div>
				</div>
			  
			  
			  
			</div>
		</div>
	</section>
</main>


@endsection