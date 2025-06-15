<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Gallery;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('office.gallery.index',compact('galleries'));
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
        if (isset($request['file'])){

            $uploaded =  $image->uploadPlaneImage($request['file'],rand(100,999).$request['title'],'gallery');
            $request['image'] =$uploaded['image'];
            $request['thumb'] = $uploaded['thumb'];
            $request['portrait'] = $uploaded['portrait'];
        }

        Gallery::create($request->all());

        return redirect()->route('admin.gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect()->route('admin.gallery');
    }
}
