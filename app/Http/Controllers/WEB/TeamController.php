<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\WEB\Team;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::get();
        return view('office.team.index',compact('team'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"342,354",rand(100,999).$request['title'],'projects');


        $team = Team::create($request->all());
        return redirect()->route('admin.team.edit',$team->id);
    }

    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('office.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = new ImageTrait;
        if (isset($request['file']))
            $request['image'] = $image->uploadIMage($request['file'],"342,354",rand(100,999).$request['title'],'projects');

        $team = Team::find($id);

        $team->update($request->all());

        return redirect()->route('admin.team');
    }

    public function updateDesc(Request $request,$id)
    {
        $team = Team::find($id);

        $team->bio = str_replace('"','',$request['doc']);
        $team->save();

        return "Saved";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::destroy($id);
        return redirect()->back();
    }
}
