<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Safety;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SafetyController extends Controller
{
    public function index(){
        $safety = Safety::first();
        if(!$safety){
            $safety = new Safety();
        }

        return view('office.safety.safety', compact('safety'));
    }

    public function update(Request $request){
        $safety = Safety::first();

        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"1920,1080",rand(100,999).str_replace(' ','_',$request['title']),'safety');

        if(!$safety){
            Safety::create($request->all());
        }else{
            $safety->update($request->all());
        }

        return redirect()->back();
    }

    public function updateDesc(Request $request)
    {
        $event = Safety::first();

        $event->description = str_replace('"','',$request['doc']);
        $event->save();

        return "Saved";
    }
}
