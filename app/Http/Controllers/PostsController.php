<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Requests\PostsRequest;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        return view('posts.index', [
            'posts' => Post::latest()->get(),
        ]);
    }
    public function create(): View{
        return view('posts.create');
    }
    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Post $post){
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);
        return redirect('/home/'.$post->id);
    }
    public function store(PostsRequest $request){
        $data = $request->validated();
        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->save();

        return redirect('/home/'.$post->id);
    }
    public function display(Post $post): View{
        return view('posts.display', ['post' => $post]);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/home');
    }
}
