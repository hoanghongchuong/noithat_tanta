@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 2)->first();
?>
<style type="text/css">
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
        background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.6)), url('./images/break.jpg');
        background-size: cover;
        /* opacity: .4; */
    }
    .regis {
        background: url(./images/38.jpg) no-repeat top center;
        background-size: cover;
    }
</style>

<main class="b1 index">
    <section class="bread-wrap">
        <div class="container">
            <h1 class="t3 text-center s30 bread-tit">Tin tức</h1>
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li>Tin tức</li>
            </ul>
        </div>
    </section>

    <section class="blogp">
        <div class="container">
            <ul class="s15 text-uppercase justify-content-md-center nav nav-pills blog-tabs" role="tablist">
                @foreach($cateNews as $k=>$cate)
                <li class="nav-item">
                    <a class="nav-link" href="{{url('tin-tuc/'.$cate->alias)}}"><span>{{$cate->name}}</span></a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="b2">
            <div class="container">
                <div class="tab-content blog-tabs-content">
                    <div class="tab-pane fade show active" id="noithat">
                        <div class="blog-slider">
                            @foreach($hot_news as $hot)
                            <article class="blog-item">
                                <figure class="text-center blog-img">
                                    <a href="{{url('tin-tuc/'.$hot->alias.'.html')}}" title="{{$hot->name}}"><img src="{{asset('upload/news/'.$hot->photo)}}" title="{{$hot->name}}" alt="{{$hot->name}}"></a>
                                </figure>

                                <figcaption class="blog-content">
                                    <h3 class="medium pt-3 pb-2"><a href="bdetail.html" title="{{$hot->name}}">{{$hot->name}}</a></h3>
                                    <h4 class="s15 t5 bdetail-time">{{date('d/m/Y', strtotime($hot->created_at))}}</h4>
                                    <div class="s15 blog-content-wrap">
                                        <p>{!! $hot->mota !!}</p>
                                    </div>
                                </figcaption>
                            </article>
                            @endforeach
                            
                        </div>

                        <div class="blog-wrap">
                            <div class="row">
                                @foreach($tintuc as $item)
                                <div class="col-lg-4 col-md-6">
                                    <article class="video-item">
                                        <figure class="text-center video-img">
                                            <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}"></a>
                                        </figure>

                                        <figcaption class="video-content">
                                            <h3 class="medium py-2"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>

                                            <p class="s15 t4">{{$item->mota}}</p>
                                        </figcaption>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                            <div class="paginations" style="text-align: center; margin-top: 30px;">
                                {!! $tintuc->links() !!}
                            </div>
                            <!-- <ul class="pb-md-4 pt-md-5 pagi text-center">
                                <li><a href="#" title="">1</a></li>
                                <li><a href="#" title="">2</a></li>
                                <li><a href="#" title="">3</a></li>
                                <li><a href="#" title="">4</a></li>
                            </ul> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="b2 pt-4 break">
        <div class="container">
            <div class="break-wrap">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="wow tada" data-wow-iteration="infinite" src="images/phone.png" title="" alt="">

                            <div class="text-white break-info">
                                <h2 class="s24 op7 pb-2 bold text-uppercase">Đăng ký nhận tư vấn thiết kế nội thất</h2>
                                <h3 class="op7">Chúng tôi cam kết tạo ra không gian hoàn hảo cho tổ ấm của bạn.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-center py-3 break-r">
                            <a href="tel:0947499660" title="" title="" class="btn text-uppercase phone-btn">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b2 brand">
        <div class="container">
            <div class="brand-slider brand-border">
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