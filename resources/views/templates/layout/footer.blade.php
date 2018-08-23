<?php
    $setting = Cache::get('setting');
    $partners = DB::table('partner')->get();
?>
<section class="b2 brand">
    <div class="container">
        <div class="brand-slider brand-border">
            @foreach($partners as $partner)
            <div class="brand-item">
                <img src="{{asset('upload/banner/'.$partner->photo)}}" alt="" title="">
            </div>
            @endforeach
        </div>
    </div>
</section>
<footer class="">
    <!-- <div class="to-top"><img src="images/up.png" title="" alt=""></div> -->
    <div class="s15 ft">
        <div class="b3 ft-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8">
                        <div class="text-lg-left text-center pb-4 logoft"><a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" title="" alt=""></a></div>
                        <ul class="list-unstyled op8 ft-add">
                            <li>
                                <i class="fas fa-home"></i> 
                                <span>{{$setting->address}}</span>
                            </li>
                            <li>
                                <span class="pr-4"><i class="fas fa-phone"></i>
                                Điện thoại: <a href="tel:{{$setting->phone}}" title="">{{$setting->phone}}</a></span>

                                <span class="pl-2"><i class="fas fa-envelope"></i> Email: <a href="{{$setting->email}}" title="">{{$setting->email}}</a></span>
                            </li>
                        </ul>
                        <ul class="text-lg-left text-center op8 list-unstyled ft-social">
                            <li><a href="{{$setting->facebook}}" title="">
                                <i class="fab fa-facebook-f"></i>
                            </a></li>
                            <li><a href="{{$setting->twitter}}" title="">
                                <i class="fab fa-twitter"></i>
                            </a></li>
                            <li><a href="{{$setting->youtube}}" title="">
                                <i class="fab fa-youtube"></i>
                            </a></li>
                            <li><a href="{{$setting->google}}" title="">
                                <i class="fab fa-google-plus-g"></i>
                            </a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <h2 class="medium text-uppercase t6 op1 pt-3 pb-4 ft-tit">Doanh nghiệp</h2>
                        <ul class="list-unstyled op8 ft-list">
                            <li><a href="{{url('gioi-thieu')}}" title="">
                                Giới thiệu doanh nghiệp
                            </a></li>
                            <li><a href="inter.html" title="">
                                Quy trình thiết kế
                            </a></li>
                            <li><a href="inter.html" title="">
                                Quy trình thi công
                            </a></li>
                            <li><a href="{{url('tin-tuc')}}" title="">
                                Tin tức - Sự kiện
                            </a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <h2 class="medium text-uppercase t6 op1 pt-3 pb-4 ft-tit">Fanpage</h2>
                        <div class="text-lg-left text-center">
                            <img src="{{ asset('public/images/fb.jpg')}}" title="" alt="" class="op1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b4 s14 text-lg-left text-center light ft-last">
            <div class="container">
                <ul class="t7 s15 text-center text-uppercase py-3 list-inline ft-menu">
                    <li class="d-inline-block px-3"><a href="#" title="">Bảo mật thông tin</a></li>
                    <li class="d-inline-block px-3"><a href="#" title="">Điều khoản sử dụng</a></li>
                </ul>

                <div class="text-center op6 ft-info">
                    <h2>&copy; 2017 - Công ty TNHH TM - DV HTL Việt Nam. Trụ sở: Tầng 2, nhà 1A, ngõ 199 đường Trường Chinh, Phường Khương Mai, Quận Thanh Xuân.</h2>
                    <h3>Giấy chứng nhận Đăng ký kinh doanh số 010435607 do KHĐT TP Hà Nội cấp ngày 05/01/2010</h3>
                </div>
            </div>
        </div>
    </div>
</footer>
