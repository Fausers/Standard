<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::get();
        return view('office.resource.index',compact('resources'));
    }
    
    public function store(Request $request)
    {
        $path = Storage::putFile('public/pdf', $request['file'], 'public');

        $resource= new Resource();
        
        $resource->title=$request->title;
        $resource->category=$request->category;
        $resource->file_location=$path;
        $resource->save();


        //$resource = Resource::create($request->all());
        return redirect()->route('admin.resources');
    }
    
    public function destroy($id)
    {
        Resource::destroy($id);
        return redirect()->back();
    }



}
