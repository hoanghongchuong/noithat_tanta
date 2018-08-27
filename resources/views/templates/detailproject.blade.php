@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
	$about = Cache::get('about');   
    
?>
<style type="text/css">
	.nivo-caption {
		background: transparent;
	}
</style>
<main class="b1 index">
	<section class="bread-wrap ic-detail-bread">
		<div class="container">
			<h1 class="t3 text-center s30 bread-tit">{{$project->name}}</h1>
			<ul class="s15 list-unstyled justify-content-center bread op7 text-center">
				<li><a href="{{url('')}}" title="">Trang chủ</a></li>
				<li><a href="inter-child.html" title="">Thiết kế thi công nội thất</a></li>
				<li>{{$project->name}}</li>
			</ul>
		</div>
	</section>

	<section class="mt-78 ic-detail">
		<div class="container">
			<div class="ic-detail-slider">
				<div class="slider slider-for">
					@if(count($albums) > 0)
					@foreach($albums as $album)
					<div class="text-center">
						<img src="{{asset('upload/albumnews/'.$album->photo)}}" alt="">
					</div>
					@endforeach
					@else
					<div class="text-center">
						<img src="{{asset('upload/news/'.$project->photo)}}" alt="">
					</div>
					@endif
					
				</div>
				<div class="slider slider-nav">
					@if(count($albums) > 0)
					@foreach($albums as $album)
					<div class="">
						<img src="{{asset('upload/albumnews/'.$album->photo)}}" alt="">
					</div>
					@endforeach
					@else
					<div class="">
						<img src="{{asset('upload/news/'.$project->photo)}}" alt="">
					</div>
					@endif
				</div>
			</div>
		</div>
	</section>

	<section class="b2 ic-detail-content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="ic-detail-content-wrap detail_project">
						<p>{!! $project->content !!}</p>
					</div>

					
				</div>
			</div>
		</div>
	</section>

	<section class="b3 project">
		<div class="container-flush">
			<h2 class="s30 text-center pt-2 pb-4 pj-tit">Những dự án Nội thất chung cư cao cấp khác</h2>

			<div class="pt-4 inter-child-contain">
				<div class="row inter-child-row">
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/51.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/101.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/102.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>

					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/103.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>


					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/104.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/102.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>

					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/51.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/101.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/102.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>

					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/103.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>


					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/104.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/102.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/103.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>


					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/104.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
							</figcaption>
						</div>
					</div>
					
					<div class="col-lg-105 col-md-4 col-sm-6">
						<div class="pj-item">
							<figure class="text-center pj-item-img">
								<a href="inter-child-detail.html" title=""><img src="images/102.jpg" title="" alt="" title=""></a>
							</figure>
							
							<figcaption class="pj-item-info">
								<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
							</figcaption>
						</div>
					</div>
				</div>

				<div class="text-center inter-child-link">
					<a href="#" class="regis-btn btn" title="">Xem thêm</a>
				</div>
			</div>
		</div>
	</section>

	
</main>
@endsection