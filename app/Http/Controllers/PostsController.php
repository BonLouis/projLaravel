<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use App\Post;

class PostsController extends Controller
{

    public function index() {
        // $posts = Post::published()->get();
        // $posts = Post::searchByTitle('bonjour')->get();
        $posts = Post::published()->get();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $title = Input::get('title');
        $content = Input::get('content');

        $separator = '-';
        $slug = str_slug($title, $separator);

        Post::firstOrCreate(compact('title', 'content', 'slug'));

        $posts = Post::get();

        return view('posts.index', compact('posts'));
    }

    public function show($slug) {
        $posts = Post::published()->where('slug', $slug)->get();
        return view('posts.index', compact('posts'));
        dd($posts);
    }

    public function edit($slug) {
        $post = Post::where('slug', $slug)->get();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $separator = '-';
        $post->slug = str_slug($request->title, $separator);
        $post->update($request->all());
        return redirect(route('news.index'));
    }

    public function confirmDestroy($post) {
        return view('posts.confirmDestroy', compact('post'));
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect(route('news.index'));

    }

}
