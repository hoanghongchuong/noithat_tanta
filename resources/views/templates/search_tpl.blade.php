@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 2)->first();
?>
<main class="index">
    <section class="about">
        <div class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }});">
            <div class="container">
                <div class="pl-95">
                    <h1 class="s36 light text-white text-uppercase bread-tit">Tìm kiếm</h1>
                    <ul class="s12 list-unstyled text-uppercase bread">
                        <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                        <li>{{$search}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pt-wrap">
            <div class="container">
                <div class="row pt-wrap-row">
                    @foreach($news as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pt-item">
                            <figure class="pt-img">
                                <a href="{{url($item->com.'/'.$item->alias.'.html')}}" title="{{ $item->name }}"><img src="{{asset('upload/news/'.$item->photo)}}" title="" alt=""></a>
                            </figure>
                            <figcaption class="pt-content">
                                <h2 class="bold t2 py-3 pt-content-tit"><a href="{{url($item->com.'/'.$item->alias.'.html')}}" title="">{{ $item->name }}</a></h2>
                                <div class="pt-content-wrap">
                                    <p>{!! $item->mota !!}</p>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    @endforeach                   
                </div>                
            </div>
        </div>
        
    </section>
</main>
@endsection
