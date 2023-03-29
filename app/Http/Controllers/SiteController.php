<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function blog(){
        return view('blog');
    }
    public function post_detail($id){
        $post_id=$id;
        return view('blogs_details', compact('post_id'));
    }
    
    public function post_list(){
        $response = Http::get('http://localhost:3000/api/posts');
        $posts= $response ->object();

        return view ('post_list', compact('posts'));
    }

    // public function product_list(){
        
    //     return view('products_list');
    // }
    // public function employees_list(){
        
    //     return view('employees_list');
    // }
}
