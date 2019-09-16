<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $all=Product::all();
        return view('home',compact('all'));
    }

    public function detail($id){
        $single=Product::find($id);
        return view ('products/product_detail',compact('single'));
    }
    public function add(Request $request,$id){
        $items=array();

        if($request->session()->has('items')){
            $items=$request->session()->get('items');
                if(!in_array($id,$items)){
                    array_push($items,$id);
                }
        }
        else{
            array_push($items,$id);
        }
        $request->session()->put('items',$items);

        $all=Product::all();
        return view('home',compact('all'));

    }
    public function clear_cart(Request $request){
        $request->session()->flush('items');
        $all=Product::all();
        return view('home',compact('all'));
    }
    public function all_cart(Request $request){
            $all_carts=array();
            $all=$request->session()->get('items');
            for($i=0;$i<count($all);$i++){
                $cart=Product::find($all[$i]);
                array_push($all_carts,$cart);
            }

        return view('products.cart',compact('all_carts'));
    }
}

