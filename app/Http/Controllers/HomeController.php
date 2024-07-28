<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Alert;

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

    public function post_details($id){

        $post = Post::findOrFail($id);

        return view('home.post_details',compact('post'));
    }   // end method here

    public function create_post(){

        return view('home.create_post');
    }   // end method here

    public function user_post(Request $request){

        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $post->post_status = 'pending';
        $post->user_id = $userid;
        $post->name = $name;
        $post->usertype = $usertype;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image = $imagename;
        }

        $post->save();

        Alert::success('Congrats','You have Added the data Successfully');

        return redirect()->back();

    }   // end method here
    


}
