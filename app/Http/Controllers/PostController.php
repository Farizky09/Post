<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post,$id)
    {
        $comment = Comment::where('id_post','=',$id)->get();
        return view('post', [
            "title" => "Single Post",
            "comments"=>$comment,
            "post" => $post
        ]);
    }
    public function dashboard(Request $request)
    {

        return view('admin', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }
    public function insert(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $data['slug'] = Str::slug($data['title']);
        Post::create($data);

        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $data =  $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $data['slug'] = Str::slug($data['title']);
        $post = Post::find($id)->update($data);
        return redirect()->back();
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
