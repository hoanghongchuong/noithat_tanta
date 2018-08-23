@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div class="product">
    <div class="container">
        <div class="scholl_alias row">
            <a href="{{ url('') }}">Trang chủ <i class="fa fa-angle-right"></i></a>
            <a href="{{url('san-pham/'.@$cateProduct->alias)}}">{{@$cateProduct->name}}<i class="fa fa-angle-right"></i></a>
            <a href="#">{{$product_detail->name}}</a>
        </div>

        <div class="p-detail">
            <div class="row">
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <ul class="p_bxslider">
                        @if(count($album_hinh) > 0)
                            @foreach($album_hinh as $a)
                            <li><img src="{{asset('upload/hasp/'.$a->photo)}}" class="img-responsive"/></li>
                            @endforeach
                        @else
                            <li><img src="{{asset('upload/product/'.$product_detail->photo)}}" class="img-responsive" alt=""></li>
                        @endif
                </ul>
                <center>
                <div id="p-pager">
                    @if(count($album_hinh) > 0)
                        @foreach($album_hinh as $k=>$a)
                        <a data-slide-index="{{$k}}">
                            <img src="{{asset('upload/hasp/'.$a->photo)}}" />
                        </a>
                    @endforeach
                    @else 
                    <a data-slide-index="0">
                        <img src="{{asset('upload/product/'.$product_detail->photo)}}" />
                    </a>
                    @endif
                </div>
                </center>
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7 p-info">
                    <p class="p-name">{{$product_detail->name}}</p>
                    <p class="news-social">

                        <div class="addthis_toolbox addthis_default_style" style="margin-top:10px;">

                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>

                            <a class="addthis_button_tweet"></a>

                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>

                            <a class="addthis_counter addthis_pill_style"></a>

                        </div>

                            <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>

                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52843d4e1ff0313a"></script>

                    </p>
                    <p class="p-price">{{number_format($product_detail->price)}}</p>
                    <p class="p-bh">
                        <strong>Tình trạng:</strong> @if($product_detail->tinhtrang == 1) Còn hàng @else Hết hàng @endif
                    </p>
                    <div class="km-box">
                        <h4>Thông tin sản phẩm</h4>
                        <div class="km-box-content">
                            {!! $product_detail->mota !!}
                        </div>
                    </div>
                    <div class=" p-buy">
                        <div style="text-align: center;">
                            <a href="{{url('lien-he')}}" class="btn btn-default p-buy-1">LIÊN HỆ</a>
                        </div>
                        
                        <div class="p-contact">
                            <div class="col-xs-6 col-sm-5 pr0">
                                <img src="{{ asset('public/images/icon-dt.png')}}" width="25px">&nbsp; Gọi tư vấn:
                            </div>
                            <div class="col-xs-6 col-sm-7 pl0">
                                <p>{{$setting->phone}} - {{$setting->hotline}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="p_review">
            <div class="row">
                <div class=" col-sm-12 col-md-12 col-lg-12">
                    <div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi tiết sản phẩm</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            {!! $product_detail->content !!}
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
        @if(count($productSameCate) > 0)
        <div class="same_pro">
            <h2 class="box-title"><span class="title">Sản phẩm liên quan</span></h2>
            <div class="row">
                @foreach($productSameCate as $ps)
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="p-block">
                        <a href="{{url('san-pham/'.$ps->alias.'.html')}}">
                            <img src="{{asset('upload/product/'.$ps->photo)}}" alt="">
                            <div class="p-desc">
                                <p class="p-name">{{$ps->name}}</p>
                                <!-- <p>Hiện đại, ưu tín</p> -->
                            </div>  
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
