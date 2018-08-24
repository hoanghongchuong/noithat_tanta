@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 3)->first();
?>
<main class="b1 index">
    <section class="bread-wrap" style="background: url({{ asset('upload/banner/'.@$banner->image)  }})>
        <div class="container">
            <h1 class="t3 text-center s30 bread-tit">{{$setting->company}}</h1>
            <ul class="s15 list-unstyled justify-content-center bread op7 text-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li>Giới thiệu</li>
            </ul>
        </div>
    </section>

    <section class="slogan">
        <div class="container">
            <div class="slogan-wrap">
                <h2 class="t1 s24 text-center medium italic slogan-tit">"Sang trọng - Đẳng cấp - Thân thiện"</h2>
            </div>
        </div>
    </section>

    <section class="b2 about-wrap">
        <div class="container">
            <div class="about-item">
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center justify-content-center" style="background: url({{ asset('public/images/aboutbg.png')}}) no-repeat center; background-size: cover;">
                        <img src="{{ asset('upload/hinhanh/'.$about->photo)}}" title="" alt="" class="clip-circle wow rollIn" data-wow-delay=".3s" data-wow-offset="270">
                    </div>
                    <div class="col-sm-6">
                        <div class="about-item-l">
                            <h3 class="s24 aboutp-tit">{{$about->name}}</h3>
                            <div class="about-content">
                                <p>{!! $about->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vision-item">
                <div class="row no-gutters">
                    <div class="col-sm-6 d-flex align-items-center">
                        <div class="vision-l">
                            <h3 class="s18 bold t1 text-uppercase tit">{{ @$sumenh->name }}</h3>

                            <p>{!! @$sumenh->content !!}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img class="w-100" src="{{ asset('upload/hinhanh/'.@$sumenh->photo)}}" alt="">
                    </div>
                </div>
            </div>

            <div class="vision-item">
                <div class="row no-gutters">
                    <div class="col-sm-6 text-center">
                        <img class="w-100" src="{{ asset('upload/hinhanh/'.@$tamnhin->photo)}}" alt="">
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <div class="vision-l">
                            <h3 class="s18 bold t1 text-uppercase tit">{{@$tamnhin->name}}</h3>

                            <p>{!! @$tamnhin->content !!}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="reason" style="background:linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.9)), url({{asset('public/images/4reason.jpg')}}); background-size: cover;">
        <div class="container">
            <h2 class="s24 text-center text-white tit wow fadeInUp" data-wow-offset="120">Lý do nên chọn TANNC</h2>
            <div class="row justify-content-center">
            @foreach($slogans as $slogan)
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-center wow slideInRight" data-wow-offset="180">
                    <div class="text-center py-4 about-item">
                        <img class="about-item-img" src="{{asset('upload/hinhanh/'.$slogan->photo)}}" alt="">
                        <h3 class="medium text-center t1 reason-tit">{{$slogan->name}}</h3>
                        <h4 class="s14 t9 reason-sum">
                            {{$slogan->mota}}
                        </h4>
                    </div>
                </div>
            @endforeach                
            </div>
        </div>
    </section>

    <section class="b2 tes">
        <div class="container">
            <div class="tes-1">
                <h2 class="s24 text-center tes-tit wow fadeInUp" data-wow-offset="120">Khách hàng nói gì về chúng tôi?</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tes-slider">
                            @foreach($feedback as $f)
                            <div class="tes-item">
                                <div class="medium italic pt-1 pb-3 tes-content">
                                    <p class="text-center">{!! $f->content !!}</p>
                                </div>
                                <h3 class="t1 text-center text-uppercase medium tes-cus">{{$f->name}}</h3>
                                <h4 class="s14 italic t10 text-center tes-add">{{$f->position}}</h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tes-2">
                <h2 class="s24 text-center tes2-tit wow fadeInUp" data-wow-offset="120">Báo chí nói gì về chúng tôi?</h2>

                <div class="tes2-slider">
                    @foreach($baochi as $b)
                    <article class="tes2-item">
                        <figure class="text-center tes2-img">
                            <a href="{{$b->link}}" title=""><img src="{{asset('upload/hinhanh/'.$b->photo)}}" alt="" title=""></a>
                        </figure>
                        <figcaption class="tes2-content">
                            <h3 class="medium py-2"><a href="{{$b->link}}" title="">{{$b->name}}</a></h3>
                            
                            <div class="s15 t4 tes2-content-wrap">
                                <p>{!! $b->mota !!}</p>
                            </div>

                            <h4 class="tes-media">
                                <a href="{{$b->link}}" title="">{{$b->content}}</a>
                            </h4>
                        </figcaption>
                    </article>
                    @endforeach
                    
                </div>
            </div>

        </div>
    </section>

    
</main>
@endsection
