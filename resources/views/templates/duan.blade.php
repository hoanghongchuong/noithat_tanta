@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 4)->first();
?>
<main class="cd-main-content">
    <section class="paginations">
        <div class="container">
            <ul class="flex-center-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a> </li>
                <li><span>Dự án</span></li>
            </ul>
        </div>
    </section>
    <section class="banner-trend relative">
        <img src="{{ asset('upload/banner/'.$banner->image)}}" alt="" title="">
        <div class="trend-abs flex-center">
            <div class="container">
                <h2><span>{{$banner->title}}</span></h2>
                <h1 class="light-h visible-desktop">{!! $banner->mota !!}</h1>
                <h3 class="light-h visible-mobile">{!! $banner->mota !!}</h3>
            </div>
        </div>
    </section>
    <section class="work-step-pj pd-60">
        <div class="container">
            <h2 class="index-title text-center text-uppercase font-ice"><span>CHI PHÍ QUẢNG CÁO LINH HOẠT</span></h2>
            <div class="row">
                @foreach($slogans as $slogan)
                <div class="col-md-6">
                    <div class="google-step google-step-1" style="background: url({{asset('upload/hinhanh/'.$slogan->photo)}}) no-repeat left 5px top 10px">
                        <h4>{{$slogan->name}}</h4>
                        <p>{{$slogan->mota}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="projected pd-60">
        <div class="container">
            <h2 class="index-title text-uppercase text-center font-ice"><span>DỰ ÁN TIÊU BIỂU</span></h2>
            <div class="projected-slider owl-carousel slider-general">
            	@foreach($projects as $item)
                <div class="item">
                    <a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}" class="zoom"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}"> </a>
                    <div class="pj-cache">
                        <h4><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a> </h4>
                        <p> Khách hàng tiêu biểu</p>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- <div class="author">
                <p class="desc">“Chúng tôi rất hài lòng với những tính năng của Ads Digital trong cả nghiệp vụ bán hàng lẫn kế toán và báo cáo tổng hợp. Chúng tôi tin rằng Ads Digital là lựa chọn hàng đầu hiện nay về giải pháp thông minh cho các doanh nghiệp.”</p>
                <p class="text-right">Quách Văn Sơn – Trưởng phòng thiết kế</p>
            </div> -->
        </div>
    </section>
    <section class="customer-list pd-60">
        <div class="container">
            <h2 class="index-title text-uppercase text-center font-ice"><span>KHÁCH HÀNG CỦA CHÚNG TÔI</span></h2>
            <ul>
            	@foreach($partners as $partner)
                <li><a href="{{ $partner->url }}" title=""><img src="{{asset('upload/banner/'.$partner->photo)}}" alt="" title=""> </a> </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="customer-ideas">
        <div class="container">
            <p class="text-center"><img src="{{asset('public/images/picture/point.png')}}" alt="" title=""> </p>
            <div class="customer-idea-slider owl-carousel">
                @foreach($feedback as $f)
                <div class="item">
                    <p>{!! $f->content !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection