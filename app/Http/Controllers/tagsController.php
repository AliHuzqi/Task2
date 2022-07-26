<?php

namespace App\Http\Controllers;

use App\Models\file;
use App\Models\file_tags;
use App\Models\tags;
use Illuminate\Http\Request;

class tagsController extends Controller
{
    //

    public  function index(){

        $tags = tags::all();
        return view('tags.index',compact(['tags']));
    }

    public function create(){
        return view('tags.create');
    }

    public function store(Request $request){
        tags::create([
            "name"=>$request->name,
        ]);
        return redirect()->route('tags.index');
    }
    public function edit(Request $request){
        $tag = tags::find($request->id);
        return view('tags.update',compact(['tag']));
    }

    public function update(Request $request){
        tags::where('id',$request->id)->update([
            'name'=>$request->name
        ]);
        return redirect()->route('tags.index');
    }

    public function delete(Request $request){

        $tags_usage = file_tags::where('tag_id',$request->id)->count();
        if($tags_usage > 0){
            return back()->with('error',' you cant delete this tag becase it have relations ');
        }else{
            tags::where('id',$request->id)->delete();
        }
        return redirect()->route('tags.index');

    }


}
