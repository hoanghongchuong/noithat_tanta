@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 2)->first();
?>
<main class="b1 index">
    <section class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }})">
        <div class="container">
            <h1 class="t3 text-center s30 bread-tit">Tìm kiếm</h1>
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li>Kết quả tìm kiếm</li>
            </ul>
        </div>
    </section>

    <section class="b2">
        <div class="container">
            <h2 class="s24 text-center ptit">{{ $search }}</h2>
            <div class="pwrap">
                <div class="row">
                    @foreach($products as $item)
                    <div class="col-lg-3 col-md-6">
                        <article class="pitem">
                            <figure class="text-center pitem-img">
                                <a href="{{ url('san-pham/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/product/'.$item->photo)}}" title="" alt=""></a>
                            </figure>
                            <figcaption class="pitem-info">
                                <h3 class="pitem-info-tit"><a title="{{$item->name}}" href="{{ url('san-pham/'.$item->alias.'.html') }}">{{$item->name}}</a></h3>
                                <h4 class="t1 medium pitem-price">
                                    {{number_format($item->price)}} đ
                                </h4>
                            </figcaption>
                        </article>
                    </div>
                    @endforeach                    
                </div>
                <div class="row">
                   
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
                            <a href="tel:{{ $setting->phone }}" title="" title="" class="btn text-uppercase phone-btn">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</main>

@endsection
