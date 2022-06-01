<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function product()
    {
        $products = array();
        for($i=1;$i<=10;$i++){
            $product = array(
                "id"=>$i,
                "name"=>"Product $i",
                "price"=>"20 Taka"
            );
            $products[] = (object)$product;
        }
        return view('pages.product')
        ->with('products',$products);
    }
    public function team()
    {
        return view('pages.team');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function contactus()
    {
        return view('pages.contactus');
    }
    
    
}