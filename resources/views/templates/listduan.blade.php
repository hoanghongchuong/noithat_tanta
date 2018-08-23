@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProjects = DB::table('news_categories')->where('com', 'du-an')->get();
    $banner = DB::table('banner_content')->where('position', 4)->first();
?>
<main class="index">
	<section class="about">
		<div class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }});">
			<div class="container">
				<div class="pl-95">
					<h1 class="s36 light text-white text-uppercase bread-tit">Dự án</h1>
					<ul class="s12 list-unstyled text-uppercase bread">
						<li><a href="{{url('')}}" title="">Trang chủ</a></li>
						<li>Dự án</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<ul class="s14 text-uppercase justify-content-center nav nav-pills da-tabs" role="tablist">
			  @foreach($cateProjects as $k=>$cateProject)	
			  <li class="nav-item">
			    <a class="nav-link @if($cateProject->id == $cate->id) active @endif" data-toggle="pill" href="#kt{{ $k }}">{{$cateProject->name}}</a>
			  </li>
			  @endforeach
			  <!-- <li class="nav-item">
			    <a class="nav-link" data-toggle="pill" href="#nt">Nội thất đẹp</a>
			  </li> -->
			</ul>

			<div class="tab-content da-tabs-content">
			@foreach($cateProjects as $k=>$cateProject)		
			  <div class="tab-pane fade @if($cateProject->id == $cate->id) show active @endif" id="kt{{$k}}">
			  	<?php $projectx = $projects = DB::table('news')->where('status', 1)->where('com', 'du-an')->where('cate_id', $cateProject->id)->orderBy('stt', 'asc')->get(); ?>
				<div class="row da-tabs-row">
					@foreach($projectx as $item)
					<div class="col-sm-6">
						<article class="da-item">
							<figure class="text-center da-item-img ">
								<a  href="{{ url('du-an/'.$item->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
							</figure>
							<figcaption class="da-item-info">
								<h2 class="s14 text-lg-left text-center text-uppercase py-3 da-item-tit"><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h2>
							</figcaption>
						</article>
					</div>
					@endforeach
				</div>
				<!-- <div class="text-center">
					<a href="#" class="btn text-uppercase all-btn">Xem thêm</a>
				</div> -->
			  </div>
			@endforeach
			  <!-- <div class="tab-pane fade" id="nt">
				<div class="row da-tabs-row">
					<div class="col-sm-6">
						<article class="da-item">
							<figure class="text-center da-item-img ">
								<a  href="da-detail.html" title=""><img src="images/p7.jpg" title="" alt=""></a>
							</figure>
							<figcaption class="da-item-info">
								<h2 class="s14 text-lg-left text-center text-uppercase py-3 da-item-tit"><a href="da-detail.html" title="">Nội thất biệt thự</a></h2>
							</figcaption>
						</article>
					</div>	
				</div>
				<div class="text-center">
					<a href="#" class="btn text-uppercase all-btn">Xem thêm</a>
				</div>
			  </div> -->
			</div>
		</div>
	</section>
</main>
@endsection