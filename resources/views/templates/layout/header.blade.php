<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('parent_id',0)->get();
    $cateVideos = DB::table('news_categories')->where('com','video')->where('status',1)->get();
    $cateStyle = DB::table('news_categories')->where('com','phongcach')->where('parent_id', 0)->where('status',1)->get();
?>
<h1 class="sr-only">Tân Tạ</h1>
    <header class="fixed-top top">
        <div class="bg-white top-wrapmenu">
            <div class="container">
                <div class="top-menu">
                    <!-- logo -->
                    <div class="d-flex align-items-center justify-content-between flex-lg-row flex-column top-menu-btn">
                        <!-- hamburger menu -->
                        <div class="d-flex align-items-center justify-content-between w-mb-100">
                            <a id="nav-icon" href="#menu" class="d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <a href="{{url('')}}" title=""><img src="{{ asset('upload/hinhanh/'.$setting->photo)}}" alt="" title="" class="logo"></a>
                            <span class="search-open"><i class="fas fa-search d-md-none d-inline-block "></i></span>
                        </div>
                        

                        <div class="top-contact">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="top-search">
                                    <form action="" class="trans d-flex align-items-center search-frm">
                                        <input class="form-control light s14 search-ip" type="text" required="required" placeholder="Từ khóa tìm kiếm">
                                        <button class="btn search-btn"><img src="{{ asset('public/images/search.png')}}" alt="" title=""></button>
                                    </form>
                                </div>

                                <div class="d-flex align-items-center top-contact-sr">
                                    <img src="{{ asset('public/images/showroom.png')}}" title="" alt="" class="mr-2">
                                    <h3 class="s14 text-uppercase"><a href="{{url('showroom')}}" title=""><span class="d-lg-block d-none">Hệ thống </span>showroom</a></h3>
                                </div>
                                <div class="d-flex align-items-center top-contact-call">
                                    <img src="{{ asset('public/images/hotline.png')}}" title="" alt="" class="mr-2">
                                    <div class="">
                                        <span class="s14 text-uppercase d-lg-block d-none">Tư vấn (9:30 - 21:30)</span>
                                        <a href="tel:{{$setting->phone}}" title="" class="s20 bold d-block t1">{{$setting->phone}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b5">
            <div class="container">
                <div class="d-flex w-100 align-items-center">
                    <!-- menu -->
                    <nav id="menu" class="menu-wrap">
                        <ul class="menu medium text-uppercase">
                            <li class="@if(@$com == 'index') active @endif"><a href="{{ url('') }}" title="">Trang chủ</a></li>
                            <li><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a></li>
                            <li><a href="javascript:0;" title="">Thiết kế Thi công nội thất</a>
                                <ul>
                                    <li><a href="inter-child.html" title="">Căn hộ chung cư</a></li>
                                    <li><a href="inter-child.html" title="">Căn hộ cao cấp</a></li>
                                    <li><a href="inter-child.html" title="">Khu nghỉ dưỡng</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:0;" title="">Thiết kế thi công ngoại thất</a>
                                <ul>
                                    <li><a href="inter-child.html" title="">Căn hộ chung cư</a></li>
                                    <li><a href="inter-child.html" title="">Căn hộ cao cấp</a></li>
                                    <li><a href="inter-child.html" title="">Khu nghỉ dưỡng</a></li>
                                </ul>
                            </li>
                            <li class="wire-menu @if(@$com == 'san-pham') active @endif"><a href="{{url('san-pham')}}" title="">Sản phẩm</a>
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a href="{{url('san-pham/'.$category->alias)}}" title="">{{$category->name}}</a>
                                        <?php $cateChilds = DB::table('product_categories')->where('parent_id', $category->id)->get() ?>
                                        <ul>
                                            @foreach($cateChilds as $cateChild)
                                            <li><a href="{{url('san-pham/'.$cateChild->alias)}}" title="{{ $cateChild->name }}">{{ $cateChild->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="javascript:0;" title="">Phong cách thiết kế</a>
                                <ul>
                                    @foreach($cateStyle as $style)
                                    <li><a href="{{url('phong-cach-thiet-ke/'.$style->alias.'-'.$style->id)}}" title="{{$style->name}}">{{$style->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="@if(@$com == 'video') active @endif"><a href="javascript:0;" title="">Video</a>
                                <ul>
                                    @foreach($cateVideos as $cateVideo)
                                    <li><a href="{{url('video/'.$cateVideo->alias)}}" title="{{$cateVideo->name}}">{{$cateVideo->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>