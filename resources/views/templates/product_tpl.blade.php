@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div id="content">
    <div class="page-title-wrap page-title-wrap-bg" style="background-image: url({{asset('public/images/bg-title.jpg')}});">
    <div class="page-title-overlay"></div>
        <div class="container">
            <div class="page-title-inner block-center">
                <div class="block-center-inner">
                    <h1>Danh mục</h1>
                    <ul class="breadcrumbs breadcrumbs-left">
                        <!-- <li class="first">You are here:</li> -->
                        <li class="home">
                            <span>
                                <a rel="v:url" href="#" class="home">
                                    <span>Trang chủ</span>
                                </a>
                            </span>
                        </li>
                        <li>
                            <span>Sản phẩm</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="site-content-archive">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="sidebar left-sidebar col-md-3">
                    <aside id="search-2" class="widget widget_search">
                        <form class="search-form" method="get" id="searchform" action=""> 
                            <input type="text" value="" name="s" id="s" placeholder="Search..."> 
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </aside>

                    <aside id="categories-2" class="widget widget_categories">
                        <h4 class="widget-title"><span>Danh mục sản phẩm</span></h4>
                            <ul>
                                @foreach($cate_pro as $cate)
                                <li class="cat-item">
                                    <a href="{{url('san-pham/'.$cate->alias)}}">{{ $cate->name }}</a>
                                </li>
                                @endforeach

                            </ul>
                    </aside>
                </div>
                <div class="site-content-archive-inner col-md-9">
                    <div class="row">
                        @foreach($products as $item)
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="p-block">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}">
                                    <img src="{{asset('upload/product/'.$item->photo)}}" alt="">
                                    <div class="p-desc">
                                        <p class="p-name">{{ $item->name }}</p>
                                        <!-- <p>Hiện đại, ưu tín</p> -->
                                    </div>  
                                </a>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                    <div class="row"> <div class="paginations">{!! $products->links() !!}</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
