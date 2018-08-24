@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
     $banner = DB::table('banner_content')->where('position', 8)->first();
    
?>
<style>
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
            background: url(./images/38.jpg) no-repeat top center;
            background-size: cover;
        }
</style>
<main class="b1 index">
    <section class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }})">
        <div class="container">
            <h1 class="t3 text-center s30 bread-tit">Sản phẩm</h1>
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li>Sản phẩm</li>
            </ul>
        </div>
    </section>

    <section class="plink">
        <div class="container">
            <div class="plink-slider">
                @foreach($cate_pro as $cate)
                <div class="text-center plink-item">
                    <a href="{{ url('san-pham/'.$cate->alias) }}" title="{{ $cate->name }}"><img src="{{asset('upload/product/'.$cate->photo)}}" alt="{{ $cate->name }}"></a>
                    <h2 class="t1 text-center"><a href="{{ url('san-pham/'.$cate->alias) }}" title="{{ $cate->name }}">{{ $cate->name }}</a></h2>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="b2">
        <div class="container">
            <h2 class="s24 text-center ptit">Sản phẩm nổi bật</h2>
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
                    {!! $products->links() !!}
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
