<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Category;
use App\Models\WEB\Safari;
use App\Models\WEB\SafariImage;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SafariController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $safaris = Safari::get();
        return view('office.safari.index',compact('safaris','categories'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).$image->cleanString($request['title']),'safaris');

        $safari = Safari::create($request->all());
        return redirect()->route('admin.safari.edit',$safari->id);
    }

    public function edit($id)
    {
        $categories = Category::get();
        $safari = Safari::find($id);
        return view('office.safari.edit',compact('safari','categories'));
    }

    public function update(Request $request,$id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'safaris');


        $safari = Safari::find($id);

        if (!$request['featured'])
            $request['featured'] = 0;

        if ($request['car_images']){
            foreach ($request['car_images'] as $c_image){
                $image = new ImageTrait;
                $cc_image = new SafariImage();
                $cc_image->image = $image->uploadIMage($c_image,"1920,1080",rand(100,999).str_replace(' ','_',$safari->title),'event_images');
                $cc_image->thumb = $image->uploadIMage($c_image,"500,400",rand(100,999).str_replace(' ','_',$safari->title),'event_images');
                $safari->images()->save($cc_image);
            }
        }

        $safari->update($request->all());

        return redirect()->route('admin.safaris');
    }

    public function destroy($id)
    {
        Safari::destroy($id);
        return redirect()->back();
    }

//    Description
    public function updateDesc(Request $request,$id)
    {
        $safari = Safari::find($id);

        $safari->description = str_replace('"','',$request['doc']);
        $safari->save();

        return "Saved";
    }


// Image
    public function destroyImage($id)
    {
        SafariImage::destroy($id);
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
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$image->cleanString($request['title']),'safaris');

        Category::create($request->all());
        return redirect()->back();
    }

}
