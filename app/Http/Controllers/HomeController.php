<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public $name;
    public $body;
    public $id;
    public function show(){
        return view('home');
    }
    public function view(){
        $post = Post::orderBy('id','DESC')->get();
        return view('view',compact('post'));
    }
    public function deletePost($id){
        Post::where('id',$id)->delete();
        session()->flash('delete_item','Item has been deleted successfully');
        return back();

    }
    public function SingleView($id){
        $posts = Post::where('id',$id)->first();
        return view('single-view',['post'=>$posts]);
    }
    public function formShow(){
        return view('form');
    }
    public function InsertedItem(Request $request){
        $post = new Post;
        $post->name = $request->name;
        $post->body = $request->body;
        $post->save();
        $request->session()->flash('inseted','item inserted has been successfully');
        return view('form');
    }
    public function EditShowPost($id){
        $post = Post::where('id', $id)->first();
        return view('edit-form',compact('post'));
    }
    public function UpdateItem(Request $request){
        $post = new Post;
        $post->name = $request->name;
        $post->body = $request->body;
        $post->save();
        $request->session()->flash('updated_successfully', 'item has been updated successfully');
        return view('home');
    }
}
