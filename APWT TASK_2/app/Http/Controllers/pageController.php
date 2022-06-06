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
    public function create(){
        return view('pages.create');
    }
    public function createSubmit(Request $req){

        //$req->validate([],[]);
        // regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i
        $this->validate($req,
             [
                "name"=>"required|max:10",
                "id"=>"required| numeric",
                "price"=>"required| numeric",
             ],
             [
                 "name.required"=> "Please provide your name",
                 "name.max"=> "Name should not exceed 10 characters"
             ]
            );

            // $s1 = new Student();
            // $s1->st_id = $req->id;
            // $s1->name = $req->name;
            // $s1->dob = $req->dob;
            // $s1->email = $req->email;
            // $s1->save(); //insert query will run

        return "Submitted with valid value";
    }
    
    
}