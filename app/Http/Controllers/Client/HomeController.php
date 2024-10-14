<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function showPostsByTag($tagId)
    {
        // Lấy tag theo ID và kèm theo các bài đăng
        $Bag = Tag::with('posts')->findOrFail($tagId);

        // Truy cập bài đăng của tag
        $posts = $Bag->posts;

        $tag = Tag::withCount('posts')->get();


        return view('frontends.tag1', compact('tag', 'posts', 'Bag'));
    }

    public function dashboard()
    {
        $query = Post::with('tags')->orderBy('created_at', 'desc')->get();
        // dd($query);
        $hotPost = Post::orderBy('view', 'desc')->limit(3)->get();
        $latestPost = Post::orderBy('updated_at', 'asc')->oldest('id')->limit(1)->get();
        $popularPost = Post::orderBy('view', 'desc')->limit(1)->get();
        $tag = Tag::withCount('posts')->get();
        return view('frontends.home', ['query' => $query, 'hot' => $hotPost, 'latest' => $latestPost, 'popolar' => $popularPost, 'tag' => $tag]);
    }

    public function detail($id)
    {
        $data = Post::with('tags')->findOrFail($id);

        $tag = Tag::withCount('posts')->get();
        $data->increment('view');

        return view("frontends.detail", compact('data', 'tag'));
    }

    public function header($tagId)
    {
        $Bag = Tag::with('posts')->findOrFail($tagId);

        // Truy cập bài đăng của tag
        $posts = $Bag->posts;

        $tag = Tag::withCount('posts')->get();

        return view("frontends.layouts.patials.header", compact('tag', 'posts', 'Bag'));
    }

    public function navbar($tagId)
    {
        $Bag = Tag::with('posts')->findOrFail($tagId);

        // Truy cập bài đăng của tag
        $posts = $Bag->posts;

        $tag = Tag::withCount('posts')->get();
        return view("frontends.layouts.patials.navbar", compact('tag', 'posts', 'Bag'));
    }


    public function contactView(){
        $tag = Tag::withCount('posts')->get();
        return view('frontends.contact',compact('tag'));
    }
}
