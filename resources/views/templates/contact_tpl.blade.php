@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 5)->first();
?>
<main class="index">
    <section class="about">
        <div class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }})">
            <div class="container">
                <div class="pl-95">
                    <h1 class="s36 light text-white text-uppercase bread-tit">Liên hệ</h1>
                    <ul class="s12 list-unstyled text-uppercase bread">
                        <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <h2 class="s18 text-center text-uppercase t2 contact-tit">Gửi liên hệ</h2>

                    <form action="{{ route('postContact') }}" method="post" class="contact-frm">
                        {{csrf_field()}}
                        <input class="w-100" type="text" placeholder="Họ tên" name="name" required="required">
                        <input class="w-100" type="email" placeholder="Email" name="email">
                        <input class="w-100" type="tel" placeholder="Số điện thoại" name="phone" required="required">

                        <textarea rows="5" class="w-100" name="content" required placeholder="Nội dung"></textarea>

                        <p class="text-center">
                            <button class="btn s14 text-uppercase contact-btn">Gửi</button>
                        </p>
                    </form>
                </div>
            </div>

            <div class="cmaps">
                {!! $setting->iframemap !!}
            </div>
        </div>
    </section>
</main>
@endsection
