@extends('index')
@section('content')

<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 8)->first();
?>
<main class="cd-main-content">
    <section class="paginations">
        <div class="container">
            <ul class="flex-center-center">
                <li><a href="{{url('')}}" title="">Trang chủ</a> </li>
                <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a> </li>
                <li><span>{{ $news_detail->name }}</span></li>
            </ul>
        </div>
    </section>
    <section class="banner-trend">
        <img src="{{asset('upload/banner/'.$banner->image)}}" alt="" title="">
    </section>
    <section class="news pd-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-detail">
                        <div class="news-item">
                            <h1>{{ $news_detail->name }}</h1>
                            <p class="date">{{date('d/m/Y', strtotime($news_detail->created_at))}}</p>
                            <p><img src="{{asset('upload/news/'.$news_detail->photo)}}" alt="" title=""> </p>
                            {!! $news_detail->content !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-top news-right">
                        <div class="search">
                            <h2>TÌM KIẾM</h2>
                            <form method="get" action="{{ route('searchTuyenDung') }}">
                                {{csrf_field()}}
                                <input type="text" required name="txtSearch" placeholder="Nhập tìm kiếm...">
                                <button type="submit"><i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="news-plus">
                            <h3>TIN NỔI BẬT</h3>
                            @foreach($hot_news as $hot)
                            <div class="news-child">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <a href="{{url('tin-tuc/'.$hot->alias.'.html')}}" title="{{$hot->name}}" class="zoom"><img src="{{asset('upload/news/'.$hot->photo)}}" alt="{{$hot->name}}" title="{{$hot->name}}"> </a>
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <div class="news-child-txt">
                                            <h5><a href="{{url('tin-tuc/'.$hot->alias.'.html')}}" title="{{$hot->name}}">{{$hot->name}}</a> </h5>
                                            <p>{{ date('d,m/Y', strtotime($hot->created_at)) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
