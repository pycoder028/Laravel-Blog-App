<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $post = Post::all();
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('home.master',compact('post'));
            }else if($usertype == 'admin'){
                return view('admin.adminhome');
            }else{
                return redirect()->back();
            }
        }
    }   // end method here

    public function homepage(){

        $post = Post::all();

        return view('home.master',compact('post'));
    }   // end method here
    


}
