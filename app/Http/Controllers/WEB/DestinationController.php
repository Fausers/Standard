<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Destination;
use App\Models\WEB\DestinationAttraction;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::get();
        return view('office.destination.destinations',compact('destinations'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).$image->cleanString($request['title']),'destinations');

        $destination = Destination::create($request->all());
        return redirect()->route('admin.destination.edit',$destination->id);
    }

    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('office.destination.edit',compact('destination'));
    }

    //    Description
    public function updateDesc(Request $request,$id)
    {
        $event = Destination::find($id);

        $event->description = str_replace('"','',$request['doc']);
        $event->save();

        return "Saved";
    }

    public function update(Request $request,$id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'safaris');


        $destination = Destination::find($id);

        $destination->update($request->all());

        return redirect()->route('admin.destinations');
    }

    public function destroy($id)
    {
        Destination::destroy($id);
        return redirect()->back();
    }

    public function storeAttraction(Request $request){
        $image = new ImageTrait;
        $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'destinations/attractions');

        DestinationAttraction::create($request->all());

        return redirect()->back();
    }

    public function updateAttraction(Request $request,$id){

        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'destinations/attractions');

        $attraction = DestinationAttraction::findOrFail($id);
        $attraction->update($request->all());

        return redirect()->back();
    }

    public function destroyAttraction($id){
        DestinationAttraction::destroy($id);
        return redirect()->back();
    }
}
