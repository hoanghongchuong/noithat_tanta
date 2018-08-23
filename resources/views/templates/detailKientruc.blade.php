@extends('index')

@section('content')

<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 8)->first();
?>

<main class="index">
    <section class="about">
        <div class="bread-wrap" style="background: url({{ asset('upload/banner/'.$banner->image) }});">
            <div class="container">
                <div class="pl-95">
                    <ul class="s12 list-unstyled text-uppercase bread">
                        <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                        <li>Kiến trúc</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-150px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white da-detail-content">
                            <div class="da-detail-header">
                                <h1 class="s18 text-uppercase pb-3 tit">{{$project->name}}</h1>
                                <h3 class="s14 t1 text-uppercase da-detail-time">{{date('d/m/Y', strtotime($project->created_at))}}</h3>
                            </div>
                            <div class="da-detail-body">
                                {!! $project->content !!}
                            </div>

                            <div class="da-detail-gal">
                                <div class="row">
                                    @foreach($albums as $album)
                                    <div class="col-sm-6">
                                        <div class="text-center da-gal-item">
                                            <a data-fancybox href="{{ asset('upload/albumnews/'.$album->photo) }}" title=""><img src="{{ asset('upload/albumnews/'.$album->photo) }}" alt="" title=""></a>
                                            <a data-fancybox="g1" class="btn text-uppercase all-btn" href="{{ asset('upload/albumnews/'.$album->photo) }}" title="">Xem tất cả</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <h2 class="da-detail-re"><span>Xem thêm</span></h2>

                            <ul class="list-unstyled da-detail-re-list">
                                @foreach($projectOther as $p)
                                <li><a href="{{url('du-an/'.$p->alias.'.html')}}" title="">{{$p->name}}</a></li>
                                @endforeach
                            </ul>

                            <div class="da-detail-cm">
                                <div class="da-detail-like">
                                    <div class="fb-like" data-href="{{URL::Current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                </div>                                
                                <div class="fb-comments" data-href="{{URL::Current()}}" data-numposts="2" data-width="100%"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</main>

@endsection