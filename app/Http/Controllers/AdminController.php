<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page(){

        return view('admin.post_page');
    } // end method

    public function add_post(Request $request){

        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $post->post_status = 'active';
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

        return redirect()->back()->with('message', 'Post Added Successfully');

    } // end method

    public function show_post(){

        $post = Post::all();

        return view('admin.show_post',compact('post'));
    } // end method
    
    public function delete_post($id){
        $post = Post::findOrfail($id);
        $post->delete();

        return redirect()->back()->with('message','Post Deleted Successfully');
    } // end method

    public function edit_post($id){

        $post = Post::findOrFail($id);

        return view('admin.edit_page',compact('post'));
    } // end method
    
    public function update_post(Request $request ,$id){

        $data = Post::findOrFail($id);

        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message','Post Updated Successfully');
    } // end method


}
