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
    <section class="bread-wrap mb-3 ic-detail-bread">
        <div class="container">
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li><a href="{{url('san-pham')}}" title="">Sản phẩm</a></li>
                <li><a href="{{url('san-pham/'.$cateProduct->alias)}}" title="">{{$cateProduct->name}}</a></li>
                <li>{{ $product_detail->name }}</li>
            </ul>
        </div>
    </section>

    <section class="b2 pdetail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <div class="slider pdetail-for">
                            @if(count($album_hinh) > 0)
                                @foreach($album_hinh as $album)
                                <div class="text-center">
                                    <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                </div>
                                @endforeach
                            @else
                            <div class="text-center">
                                <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="">
                            </div>
                            @endif
                        </div>
                        <div class="slider pdetail-nav">
                            @if(count($album_hinh) > 0)
                                @foreach($album_hinh as $album)
                                <div>
                                    <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                </div>
                                @endforeach
                            @else
                                <div>
                                    <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h1 class="s30 pdetail-tit">{{ $product_detail->name }}</h1>
                    <h2 class="t1 medium s24 pb-3 pdetail-price">{{number_format($product_detail->price)}} đ</h2>
                    <!-- <ul class="list-unstyled pdetail-list">
                        <li>Độ dày của da từ 1.2 - 1.4mm</li>
                        <li>Bên trong: Mút đàn hồi kết hợp lông vũ</li>
                        <li>Chân inox đánh bóng</li>
                        <li>Khung: gỗ đầu đã qua xử lý và plywood</li>
                        <li>Da bảo hành 24 tháng, khung bảo hành trọn đời</li>
                    </ul> -->
                    <div class="des-product">
                        {!! $product_detail->mota !!}
                    </div>
                    <div class="d-flex align-items-center pdetail-phone s30">
                        <img class="wow tada" data-wow-iteration="infinite" src="{{ asset('public/images/phone3.png')}}" title="" alt="">
                        <span>Gọi đặt mua <a class="bold" href="tel:{{$setting->hotline}}" title="">{{$setting->hotline}}</a></span>
                    </div>

                    <div class="pt-4 pdetail-cm">
                        <div class="fb-like" data-href="{{URL::Current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                </div>
            </div>
            

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="pdetail-content">
                        <h3 class="s24 pb-3 pdetail-info">Thông tin sản phẩm</h3>
                        {!! $product_detail->content !!}

                        <!-- <div class="text-center">
                            <img src="images/88.jpg" title="" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b3 project">
        <div class="container">
            <h2 class="s30 text-center t12 pb-5 pj-tit">Sản phẩm khác</h2>

            <div class="pdetail-slider">
                @foreach($product_khac as $item)
                <article class="pitem">
                    <figure class="text-center pitem-img">
                        <a href="{{ url('san-pham/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/product/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
                    </figure>

                    <figcaption class="pitem-info">
                        <h3 class="pitem-info-tit"><a title="{{$item->name}}" href="{{ url('san-pham/'.$item->alias.'.html') }}">{{$item->name}}</a></h3>
                        <h4 class="t1 medium pitem-price">
                            {{number_format($item->price)}} đ
                        </h4>
                    </figcaption>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="b2 brand">
        <div class="container">
            <div class="brand-slider">
                <div class="brand-item">
                    <img src="images/5.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/6.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/7.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/8.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/9.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/5.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/6.png" alt="" title="">
                </div>
                <div class="brand-item">
                    <img src="images/7.png" alt="" title="">
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
