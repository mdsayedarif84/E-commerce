<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Brand;
use App\Models\product;
use Illuminate\Http\Request;

class MyShopController extends Controller{
    public function index(){
        $newProducts       =   Product::where('publication_status',1)
                            ->orderBy('id','DESC')
                            ->take(8)
                            ->get();
        return view('front-end.home.home',
            ['newProducts'     =>  $newProducts,]);
    }
//    public function frontEndLoginCheck(){
//        return view('front-end.front-login.front-end-login');
//    }
    public function categoryProduct($id){
        $categoryProducts     =   Product::where('category_id',$id)
                            ->where('publication_status',1)
                            ->get();
        return view('front-end.category.category-product',[
            'categoryProducts'=>$categoryProducts
        ]);
    }
    public function productDetails($id){
        $product  =  Product::find($id);
        return view('front-end.product-details.product-details',compact('product'));
    }
//    public function mailUs(){
//        return view('front-end.mails.mails-us');
//    }
    public function register(){
        return view('front-end.register.register');
    }


}
