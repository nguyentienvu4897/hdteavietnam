<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\website\Video;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use  App\models\ReviewCus;
use App\models\PageContent;
use App\models\ServiceCategory;
use App\models\Services;
use App\models\website\Prize;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerqc'] = BannerAds::where('status',1)->get(['name','image','id']);
        $data['hotnews'] = Blog::where([
            'status'=>1, 'home_status'=>1
        ])->orderBy('id','DESC')->limit(12)->get(['id','title','slug','created_at','image','description']);
        $data['aboutUs'] = PageContent::where(['language'=>'vi','slug'=> 'gioi-thieu'])->first();
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['prizes'] = Prize::where(['status'=>1])->get();
        $data['reviewCus'] = ReviewCus::where(['status'=>1])->get();
        $data['services'] = Services::where('status',1)->get();
        $data['homeProducts'] = Product::where(['status'=>1])->get(['id','images','name','slug','cate_slug','price','discount']);
        $data['serviceCategories'] = ServiceCategory::where('status',1)->get();
        return view('home',$data);
    }
}
