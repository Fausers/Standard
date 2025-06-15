<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Post;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('office.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$request['title'],'posts');

        $request['user_id'] = Auth::user()->id;

        $post = Post::create($request->all());
        return redirect()->route('admin.post.edit',$post->id);
    }

    public function updateDesc(Request $request,$id)
    {
        $post = Post::find($id);

        $post->description = str_replace('"','',$request['doc']);
        $post->save();

        return "Saved";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('office.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$request['title'],'posts');

        $post = Post::find($id);

        $post->update($request->all());

        return redirect()->route('admin.posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect()->back();
    }
}
