<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Slide;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slide::get();
        return view('office.slides.index',compact('slides'));
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
            $request['image'] = $image->uploadIMage($request['file'],"1080,806",rand(100,999).'slides','slides');

        Slide::create($request->all());

        return redirect()->route('admin.slides');
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
    public function edit( $id)
    {
        $slide = Slide::find($id);
        return view('office.slides.create',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);

        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1080,806",rand(100,999).'slides','slides');

        $slide->update($request->all());

        return redirect()->route('admin.slides');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Slide::destroy($id);
        return redirect()->back();
    }
}
