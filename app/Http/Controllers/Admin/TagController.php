<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Validation\Rule;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view("backends.tags.index", compact("tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backends.tags.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        try {

            $data = $request->all();
            Tag::create($data);

            return back()->with("success", "Thêm thành công thẻ mới");
        } catch (\Throwable $th) {

            return back()->with("success", false);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view("backends.tags.edit", compact("tag"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $data = $request->validate([
            "name" => [
                "required",
                Rule::unique('tags')->ignore($tag->id)
            ]
        ]);

        try {

            $tag->update($data);

            return back()->with("success", "Sửa thành công thẻ mới");
        } catch (\Throwable $th) {

            return back()->with("success", false);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        try {
            $tag->delete();

            return back()->with("success", "Xóa thành công thẻ mới");

        } catch (\Throwable $th) {
            return back()->with("success", false);

        }
    }
}
