<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WEB\Category;
use App\Models\WEB\Project;
use App\Models\WEB\ProjectImage;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        $categories = Category::get();
        return view('office.project.index',compact('projects','categories'));
    }

    public function store(Request $request)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$request['title'],'projects');

        $request['user_id'] = Auth::user()->id;

        $project = Project::create($request->all());
        return redirect()->route('admin.project.edit',$project->id);
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('office.project.edit',compact('project'));
    }

    public function update(Request $request,$id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"700,450",rand(100,999).$request['title'],'projects');

        $project = Project::find($id);

        $project->update($request->all());

        if ($request['car_images']){
            foreach ($request['car_images'] as $c_image){
                $image = new ImageTrait;
                $cc_image = new ProjectImage();
                $cc_image->image = $image->uploadIMage($c_image,"1920,1080",rand(100,999).str_replace(' ','_',$project->title),'event_images');
                $cc_image->thumb = $image->uploadIMage($c_image,"500,400",rand(100,999).str_replace(' ','_',$project->title),'event_images');
                $project->images()->save($cc_image);
            }
        }

        return redirect()->route('admin.projects');
    }

    public function updateDesc(Request $request,$id)
    {
        $project = Project::find($id);

        $project->description = str_replace('"','',$request['doc']);
        $project->save();

        return "Saved";
    }

    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->back();
    }

    public function destroyImage($id)
    {
        ProjectImage::destroy($id);
        return redirect()->back();
    }

    public function nyota()
    {
        return view('yoicot.projects.nyota');
    }

    public function academy()
    {
        return view('yoicot.projects.academy');
    }
}
