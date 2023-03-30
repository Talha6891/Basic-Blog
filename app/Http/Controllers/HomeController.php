<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $post = Post::all();
        return view('home.index',compact('post'));
    }

    public function upload(Request $request){
        $data = new Post();
        $data->username = Auth::user()->name;
        $data->description = $request->description;
    
        /* Image insert part */
        $image = $request->file('image');

        if($image){
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('post',$imageName);
        $data->image = $imageName;
        /* Image insert part */
        }
        
        $data->save();
        return redirect()->back();
    }    

    public function view_post(){

        $name = Auth::user()->name;
        $post = Post::where('username',$name)->get();
        return view('post_page',compact('post'));
    }

    public function delete_post($id){
        
        $data = Post::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function update_post($id){

        $data = Post::find($id);
        return view('updatepost',compact('data'));
    }

    public function confirm_update(Request $request, $id){

        $post = Post::find($id);
        $post->description = $post->description;
        /* Image insert part */
        $image = $request->file('image');

        if($image){
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('post',$imageName);
        $post->image = $imageName;
        /* Image insert part */
        }
        $post->save();
        return redirect()->back();
    }
}
