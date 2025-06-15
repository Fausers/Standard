<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Category;
use App\Models\WEB\Event;
use App\Models\WEB\EventImage;
use App\Models\WEB\EventSpeaker;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $events = Event::get();
        return view('office.event.index',compact('events','categories'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).$image->cleanString($request['title']),'events');

        $event = Event::create($request->all());
        return redirect()->route('admin.event.edit',$event->id);
    }

    public function edit($id)
    {
        $categories = Category::get();
        $event = Event::find($id);
        return view('office.event.edit',compact('event','categories'));
    }

    public function update(Request $request,$id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'events');


        $event = Event::find($id);

        if (!$request['featured'])
            $request['featured'] = 0;

        if ($request['car_images']){
            foreach ($request['car_images'] as $c_image){
                $image = new ImageTrait;
                $cc_image = new EventImage();
                $cc_image->image = $image->uploadIMage($c_image,"1920,1080",rand(100,999).str_replace(' ','_',$event->title),'event_images');
                $cc_image->thumb = $image->uploadIMage($c_image,"500,400",rand(100,999).str_replace(' ','_',$event->title),'event_images');
                $event->images()->save($cc_image);
            }
        }

        $event->update($request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->back();
    }

//    Speakers
    public function storeSpeaker(Request $request)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"400,400",rand(100,999).$image->cleanString($request['name']),'event_speakers');

        EventSpeaker::create($request->all());
        return redirect()->route('admin.event.edit',$request['event_id']);
    }

    public function destroySpeaker($id)
    {
        EventSpeaker::destroy($id);
        return redirect()->back();
    }

    public function updateSpeaker(Request $request,$id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"400,400",rand(100,999).$image->cleanString($request['name']),'event_speakers');

        $event = EventSpeaker::find($id);
        $event->update($request->all());

        return redirect()->back();
    }

//    Description
    public function updateDesc(Request $request,$id)
    {
        $event = Event::find($id);

        $event->description = str_replace('"','',$request['doc']);
        $event->save();

        return "Saved";
    }


// Image
    public function destroyImage($id)
    {
        EventImage::destroy($id);
        return redirect()->back();
    }

//    Category
    public function categories()
    {
        $categories = Category::get();
        return view('office.categories',compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$image->cleanString($request['title']),'events');

        Category::create($request->all());
        return redirect()->back();
    }

    public function updateCategory(Request $request,$id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$image->cleanString($request['title']),'events');

        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->back();
    }

    public function deleteCategory($id)
    {
       Category::destroy($id);
        return redirect()->back();
    }
}
