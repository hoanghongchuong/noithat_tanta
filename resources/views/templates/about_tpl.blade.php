@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 3)->first();
?>
<main class="index">
    <section class="about">
        <div class="bread-wrap" style="background: url({{asset('upload/banner/'.$banner->image)}})">
            <div class="container">
                <div class="pl-95">
                    <h1 class="s36 light text-white text-uppercase bread-tit">Giới thiệu</h1>
                    <ul class="s12 list-unstyled text-uppercase bread">
                        <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                        <li>Giới thiệu</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <article class="light about-content">
                        {!! $about->content !!}
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
