<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Impact;
use App\Traits\ImageTrait;



class ImpactController extends Controller
{

    public function index()
    {
        $impacts = Impact::get();
        return view('office.impact.index',compact('impacts'));
    }

    public function store(Request $request)
    {
        $icon = new ImageTrait;
        if (isset($request['file']))
            $request['icon'] = $icon->uploadIMage($request['file'],"1920,1080",rand(100,999).$icon->cleanString($request['title']),'impacts');

        $impact = Impact::create($request->all());
        return redirect()->route('admin.impacts',$impact->id);
    }

    public function edit($id)
    {
        $impact = Impact::find($id);
        return view('office.impact.edit',compact('impact'));
    }

    public function update(Request $request,$id)
    {
        $icon = new ImageTrait;
        if (isset($request['file']))
            $request['icon'] = $icon->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'impacts');


        $impact = Impact::find($id);

        // if (!$request['featured'])
        //     $request['featured'] = 0;

        // if ($request['car_images']){
        //     foreach ($request['car_images'] as $c_image){
        //         $image = new ImageTrait;
        //         $cc_image = new EventImage();
        //         $cc_image->image = $image->uploadIMage($c_image,"1920,1080",rand(100,999).str_replace(' ','_',$impact->title),'event_images');
        //         $cc_image->thumb = $image->uploadIMage($c_image,"500,400",rand(100,999).str_replace(' ','_',$impact->title),'event_images');
        //         $impact->images()->save($cc_image);
        //     }
        // }

        $impact->update($request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        Impact::destroy($id);
        return redirect()->back();
    }



//    Description
    public function updateDesc(Request $request,$id)
    {
        $impact = Impact::find($id);

        $impact->description = str_replace('"','',$request['doc']);
        $impact->save();

        return "Saved";
    }


}
