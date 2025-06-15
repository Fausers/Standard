<?php

namespace App\Http\Controllers;

use App\Models\WEB\Destination;
use App\Models\WEB\Event;
use App\Models\WEB\Category;
use App\Models\WEB\Gallery;
use App\Models\WEB\OurStory;
use App\Models\WEB\Post;
use App\Models\WEB\Project;
use App\Models\WEB\Safari;
use App\Models\WEB\Safety;
use App\Models\WEB\Slide;
use App\Models\WEB\Team;
use App\Models\WEB\Resource;
use App\Models\Impact;
use App\Models\WEB\UserTestimony;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function welcome()
    {
        return view('soon');

        $slides = Slide::get();
        $testimonies = UserTestimony::get();
        $projects = Project::limit(4)->get();
        $posts = Post::orderBy('id','desc')->limit(3)->get();
        $safaris = Safari::orderBy('id','desc')->limit(3)->get();
        return view('welcome',compact('slides','projects','posts','safaris','testimonies'));
    }

    public function about()
    {
        $impacts = Impact::get();
        $teams = Team::get();
        $testimonies = UserTestimony::get();
        $our_story = OurStory::first();

        return view('about',compact('teams','impacts','our_story','testimonies'));
    }

    public function destinations(){
        $destinations = Destination::where('description','NOT LIKE', null)->get();
        $safaris = Safari::where('description','NOT LIKE', null)->limit(10)->get();

        return view('destinations',compact('destinations','safaris'));
    }

    public function destination($id){
        $destination = Destination::findOrFail($id);
        $safaris = Safari::where('description','NOT LIKE', null)->limit(10)->get();

        return view('destination',compact('destination','safaris'));
    }

    public function safety(){
        $safety = Safety::first();
        if (!$safety){
            $safety = new Safety();
        }
        return view('safety',compact('safety'));
    }

    public function safaris($category)
    {
        if ($category != 'All'){
            $safaris = Category::find($category)->safaris;
        }else{
            $safaris = Safari::get();
        }


        return view('safaris',compact('safaris'));
    }

    public function safari($id)
    {
        $safari = Safari::find($id);
        return view('safari',compact('safari'));
    }

    public function teamMember($id, $name)
    {
        $member = Team::find($id);
        return view('team_member',compact('member'));
    }

    public function ourwork()
    {
        $categories = Category::get();
        return view('ourwork',compact('categories'));
    }

    public function resources()
    {
        $resources = Resource :: get();
        return view('resources',compact('resources'));
    }

    public function events()//News tab
    {
        $events = Event::get();
        $posts = Post::where('desc','!=', "NULL")->get();
        $galleries = Gallery::get();
        return view('events',compact('events','posts','galleries'));
    }

    public function event($id,$title)
    {
        $event = Event::find($id);
        $events = Event::get();

        return view('event',compact('event','events'));
    }

    public function gallery()
    {
        $gallery = Gallery::get();
        return view('gallery',compact('gallery'));
    }

    public function projects()
    {
        $projects = Project::where('desc','!=', "NULL")->get();
        return view('projects',compact('projects'));
    }

    public function project($id,$title)
    {
        $project = Project::find($id);
        $resents = Project::where('desc','!=', "NULL")->where('id','!=', $id)->get();
        return view('safaris',compact('project','resents'));
    }

    public function posts()
    {
        $posts = Post::where('desc','!=', "NULL")->get();
        return view('posts',compact('posts'));
    }

    public function post($id,$title)
    {
        $post = Post::find($id);
        $resents = Post::where('desc','!=', "NULL")->where('id','!=', $id)->get();
        return view('post',compact('post','resents'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function donate()
    {
        return view('yoicot.donate');
    }

    public function volunteer()
    {
        return view('yoicot.volunteer');
    }
}
