@extends('index')

@section('content')

<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 9)->first();
?>

<main class="b1 index">
    <section class="bread-wrap ic-detail-bread" style="background: url({{ asset('upload/banner/'.@$banner->image)  }})>
        <div class="container">
            <h1 class="t3 text-center s30 bread-tit">{{ $video->name }}</h1>
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li><a href="#" title="">Video</a></li>
                <li>{{ $video->name }}</li>
            </ul>
        </div>
    </section>

    <section class="mt-90 ic-detail">
        <div class="container">
            <div class="vwrap">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/{{$video->mota}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="b2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="t13 ic-detail-content-wrap">
                        {!! $video->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b2 pb-4 vdetail">
        <div class="container">
            <h2 class="s24 pt-4 video-tit">Video liên quan</h2>
            <div class="video-reslider">
                @foreach($videoOther as $item)
                <article class="video-item">
                    <figure class="text-center video-img">
                        <a href="{{ url('video/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="https://i.ytimg.com/vi/{!! $item->mota !!}/hqdefault.jpg" alt="{{$item->name}}" title="{{$item->name}}"></a>
                    </figure>

                    <figcaption class="video-content">
                        <h3 class="medium py-2"><a href="{{ url('video/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>                        
                    </figcaption>
                </article>
                @endforeach

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
                            <a href="tel:{{$setting->phone}}" title="" title="" class="btn text-uppercase phone-btn">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection