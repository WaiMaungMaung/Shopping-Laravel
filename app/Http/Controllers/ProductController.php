<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductInsertFormRequest;
use App\Post;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInsertFormRequest $request)
    {
        $files=$request->file('photo');
        $file_all=array();
        foreach ($files as $file){
            $file_name=uniqid().'_'.$file->getClientOriginalName();
//
            array_push($file_all,$file_name);
            Storage::put('new_uploads/'.$file_name,file_get_contents($file));
        }


        Product::create([
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'imgs'=>serialize($file_all)
        ]);

        $data=[
          'title'=>'new lesson from unknow',
            'content'=>'new content from unknown',

        ];
        Mail::send(email.$data,function($message){
            $sub="tesing eamil";
            $message->to('mgwaimaungmaung@gmail.com','WaiMG')->subject($sub);
        });

        return redirect('products/create')->with('status','succes insert');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
