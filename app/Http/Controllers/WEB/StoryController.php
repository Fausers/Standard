<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\OurStory;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function index()
    {
        $our_story = OurStory::first();
        return view('office.about.our_story',compact('our_story'));
    }
    public function update(Request $request)
    {
        $story = OurStory::first();


        if (!isset($story->id)){
            OurStory::create($request->all());
        }else{
            $story->update($request->all());
        }

        return redirect()->back();
    }
}
