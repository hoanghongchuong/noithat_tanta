@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
$categories_noithat = DB::table('news_categories')->where('status',1)->where('com','noi-that')->orderBy('stt','asc')->get();
?>
<main class="index">
    <section class="slider-area">
        <div id="slider">
            @foreach($slider as $k=>$s)
            <a href="#" title=""><img alt="" class="slider-img" src="{{asset('upload/hinhanh/'.$s->photo)}}" alt="slider-img" title="#caption{{$k}}" /></a>
            @endforeach
            
        </div>
    </section>
    <!-- slider-area-end -->    
</main>
@endsection
