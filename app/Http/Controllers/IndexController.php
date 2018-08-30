<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Products;
use App\ProductCate;
use App\NewsLetter;
use App\Recruitment;
use DB,Cache,Mail;
use Cart;
use App\Campaign;
use App\Bill;
use App\CampaignCard;
use App\District;
use App\ChiNhanh;
class IndexController extends Controller {
	protected $setting = NULL;

	public $sortType = [
		'price-ascending' => [
			'text' => 'Giá: Tăng dần',
			'order' => ['price', 'ASC']
		],
		'price-descending' => [
			'text' => 'Giá: Giảm dần',
			'order' => ['price', 'DESC']
		],
		// 'title-ascending' => [
		// 	'text' => 'Tên: A-Z',
		// 	'order' => ['name', 'ASC']
		// ],
		// 'title-descending' => [
		// 	'text' => 'Tên: Z-A',
		// 	'order' => ['name', 'DESC']
		// ],
		// 'created-ascending' => [
		// 	'text' => 'Cũ nhất',
		// 	'order' => ['created_at', 'ASC']
		// ],
		// 'created-descending' => [
		// 	'text' => 'Mới nhất',
		// 	'order' => ['created_at', 'DESC']
		// ],
		// 'best-selling' => [
		// 	'text' => 'Bán chạy nhất',
		// 	'order' => ['noibat', 'ASC']
		// ]
	];
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
    	$setting = DB::table('setting')->select()->where('id',1)->get()->first();
    	$menu_top = DB::table('menu')->select()->where('com','menu-top')->where('status',1)->orderBy('stt','asc')->get();
    	$dichvu = DB::table('news')->select()->where('status',1)->where('com','dich-vu')->orderBy('stt','asc')->get();
    	$cateProducts = DB::table('product_categories')->where('parent_id',0)->get();
    	$about = DB::table('about')->where('com','gioi-thieu')->get();
    	Cache::forever('setting', $setting);
        Cache::forever('menu_top', $menu_top);
        Cache::forever('dichvu', $dichvu);
        Cache::forever('cateProducts', $cateProducts);
        Cache::forever('about', $about);
        if(Auth::check())
        {
        	View::share('nguoidung',Auth::user());
        }
        // Cache::forever('chinhanh', $chinhanh);
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$about = DB::table('about')->where('com','gioi-thieu')->first();
		
		$partners = DB::table('partner')->where('status',1)->orderBy('id','desc')->get();
		$slogans = DB::table('slogan')->orderBy('stt','asc')->get();
		$feedback = DB::table('feedback')->orderBy('id','desc')->get();
		$hotNews = DB::table('news')->where('status',1)->where('noibat',1)->where('com','tin-tuc')->take(20)->orderBy('id','desc')->get();
		$videos = DB::table('news')->where('com','video')->get();
		$video_one = DB::table('news')->where('com','video')->where('home',1)->first();
		$banner = DB::table('banner_content')->where('position', 1)->first();
		$cateProject = DB::table('news_categories')->where('com','du-an')->where('parent_id',0)->get();
		$setting = Cache::get('setting');
		$title = $setting->title;
		$keyword = $setting->keyword;
		$description = $setting->description;
		$whys = DB::table('lienket')->where('com','taisao')->orderBy('stt','asc')->get();
		$com = 'index';
		// End cấu hình SEO
		$img_share = asset('upload/hinhanh/'.$setting->photo);

