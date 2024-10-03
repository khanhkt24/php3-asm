<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('tags')->latest()->get();
        return view("backends.posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::pluck('name', 'id')->all();
        return view('backends.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {

                $data = [
                    'name'=>$request->name,
                    'title'=>$request->title,
                    'date_add'=>$request->date_add,
                    'main_content'=>$request->main_content,
                ];


                if ($request->hasFile('image')) {
                    $data['image'] = Storage::put('posts', $request->file('image'));
                }

                $posts = Post::query()->create($data);


                $posts->tags()->sync($request->tags);
            });

            return back()->with('success', 'Thêm thành công bài đăng');
        } catch (\Throwable $th) {

            if ($request->hasFile('image')) {
                Storage::delete($request->hasFile('image'));
            }

            return back()->with('errors', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load('tags')->all();
        $tags = Tag::pluck('name', 'id')->all();
        $post->increment('view');
        return view('backends.posts.show', compact('post','tags'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post->load('tags')->all();
        $tags = Tag::pluck('name', 'id')->all();
        $postTag = $post->tags()->pluck('id')->all();
        return view('backends.posts.edit', compact('post','tags','postTag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {

        try {
            DB::transaction(function () use ($request,$post) {

                $data = [
                    'name'=>$request->name,
                    'title'=>$request->title,
                    'date_add'=>$request->date_add,
                    'main_content'=>$request->main_content,
                ];

                if ($request->hasFile('image')) {
                    $data['image'] = Storage::put('posts', $request->file('image'));
                }

                $post::query()->update($data);


                $post->tags()->sync($request->tags);
            });

            return back()->with('success', 'Sửa thành công bài đăng');
        } catch (\Throwable $th) {

            if ($post->hasFile('image') && $request->hasFile('image') && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }

            return back()->with('errors', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {

            DB::transaction(function () use ($post) {
                $post->tags()->sync([]);
                $post->forceDelete();
            });

            return back()->with('success','Xóa thành công');

        } catch (\Throwable $th) {

            if ($post->image && Storage::exists($post->image)) {

                Storage::delete($post->image);

            }
            return back()->with('error', $th->getMessage());

        }

    }
}
