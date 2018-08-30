@extends('index')

@section('content')

<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 9)->first();
?>

<main class="b1 index">
	<section class="bread-wrap">
		<div class="container">
			<h1 class="t3 text-center s30 bread-tit wow fadeInDown" data-wow-delay=".2s">Thiết kế - thi công nội thất</h1>
			<ul class="s15 list-unstyled justify-content-center bread op7 text-center wow fadeInUp" data-wow-delay=".5s" data-wow-offset="130">
				<li><a href="{{url('')}}" title="">Trang chủ</a></li>
				<li>Thiết kế - thi công nội thất</li>
			</ul>

			<div class="t11 inter-sum wow fadeInUp" data-wow-delay=".9s" data-wow-offset="130">
				<div class="inter-sum-content">
					<p class="text-center">Công ty thiết kế nội thất cao cấp hiện đại, đơn vị uy tín chuyên thiết kế nội thất - Với việc đề cao không gian sống sang trọng, đẳng cấp, tinh tế, phù hợp với phong cách, cá tính của mỗi thành viên trong từng gia đình; TANNC Décor tự hào khi trở thành đối tác thiết kế và thi công nội thất cho các dự án biệt thự, căn hộ cao cấp: Vinhome Riverside, Royal City, Times City, Park Hill, Mipec Riverside.</p>
					<p class="text-center">Công ty thiết kế nội thất cao cấp hiện đại, đơn vị uy tín chuyên thiết kế nội thất - Với việc đề cao không gian sống sang trọng, đẳng cấp, tinh tế, phù hợp với phong cách, cá tính của mỗi thành viên trong từng gia đình; TANNC Décor tự hào khi trở thành đối tác thiết kế và thi công nội thất cho các dự án biệt thự, căn hộ cao cấp: Vinhome Riverside, Royal City, Times City, Park Hill, Mipec Riverside.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="inter">
		<div class="container-flush">
			<div class="inter-slider">
				<article class="inter-item">
					<figure class="inter-img text-center">
						<a href="inter-child.html" title=""><img src="images/41.jpg" alt=""></a>
					</figure>
					<figcaption class="inter-info">
						<h2 class="medium s20 text-uppercase text-center pb-4 inter-info-tit"><a href="inter-child.html" title="">Thiết kế nội thất căn hộ chung cư cao cấp</a></h2>
						<div class="text-center">
							<a href="inter-child.html" class="btn op7 regis-btn text-uppercase">Xem thêm</a>
						</div>
					</figcaption>
				</article>
				<article class="inter-item">
					<figure class="inter-img text-center">
						<a href="inter-child.html" title=""><img src="images/41.jpg" alt=""></a>
					</figure>
					<figcaption class="inter-info">
						<h2 class="medium s20 text-uppercase text-center pb-4 inter-info-tit"><a href="inter-child.html" title="">Thiết kế nội thất căn hộ chung cư cao cấp</a></h2>
						<div class="text-center">
							<a href="inter-child.html" class="btn op7 regis-btn text-uppercase">Xem thêm</a>
						</div>
					</figcaption>
				</article>
				<article class="inter-item">
					<figure class="inter-img text-center">
						<a href="inter-child.html" title=""><img src="images/41.jpg" alt=""></a>
					</figure>
					<figcaption class="inter-info">
						<h2 class="medium s20 text-uppercase text-center pb-4 inter-info-tit"><a href="inter-child.html" title="">Thiết kế nội thất căn hộ chung cư cao cấp</a></h2>
						<div class="text-center">
							<a href="inter-child.html" class="btn op7 regis-btn text-uppercase">Xem thêm</a>
						</div>
					</figcaption>
				</article>
				<article class="inter-item">
					<figure class="inter-img text-center">
						<a href="inter-child.html" title=""><img src="images/41.jpg" alt=""></a>
					</figure>
					<figcaption class="inter-info">
						<h2 class="medium s20 text-uppercase text-center pb-4 inter-info-tit"><a href="inter-child.html" title="">Thiết kế nội thất căn hộ chung cư cao cấp</a></h2>
						<div class="text-center">
							<a href="inter-child.html" class="btn op7 regis-btn text-uppercase">Xem thêm</a>
						</div>
					</figcaption>
				</article>
			</div>
		</div>
	</section>

	<section class="b2 qt">
		<div class="container">
			<h2 class="s30 text-center qt-btit wow fadeInUp" data-wow-offset="250">Quy trình thiết kế - thi công nội thất</h2>
			<div class="row no-gutters justify-content-center qt-row">
				<div class="col-sm-6">
					<div class="qt-item">
						<h3 class="bold s18 text-uppercase qt-tit wow fadeInLeft" data-wow-offset="250"><span>Bước 1: Tư vấn sơ bộ</span></h3>

						<div class="qt-content wow fadeInLeft" data-wow-offset="250">
							Chuyên viên của TANNC tiếp xúc và tìm hiểu về yêu cầu thiết kế của khách hàng, mời khách lên thăm căn hộ mẫu, tư vấn sơ bộ, bóc giá sơ bộ cho khách ngay tại khu căn hộ mẫu, phổ biến quy trình thiết kế và quy trình sản xuất.
						</div>

						<div class="text-center qt-img wow flipInX" data-wow-offset="250" style="background: url(./images/bg1.png) no-repeat center center; background-size: cover;">
							<img src="images/around1.png" alt="" title="">
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="qt-item">
						<h3 class="bold s18 text-uppercase qt-tit wow fadeInRight" data-wow-offset="250"><span>Bước 2: Triển khai thiết kế</span></h3>

						<div class="qt-content wow fadeInRight" data-wow-offset="250">
							Chuyên viên của TANNC tiếp xúc và tìm hiểu về yêu cầu thiết kế của khách hàng, mời khách lên thăm căn hộ mẫu, tư vấn sơ bộ, bóc giá sơ bộ cho khách ngay tại khu căn hộ mẫu, phổ biến quy trình thiết kế và quy trình sản xuất.
						</div>

						<div class="text-center qt-img wow flipInX" data-wow-offset="250" style="background: url(./images/bg2.png) no-repeat center center; background-size: cover;">
							<img src="images/around2.png" alt="" title="">
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="qt-item">
						<h3 class="bold s18 text-uppercase qt-tit wow fadeInLeft" data-wow-offset="250"><span>Bước 3: Tiến hành thi công</span></h3>

						<div class="qt-content wow fadeInLeft" data-wow-offset="250">
							Chuyên viên của TANNC tiếp xúc và tìm hiểu về yêu cầu thiết kế của khách hàng, mời khách lên thăm căn hộ mẫu, tư vấn sơ bộ, bóc giá sơ bộ cho khách ngay tại khu căn hộ mẫu, phổ biến quy trình thiết kế và quy trình sản xuất.
						</div>

						<div class="text-center qt-img wow flipInX" data-wow-offset="250" style="background: url(./images/bg3.png) no-repeat center center; background-size: cover;">
							<img src="images/around3.png" alt="" title="">
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="qt-item">
						<h3 class="bold s18 text-uppercase qt-tit wow fadeInLeft" data-wow-offset="250"><span>Bước 4: Bàn giao - nghiệm thu</span></h3>

						<div class="qt-content wow fadeInLeft" data-wow-offset="250">
							Chuyên viên của TANNC tiếp xúc và tìm hiểu về yêu cầu thiết kế của khách hàng, mời khách lên thăm căn hộ mẫu, tư vấn sơ bộ, bóc giá sơ bộ cho khách ngay tại khu căn hộ mẫu, phổ biến quy trình thiết kế và quy trình sản xuất.
						</div>

						<div class="text-center qt-img wow flipInX" data-wow-offset="250" style="background: url(./images/bg4.png) no-repeat center center; background-size: cover;">
							<img src="images/around4.png" alt="" title="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="project">
		<div class="container-flush">
			<h2 class="s24 t3 op8 text-center pt-2 pb-4 pj-tit">Dự án tiêu biểu</h2>

			<div class="pt-4 project-slider">
				<div class="pj-item">
					<figure class="text-center pj-item-img">
						<a href="inter-child-detail.html" title=""><img src="images/51.jpg" title="" alt="" title=""></a>
					</figure>
					
					<figcaption class="pj-item-info">
						<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
					</figcaption>
				</div>

				<div class="pj-item">
					<figure class="text-center pj-item-img">
						<a href="inter-child-detail.html" title=""><img src="images/101.jpg" title="" alt="" title=""></a>
					</figure>
					
					<figcaption class="pj-item-info">
						<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
					</figcaption>
				</div>

				<div class="pj-item">
					<figure class="text-center pj-item-img">
						<a href="inter-child-detail.html" title=""><img src="images/102.jpg" title="" alt="" title=""></a>
					</figure>
					
					<figcaption class="pj-item-info">
						<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
					</figcaption>
				</div>

				<div class="pj-item">
					<figure class="text-center pj-item-img">
						<a href="inter-child-detail.html" title=""><img src="images/103.jpg" title="" alt="" title=""></a>
					</figure>
					
					<figcaption class="pj-item-info">
						<h3 class="text-center"><a href="inter-child-detail.html" title="">Thiết kế chung cư 121 m2 D' Le Roi Soleil</a></h3>
					</figcaption>
				</div>

				<div class="pj-item">
					<figure class="text-center pj-item-img">
						<a href="inter-child-detail.html" title=""><img src="images/104.jpg" title="" alt="" title=""></a>
					</figure>
					
					<figcaption class="pj-item-info">
						<h3 class="text-center"><a href="inter-child-detail.html" title="">Hình ảnh thi công nhà anh Phan Mỹ Đình Complex</a></h3>
					</figcaption>
				</div>

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
	</section>

	
</main>
@endsection