		return view('templates.index_tpl', compact('com','about','keyword','description','title','img_share','slider','hotNews','partners','slogans','whys','videos', 'video_one','banner','cateProject'));
	}
	public function getProduct(Request $req)
	{
		$cate_pro = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderby('id','asc')->get();
		$productSale = DB::table('products')->select()->where('status',1)->where('spbc',1)->orderBy('id','desc')->take(6)->get();
		$products = DB::table('products')->select()->where('status', 1);
		$appends = [];
		$selected = $req->sort;
		if ($req->sort) {
			if (isset($this->sortType[$req->sort])) {
				$appends['sort'] = $req->sort;
				$products = $products->orderBy($this->sortType[$req->sort]['order'][0], $this->sortType[$req->sort]['order'][1]);
			}
		}
		$products = $products->paginate(9);
		if (count($appends)) {
			$products = $products->appends($appends);
		}
		$tintucs = DB::table('news')->where('com','tin-tuc')->orderBy('id','desc')->take(3)->get();
		$setting = Cache::get('setting');
		$com='san-pham';
		
		$title = "Sản phẩm";
		$keyword = "Sản phẩm";
		$description = "Sản phẩm";
		// $img_share = asset('upload/hinhanh/'.$banner_danhmuc->photo);
		
		// return view('templates.product_tpl', compact('product','banner_danhmuc','doitac','camnhan_khachhang','keyword','description','title','img_share'));
		view()->share(['sortType' => $this->sortType]);
		return view('templates.product_tpl', compact('title','keyword','description','products', 'com','cate_pro','tintucs','selected','productSale'));
	}

	public function getProductList($id, Request $req)
	{
		//Tìm article thông qua mã id tương ứng
		$cate_pro = DB::table('product_categories')->where('status',1)->orderby('id','asc')->get();
		$com='d';
		$productSale = DB::table('products')->select()->where('status',1)->where('spbc',1)->orderBy('id','desc')->take(6)->get();
		$product_cate = ProductCate::where('status',1)->where('alias',$id)->get()->first();
		if(!empty($product_cate)){
			// $products = DB::table('products')->select()->where('status',1)->where('cate_id',$product_cate->id)->orderBy('stt','asc')->paginate(20);
			$products = DB::table('products')->select()->where('status', 1);
			$products = $product_cate->products;
			// dd($products);
			// $appends = [];
			// $selected = $req->sort;
			// if ($req->sort) {
			// 	if (isset($this->sortType[$req->sort])) {
			// 		$appends['sort'] = $req->sort;
			// 		$products = $products->orderBy($this->sortType[$req->sort]['order'][0], $this->sortType[$req->sort]['order'][1]);
			// 	}
			// }		
			// $products = $products->paginate(20);	
			// if (count($appends)) {
			// 	$products = $products->appends($appends);
			// }
			$banner_danhmuc = DB::table('lienket')->select()->where('status',1)->where('com','chuyen-muc')->where('link','san-pham')->get()->first();
			$doitac = DB::table('lienket')->select()->where('status',1)->where('com','doi-tac')->orderby('stt','asc')->get();
			$tintucs = DB::table('news')->orderBy('id','desc')->take(3)->get();
			$cateChilds = DB::table('product_categories')->where('parent_id',$product_cate->id)->get();
			$setting = Cache::get('setting');
			if(!empty($product_cate->title)){
				$title = $product_cate->title;
			}else{
				$title = $product_cate->name;
			}
			$keyword = $product_cate->keyword;
			$description = $product_cate->description;
			$img_share = asset('upload/product/'.$product_cate->photo);
			view()->share(['sortType' => $this->sortType]);
			return view('templates.productlist_tpl', compact('products','product_cate','banner_danhmuc','doitac','keyword','description','title','img_share','cate_pro','tintucs','cateChilds','com','productSale','selected'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
	}

	public function getProductChild($alias){
		$cate = DB::table('product_categories')->where('alias',$alias)->first();
		$products = DB::table('products')->select()->where('status',1)->where('cate_id',$cate->id)->orderBy('id','desc')->paginate(20);
		$tintucs = DB::table('news')->orderBy('id','desc')->take(3)->get();
		return view('templates.productlist_level2', compact('tintucs','products'));
	}
	
	public function getProductDetail($id)
	{
        
        $cate_pro = DB::table('product_categories')->where('status',1)->orderby('id','asc')->get();
		$product_detail = DB::table('products')->select()->where('status',1)->where('alias',$id)->get()->first();
		if(!empty($product_detail)){
			$banner_danhmuc = DB::table('lienket')->select()->where('status',1)->where('com','chuyen-muc')->where('link','san-pham')->get()->first();
			$product_khac = DB::table('products')->select()->where('status',1)->where('alias','<>',$id)->orderBy(DB::raw('RAND()'))->take(20)->get();
			$album_hinh = DB::table('images')->select()->where('product_id',$product_detail->id)->orderby('id','asc')->get();
			
			$cateProduct = DB::table('product_categories')->select('name','alias')->where('id',$product_detail->cate_id)->first();
			$productSameCate = DB::table('products')->select()->where('status',1)->where('alias','<>',$id)->where('cate_id',$product_detail->cate_id)->orderby('stt','desc')->take(20)->get();
			// dd($productSameCate);
			$setting = Cache::get('setting');
			$productSale = DB::table('products')->select()->where('status',1)->where('spbc',1)->orderBy('id','desc')->take(4)->get();
			$tintucs = DB::table('news')->orderBy('id','desc')->take(3)->get();
			// Cấu hình SEO
			if(!empty($product_detail->title)){
				$title = $product_detail->title;
			}else{
				$title = $product_detail->name;
			}
			$keyword = $product_detail->keyword;
			$description = $product_detail->description;
			$img_share = asset('upload/product/'.$product_detail->photo);

			// End cấu hình SEO
			return view('templates.product_detail_tpl', compact('product_detail','banner_danhmuc','keyword','description','title','img_share','product_khac','album_hinh','cateProduct','productSameCate','tintucs','cate_pro','productSale'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
	}
	public function getAbout()
	{
		$about = DB::table('about')->where('com','gioi-thieu')->first();
		$sumenh = DB::table('about')->where('com','su-menh')->first();
		$tamnhin = DB::table('about')->where('com','tam-nhin')->first();
        $com = 'gioi-thieu';
		$slogans = DB::table('lienket')->where('com','taisao')->orderBy('stt','asc')->get();
		$baochi = DB::table('lienket')->where('com','baochi')->get();
		$feedback = DB::table('feedback')->orderBy('id','desc')->get();
		 //Cấu hình SEO
		$title = 'Giới thiệu';
		$keyword = 'Giới thiệu';
		$description = 'Giới thiệu';
		// End cấu hình SEO

		return view('templates.about_tpl', compact('about','keyword','description','title','img_share','com','slogans','feedback','baochi','tamnhin','sumenh'));
	}
	public function search(Request $request)
	{
		$search = $request->txtSearch;
		
		// Cấu hình SEO
		$title = "Tìm kiếm: ".$search;
		$keyword = "Tìm kiếm: ".$search;
		$description = "Tìm kiếm: ".$search;
		$img_share = '';		
		$products = DB::table('products')->where('status',1)->where('name', 'LIKE', '%' . $search . '%')->get();
		// $news = DB::table('news')->select()->where('name', 'LIKE', '%' . $search . '%')
		// ->whereIn('com',['kien-truc','tin-tuc','du-an'])
		// ->orderBy('id','DESC')->get();
		
		return view('templates.search_tpl', compact('products','keyword','description','title','img_share','search'));
	}

	public function getNews()
	{
		$cateNews = DB::table('news_categories')->where('com','tin-tuc')->get();		
		$tintuc = DB::table('news')->select()->where('status',1)->where('com','tin-tuc')->orderby('stt','asc')->paginate(6);		
		$hot_news = DB::table('news')->where('status',1)->where('com', 'tin-tuc')->where('noibat',1)->orderBy('stt','asc')->take(8)->get();		
		$com='tin-tuc';
		// Cấu hình SEO
		$title = "Tin tức";
		$keyword = "Tin tức";
		$description = "Tin tức";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.news_tpl', compact('tintuc','keyword','description','title','img_share','com','cateNews','hot_news'));
	}
	public function getListNews($id)
	{
		//Tìm article thông qua mã id tương ứng
		$tintuc_cate = DB::table('news_categories')->select()->where('status',1)->where('com','tin-tuc')->where('alias',$id)->get()->first();
		$cateNews = DB::table('news_categories')->where('com','tin-tuc')->get();
		if(!empty($tintuc_cate)){
			$tintuc = DB::table('news')->select()->where('status',1)->where('cate_id',$tintuc_cate->id)->orderBy('id','desc')->paginate(5);
			$tintuc_moinhat_detail = DB::table('news')->select()->where('status',1)->where('com','tin-tuc')->orderby('created_at','desc')->take(6)->get();
			$hot_news = DB::table('news')->where('status',1)->where('com', 'tin-tuc')->where('noibat',1)->orderBy('stt','asc')->take(5)->get();
			$setting = Cache::get('setting');

			if(!empty($tintuc_cate->title)){
				$title = $tintuc_cate->title;
			}else{
				$title = $tintuc_cate->name;
			}
			
			$keyword = $tintuc_cate->keyword;
			$description = $tintuc_cate->description;
			$img_share = asset('upload/news/'.$tintuc_cate->photo);

			// End cấu hình SEO
			return view('templates.news_list', compact('tintuc','tintuc_cate','banner_danhmuc','keyword','description','title','img_share','tintuc_moinhat_detail','hot_news', 'cateNews'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
	}
	
	public function getNewsDetail($id)
	{
		$news_detail = DB::table('news')->select()->where('status',1)->where('com','tin-tuc')->where('alias',$id)->get()->first();
		$cateNews = DB::table('news_categories')->where('com','tin-tuc')->get();
		if(!empty($news_detail)){			
			$cate_pro = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderby('id','asc')->get();
			$baiviet_khac = DB::table('news')->where('status',1)->where('id','<>', $news_detail->id)->where('cate_id', $news_detail->cate_id)->where('com','tin-tuc')->orderby('id','desc')->take(2)->get();
			$com='tin-tuc';
			$setting = Cache::get('setting');
			// Cấu hình SEO
			if(!empty($news_detail->title)){
				$title = $news_detail->title;
			}else{
				$title = $news_detail->name;
			}
			$keyword = $news_detail->keyword;
			$description = $news_detail->description;
			$img_share = asset('upload/news/'.$news_detail->photo);

			return view('templates.news_detail_tpl', compact('news_detail','com','banner_danhmuc','baiviet_khac','keyword','description','title','img_share','cateNews'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
		
	}

	public function getCateService(){
		$cate_service = DB::table('news_categories')->where('status',1)->where('com','dich-vu')->orderBy('id','asc')->get();
		return view('templates.cateservice_tpl', compact('cate_service'));
	}

	
	public function getThuvienanh()
	{
		$thuvienanh = DB::table('slider')->select()->where('com','thu-vien-anh')->orderBy('stt','asc')->paginate(6);
		$camnhan_khachhang = DB::table('lienket')->select()->where('status',1)->where('com','cam-nhan')->orderby('stt','asc')->get();
		$com='thu-vien-anh';
		// Cấu hình SEO
		$title = "Thư viện ảnh";
		$keyword = "Thư viện ảnh";
		$description = "Thư viện ảnh";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.thuvienanh_tpl', compact('thuvienanh','com','camnhan_khachhang','keyword','description','title','img_share'));
	}
	
	
	

	public function postGuidonhang(Request $request)
	{
		$setting = Cache::get('setting');
		$data = [
			'hoten' 		=> $request->get('hoten'), 
			'diachi' 	=> $request->get('diachi'),
			'dienthoai' 	=> $request->get('dienthoai'),
			'email' 	=> $request->get('email'),
			'noidung' 	=> $request->get('noidung')
		];
		Mail::send('templates.guidonhang_tpl', $data, function($msg){
			$msg->from($request->get('email'), $request->get('hoten'));
			$msg->to('emailserver.send@gmail.com', 'Author sendmail')->subject('Liên hệ từ website');
		});

		echo "<script type='text/javascript'>
			alert('Thanks for contacting us !');
			window.location = '".url('/')."' </script>";
	}
	public function postNewsLetter(Request $request)
	{
		$this->validate($request,
            ["txtEmail" => "required"],
            ["txtEmail.required" => "Bạn chưa nhập email"]
        );
        $kiemtra_mail = DB::table('newsletter')->select()->where('status',1)->where('com','newsletter')->where('email',$request->txtEmail)->get()->first();
        if(empty($kiemtra_mail)){
			$data = new NewsLetter();
			$data->name = $request->txtName;
			$data->email = $request->txtEmail;
			$data->phone = $request->txtPhone;
			$data->content = $request->txtContent;
			$data->status = 1;
			$data->com = 'newsletter';
			$data->save();

			echo "<script type='text/javascript'>
				alert('Bạn đã đăng kí nhận tin tức thành công !');
				window.location = '".url('/')."' </script>";
		}else{
			echo "<script type='text/javascript'>
				alert('Email này đã đăng ký !');
				window.location = '".url('/')."' </script>";
		}
	}
	public function getErrorNotFount(){
		$banner_danhmuc = DB::table('lienket')->select()->where('status',1)->where('com','chuyen-muc')->where('link','san-pham')->get()->first();
		return view('templates.404_tpl',compact('banner_danhmuc'));
	}

	public function getTuyenDung(){
		$com='tuyen-dung';
		$tintuc = DB::table('news')->select()->where('status',1)->where('com','tuyen-dung')->orderby('stt','asc')->paginate(6);
		$hot_news = DB::table('news')->select()->where('status',1)->where('noibat','>',0)->where('com','tuyen-dung')->take(5)->get();

		$title = 'Tuyển dụng';
		$description = 'Tuyển dụng';
		$keyword = 'Tuyển dụng';
		return view('templates.tuyendung', compact('com','tintuc','hot_news','title','description','keyword'));
	}
	public function getNewsTuyenDungDetail($alias)
	{
		$news_detail = DB::table('news')->select()->where('status',1)->where('com','tuyen-dung')->where('alias',$alias)->get()->first();
		if(!empty($news_detail)){
			$hot_news = DB::table('news')->where('status',1)->where('com', 'tuyen-dung')->where('noibat',1)->orderBy('stt','asc')->take(5)->get();
			if(!empty($news_detail->title)){
				$title = $news_detail->title;
			}else{
				$title = $news_detail->name;
			}
			$keyword = $news_detail->keyword;
			$description = $news_detail->description;
			$img_share = asset('upload/news/'.$news_detail->photo);
		}
		return view('templates.detailtuyendung', compact('news_detail', 'hot_news','title','description','keyword', 'img_share'));
	}
	public function postTuyenDung(Request $request){
		$data = new Recruitment;
		$data->name = $request->txtName;
		$data->phone = $request->txtPhone;
		$data->email = $request->txtEmail;
		$data->address = $request->txtAddress;
		$data->save();
		return redirect()->back()->with('mess','Cảm ơn bạn đã gửi yêu cầu. Chúng tôi sẽ liên hệ lại với bạn sớm nhất !');
	}

	
	

	public function getCart()
	{
		$product_cart= Cart::content();
		// dd($product_cart);
		$bank = DB::table('bank_account')->get();
		$total = $this->getTotalPrice();
		$province = DB::table('province')->get();
		// $district = DB::table('district')->get();
		$product_noibat = DB::table('products')->select()->where('status',1)->where('noibat','>',0)->orderBy('created_at','desc')->take(8)->get();
		$setting = Cache::get('setting');
		// Cấu hình SEO
		$title = "Giỏ hàng";
		$keyword = "Giỏ hàng";
		$description = "Giỏ hàng";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.giohang_tpl', compact('doitac','product_cart','district','product_noibat','province','keyword','description','title','img_share','total', 'bank'));
	}

	public function addCart(Request $req)
	{
		$data = $req->only('product_id','product_numb');
		$product = DB::table('products')->select()->where('status',1)->where('id',$data['product_id'])->first();
		if (!$product) {
			die('product not found');
		}
		Cart::add(array(
				'id'=>$product->id,
				'name'=>$product->name,
				'qty'=>$data['product_numb'],
				'price'=>$product->price,
				'options'=>array('photo'=>$product->photo,'code'=>$product->code)));
		return redirect(route('getCart'));
	}
	public function addCartAjax(Request $req)
    {
        // $data = $req->only('product_id');
        try {
            $product = DB::table('products')->select()->where('status', 1)->where('id', $req->id)->first();
            if (!$product) {
                die('product not found');
            }
            Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->price,
                'options' => array('photo' => $product->photo, 'code' => $product->code, 'alias' => $product->alias)
            ));
            echo count(Cart::Content());
        } catch (\Exception $e) {
            return 0;
        }
        // return redirect(route('getCart'));
    }
	public function updateCart(Request $req){
		$data = $req->numb;
		// dd($data);
		if($data>0){
			foreach($data as $key=>$item){
				Cart::update($key, $item);
			}
		}		
		return redirect(route('getCart'));
	}
	public function deleteCart($id){
        Cart::remove($id);
        return redirect('gio-hang');
    }

    public function checkCard(Request $req) {
    	$card = (new CampaignCard)
    		->join('campaigns', 'campaign_cards.campaign_id', '=', 'campaigns.id')
    		->select('campaigns.campaign_value', 'campaigns.campaign_type')
    		->where([
    			'campaign_cards.card_code' => $req->card_code,
    			'campaign_cards.del_flg' => 0,
    			'campaign_cards.is_active' => 0,
    			'campaigns.del_flg' => 0
    		])
    		->where('campaigns.campaign_expired', '>=', date('Y-m-d'))
    		->first();
    	if ($card) {
	    	$total = $this->getTotalPrice();
    		if ($card->campaign_type == 1) {
    			$total = $total - $card->campaign_value;
    		}
    		if ($card->campaign_type == 2) {
    			$total = $total * (100 - $card->campaign_value) / 100;
    		}

    		// return ($total);
    		return number_format($total);
    	}
    	return response()->json(false);
    }

    protected function getTotalPrice() 
    {
    	$cart = Cart::content();
    	$total = 0;
    	foreach ($cart as $key) {
    		$total += $key->price * $key->qty;
    	}
    	return $total;
    }

    public function postOrder(Request $req){
    	$cart = Cart::content();
    	$bill = new Bill;
    	$bill->full_name = $req->full_name;
    	$bill->email = $req->email;
    	$bill->phone = $req->phone;
    	$bill->note = $req->note;
    	$bill->address = $req->address;
    	$bill->payment = (int)($req->payment_method);
    	$bill->province = $req->province;
    	// $bill->district = $req->district;
    	$total = $this->getTotalPrice();
    	$bill->total = $total;
    	// $order['price'] = $this->getTotalPrice();
    	// if ($req->card_code) {
    	// 	$price = $this->checkCard($req);
	    // 	if (!$price) {
	    // 		return redirect()->back()->with('Mã giảm giá không đúng');
	    // 	}
	    // 	$bill->card_code = $req->card_code;
	    // 	$tongtien = $this->checkCard($req);
	    // 	$bill->total = ((Int)str_replace(',', '', $tongtien)); 	
    	// }
    	$detail = [];
    	foreach ($cart as $key) {
    		$detail[] = [
    			'product_name' => $key->name,
    			'product_numb' => $key->qty,
    			'product_price' => $key->price,
    			'product_img' => $key->options->photo,
    			'product_code' => $key->options->code
    		];
    	}
    	    	
    	$bill->detail = json_encode($detail);
    	if($total > 0){
    		$bill->save();
    	}
    	else{
    		echo "<script type='text/javascript'>
				alert('Giỏ hàng của bạn rỗng!');
				window.location = '".url('/')."' 
			</script>";
    	}
    	
    	Cart::destroy();

    	echo "<script type='text/javascript'>
				alert('Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ với bạn sớm nhất!');
				window.location = '".url('/')."' 
			</script>";
    }

    public function deleteAllCart(){
    	Cart::destroy();
    	return redirect()->back()->with('mess','Đã xóa giỏ hàng');
    }

    public function thanhtoan(){
    	$bank = DB::table('bank_account')->get();
    	$product_cart= Cart::content();
    	$total = $this->getTotalPrice();
		return view('templates.thanhtoan_tpl',compact('bank','product_cart','total'));
	}
    public function loadDistrictByProvince($id){
    	$district = District::where('province_id',$id)->get();
    	// dd($district);
    	foreach($district as $item){
    		echo "<option value='".$item->id."'>".$item->district_name."</option>";
    	}
    }
    
    public function SapXep(Request $request){
    	$result = DB::table('products')
    			->join('product_categories','products.cate_id','=','product_categories.id')
    			->select('products.id', 'products.name as productName','products.alias as productAlias','products.photo as productPhoto','products.price as productPrice');

    	if ($request->cate) {
    		$result = $result->where('products.cate_id', $request->cate);
    	}
    	if ($request->price) {
    		$result = $result->whereBetween('products.price', array(0, $request->price));
    	}

    	$result = $result->orderBy('products.id', $request->sort ? $request->sort : 'asc')->paginate(12);
    	return response()->json([
    		'paginator'  => (String) $result->render(),
    		'data'		 => json_decode(json_encode($result))->data,
    	]);
    }

    public function getProductByCate($alias){
    	$cate_pro = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderby('id','asc')->get();
    	$categoryDetail = ProductCate::select('name','alias','id','parent_id')->where('alias', $alias)->first();
    	$products = $categoryDetail->products;

    	return view('templates.cateproduct_tpl', compact('categoryDetail','cate_pro','products'));
    }
    public function filter(Request $requset){
    	$price = explode(' - ', $requset->price_filter);
    	dd($price);
    }

    public function noiThat()
    {
    	$sliders = DB::table('slider')->where('com','gioi-thieu')->get();
    	$categories = DB::table('news_categories')->where('com','noi-that')->get();
    	$mota = DB::table('about')->where('com','noi-that')->first();
    	$hotProject = DB::table('news')->where('com','noi-that')->where('noibat',1)->take(15)->get();
    	$com = 'noi-that';
    	$steps = DB::table('lienket')->where('com','noi-that')->orderBy('stt','asc')->get();
    	if(!empty($mota->title)){
			$title = $mota->title;
		}else{
			$title = $mota->name;
		}
		$keyword = $mota->keyword;
		$description = $mota->description;
    	return view('templates.noithat', compact('sliders','categories', 'com','mota','title','keyword','description', 'hotProject','steps'));
    }
    public function ngoaiThat()
    {
    	$sliders = DB::table('slider')->where('com','gioi-thieu')->get();
    	$categories = DB::table('news_categories')->where('com','noi-that')->get();
    	$mota = DB::table('about')->where('com','ngoai-that')->first();
    	$hotProject = DB::table('news')->where('com','ngoai-that')->where('noibat',1)->take(15)->get();
    	$com = 'noi-that';
    	$steps = DB::table('lienket')->where('com','ngoai-that')->orderBy('stt','asc')->get();
    	if(!empty($mota->title)){
			$title = $mota->title;
		}else{
			$title = $mota->name;
		}
		$keyword = $mota->keyword;
		$description = $mota->description;
    	return view('templates.ngoaithat', compact('sliders','categories', 'com','mota','title','keyword','description', 'hotProject','steps'));
    }
    public function listNoiThat($alias){
    	$cate = DB::table('news_categories')->where('com','noi-that')->where('alias',$alias)->first();
    	$data = DB::table('news')->where('com','noi-that')->where('cate_id', $cate->id)->orderBy('stt','asc')->paginate(25);
    	$com = 'noi-that';
    	$sliders = DB::table('slider')->where('com','gioi-thieu')->get();
    	if(!empty($cate->title)){
			$title = $cate->title;
		}else{
			$title = $cate->name;
		}
		$keyword = $cate->keyword;
		$description = $cate->description;
    	return view('templates.listnoithat', compact('cate','data','title','description','keyword','com','sliders'));
    }

    public function detailNoiThat($alias)
    {
    	$project = DB::table('news')->where('status', 1)->where('com','noi-that')->where('alias', $alias)->first();
		$albums = DB::table('images')->where('news_id', $project->id)->orderBy('id','asc')->get();
		$category = DB::table('news_categories')->where('id',$project->cate_id)->first();		
		$projectOther = DB::table('news')->where('status', 1)->where('com', $project->com)->where('cate_id', $project->cate_id)->take(15)->get();
		if(!empty($project->title)){
				$title = $project->title;
			}else{
				$title = $project->name;
			}
			$keyword = $project->keyword;
			$description = $project->description;
		return view('templates.detailNoiThat', compact('project','title','description', 'keyword','projectOther','albums','category'));
    }

    public function listNgoaiThat($alias){
    	$cate = DB::table('news_categories')->where('com','ngoai-that')->where('alias',$alias)->first();
    	// dd($cate);
    	$data = DB::table('news')->where('com','ngoai-that')->where('cate_id', $cate->id)->orderBy('stt','asc')->paginate(25);
    	$com = 'ngoai-that';
    	$sliders = DB::table('slider')->where('com','gioi-thieu')->get();
    	if(!empty($cate->title)){
			$title = $cate->title;
		}else{
			$title = $cate->name;
		}
		$keyword = $cate->keyword;
		$description = $cate->description;
    	return view('templates.listnoithat', compact('cate','data','title','description','keyword','com','sliders'));
    }

    public function detailNgoaiThat($alias)
    {
    	$project = DB::table('news')->where('status', 1)->where('com','ngoai-that')->where('alias', $alias)->first();
		$albums = DB::table('images')->where('news_id', $project->id)->orderBy('id','asc')->get();
		$category = DB::table('news_categories')->where('id',$project->cate_id)->first();		
		$projectOther = DB::table('news')->where('status', 1)->where('com', $project->com)->where('cate_id', $project->cate_id)->take(15)->get();
		if(!empty($project->title)){
				$title = $project->title;
			}else{
				$title = $project->name;
			}
			$keyword = $project->keyword;
			$description = $project->description;
		return view('templates.detailNoiThat', compact('project','title','description', 'keyword','projectOther','albums','category'));
    }

    public function duan()
	{
		$projects = DB::table('news')
		->where([
			'status' => 1,
			'noibat' =>1,
		])
		->orderBy('id', 'desc')->get();
		$partners = DB::table('partner')->where('status',1)->orderBy('id','desc')->get();
		$feedback = DB::table('feedback')->orderBy('id','desc')->get();
		$slogans = DB::table('lienket')->where('com','slogan-project')->where('status',1)->orderBy('stt','asc')->get();
		$com='du-an';
		// Cấu hình SEO
		$title = "Dự án";
		$keyword = "Dự án";
		$description = "Dự án";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.duan', compact('keyword','description','title','img_share','com', 'projects','partners','feedback','slogans'));
	}

	public function listProject($alias)
	{
		$array_alias = explode('-', $alias)	;
        $cateId = array_pop($array_alias);
		$cate = DB::table('news_categories')->where('id', $cateId)->first();
		$ids=[];
		$ids[] = $cate->id;
		$cateChilds = DB::table('news_categories')->where('parent_id', $cate->id)->get();
		
		foreach($cateChilds as $child)
		{
			$ids[] = $child->id;
		}
		$projects = DB::table('news')->where('status', 1)->where('com', 'du-an')->whereIn('cate_id', $ids)->orderBy('stt', 'asc')->paginate(25);
		$sliders = DB::table('slider')->where('com','gioi-thieu')->get();
		if(!empty($cate->title)){
				$title = $cate->title;
			}else{
				$title = $cate->name;
			}
			$keyword = $cate->keyword;
			$description = $cate->description;
		return view('templates.listduan', compact('projects','title','description', 'keyword','cate', 'sliders'));
	}
	public function loadmoreProject(Request $req)
	{
		$offset = $req->offset;
		$limit = $req->limit;
		$projects = DB::table('news')->where('com','du-an')->where('status',1)->skip($offset)->take($limit)->orderBy('stt','asc')->get();
		// dd($projects);
		return view('templates.loadmore_project', compact('projects'));
	}
	public function detailProject($alias)
	{		
		$project = DB::table('news')->where('status', 1)->where('com','du-an')->where('alias', $alias)->first();
		$albums = DB::table('images')->where('news_id', $project->id)->orderBy('id','asc')->get();
		$category = DB::table('news_categories')->where('id',$project->cate_id)->first();		
		$projectOther = DB::table('news')->where('status', 1)->where('com', $project->com)->where('cate_id', $project->cate_id)->take(15)->get();
		if(!empty($project->title)){
				$title = $project->title;
			}else{
				$title = $project->name;
			}
			$keyword = $project->keyword;
			$description = $project->description;
		return view('templates.detailproject', compact('project','title','description', 'keyword','projectOther','albums','category'))	;
	}
	

	public function listVideo($alias){
		
		$cate = DB::table('news_categories')->where('com','video')->where('alias', $alias)->first();
		$cateVideos = DB::table('news_categories')->where('com','video')->where('status', 1)->get();
		$videos = DB::table('news')->where('status', 1)->where('com', 'video')->where('cate_id', $cate->id)->orderBy('stt', 'asc')->paginate(18);
		if(!empty($cate->title)){
				$title = $cate->title;
			}else{
				$title = $cate->name;
			}
			$keyword = $cate->keyword;
			$description = $cate->description;
			$com = 'video';
		return view('templates.listvideo', compact('videos','title','description', 'keyword','cate','cateVideos','com'));
	}

	public function detailVideo($alias)
	{		
		$video = DB::table('news')->where('status', 1)->where('com','video')->where('alias', $alias)->first();		
		$videoOther = DB::table('news')->where('status', 1)->where('com', $video->com)->where('cate_id', $video->cate_id)->take(4)->get();
		if(!empty($video->title)){
				$title = $video->title;
			}else{
				$title = $video->name;
			}
			$keyword = $video->keyword;
			$description = $video->description;
			$com = 'video';
		return view('templates.detailVideo', compact('video','title','description', 'keyword','videoOther','com'));
	}

	public function style($alias)
	{		
       	$array_alias = explode('-', $alias)	;
        $cateId = array_pop($array_alias);	
		$cate = DB::table('news_categories')->where('status',1)->where('com','phongcach')->where('id', $cateId)->first();
		
		$cateChilds = DB::table('news_categories')->where('status',1)->where('com','phongcach')->where('parent_id', $cateId)->get();
		
		$array_cate = [];
		if($cate){
			$array_cate[] = $cate->id;	
		}
		
		if($cateChilds){
			foreach($cateChilds as $cate_id){
				$array_cate[] = $cate_id->id;
			}
		}

		$styles = DB::table('news')->where('com','phongcach')->where('status',1)->whereIn('cate_id', $array_cate)->paginate(12);
		if(!empty($cate->title)){
				$title = $cate->title;
			}else{
				$title = $cate->name;
			}
			$keyword = $cate->keyword;
			$description = $cate->description;
			$com='phongcach';
		return view('templates.style', compact('cate', 'cateChilds', 'styles', 'description', 'keyword', 'title','cates','cateSam', 'com'));
	}

	public function detailStyle($alias)
	{
		$data = DB::table('news')->where('status',1)->where('alias', $alias)->where('com','phongcach')->first();
		$cate_data = DB::table('news_categories')->where('id', $data->cate_id)->first();
		$categories = DB::table('news_categories')->where('parent_id', $cate_data->parent_id)->get();
		$post = DB::table('news')->where('status',1)
		->where('cate_id', $data->cate_id)
		->where('com','phongcach')
		->take(20)
		->get();
		if(!empty($data->title)){
				$title = $data->title;
			}else{
				$title = $data->name;
			}
			$keyword = $data->keyword;
			$description = $data->description;
		return view('templates.detailStyle', compact('data', 'description','title', 'keyword','cate_data', 'categories', 'post'));
	} 	

	// public function processDesign()
	// {
		
	// 	return view('templates.processDesign');
	// }


}
