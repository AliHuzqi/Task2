<?php

namespace App\Http\Controllers;

use App\Models\file_tags;
use App\Models\folder;
use App\Models\file;
use App\Models\tags;
use Illuminate\Http\Request;

class foldersController extends Controller
{
    public function index(){
        $folders = folder::all();
        return view('folders.index',compact('folders'));
    }

//    public function search(Request $request){
//
//        $search = $request->input('search');
//
//        $posts = Post::query()
//            ->where('name', 'LIKE', "%{$search}%")
//            ->orWhere('file', 'LIKE', "%{$search}%")
//            ->orWhere('marking', 'LIKE', "%{$search}%")
//            ->get();
//
//        return view('search', compact('posts'));
//    }


    public function create(){
        return view('folders.create');
    }

    public function store(Request $request){
        // من اجل عرض جميع المعلومات المرسله من الفورم للتحقق من انه تم ارسالها فقط من اجل التحقق
        //dd($request->all());
        //folder::create($request->all());
        folder::create([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);
        return redirect()->route('folders.index');
    }

    public  function edit(Request $request){
        $folder = folder::find($request->id);
        return view('folders.edit',compact(['folder']));
    }
    public  function update(Request $request){
        folder::where('id',$request->id)->update([
            'name'=>$request->name,
            'status'=>$request->status,


        ]);
        return redirect()->route('folders.index');
    }

    public  function delete(Request $request){
        folder::where('id',$request->id)->delete();
        return redirect()->route('folders.index');
    }

    public  function show($id){
        $folder = folder::where('id',$id)->first();
        $files = file::where('folder_id',$id)->with(['FileTags.tag'])->get();


        return view('folders.show',compact(['files','folder']));
    }

}



//getClientOriginalName();
