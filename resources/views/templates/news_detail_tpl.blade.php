@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
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
    <section class="breadetail-wrap">
        <div class="container">
            <ul class="list-unstyled pt-2 pb-3 d-flex align-items-center justify-content-md-center text-uppercase text-center dstyle-list">
                @foreach($cateNews as $cate)
                <li class="@if($cate->id == $news_detail->cate_id) active @endif"><a href="{{url('tin-tuc/'.$cate->alias)}}" title="">{{$cate->name}}</a></li>
                @endforeach
            </ul>
            <div class="text-center">
                <img src="{{asset('upload/news/'.$news_detail->background)}}" title="{{ $news_detail->name }}" alt="{{ $news_detail->name }}" class="w-100 op6">
            </div>
            <h1 class="t3 text-center s30 bread-tit">{{ $news_detail->name }}</h1>
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
                <li>{{ $news_detail->name }}</li>
            </ul>
        </div>
    </section>

    <section class="b2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bdetail">
                        {!! $news_detail->content !!}
                    </div>

                    <div class="bdetail-re">
                        <h2 class="s18 bold pb-4 pt-3 t14 tit">Bài viết liên quan</h2>
                        <div class="bdetail-re">
                            @foreach($baiviet_khac as $item)
                            <article class="bdetail-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <figure class="text-center bdetail-img">
                                            <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}"></a>
                                        </figure>
                                    </div>

                                    <div class="col-sm-8">
                                        <figcaption class="video-content">
                                            <h3 class="bold s18 t14 pt-2 pb-3"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                            <div class="s15 t5 bdetail-time">{{date('d/m/Y', strtotime($item->created_at))}}</div>

                                            <p class="s15 t4">{{$item->mota}}</p>
                                        </figcaption>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
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
                            <img class="wow tada" data-wow-iteration="infinite" src="{{ asset('./public/images/phone.png')}}" title="" alt="">

                            <div class="text-white break-info">
                                <h2 class="s24 op7 pb-2 bold text-uppercase">Đăng ký nhận tư vấn thiết kế nội thất</h2>
                                <h3 class="op7">Chúng tôi cam kết tạo ra không gian hoàn hảo cho tổ ấm của bạn.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-center py-3 break-r">
                            <a href="tel:{{$setting->phone}}" title="" title="" class="btn text-uppercase phone-btn">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>
@endsection

