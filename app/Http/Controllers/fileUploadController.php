<?php

namespace App\Http\Controllers;

use App\Models\file;
use App\Models\file_tags;
use App\Models\folder;
use App\Models\tags;
use Illuminate\Http\Request;

class fileUploadController extends Controller
{
    public  function create(){
        $folders = folder::get();
        $tags = tags::all();
        return view('folders.createfile',compact(['folders','tags']));
    }

    public function store(Request $request){
        $files = $request->file('file') ?? [];// هنا نقوم بالفحص اذا كان مافي ملفات نحط مصفوفه فاضيه
        $tags = $request->file_tag;
        foreach ($files as $Uploaded_file){

            $file= $Uploaded_file->getClientOriginalName();
            $filenameWithOutExtension = pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);

            $fileName = time().'_'.$Uploaded_file->getClientOriginalName();
            $filePath = $Uploaded_file->storeAs('uploads', $fileName, 'public');
            $saved_file = file::create([
                "name"=>$filenameWithOutExtension,
                "extension"=>$extension,
                "folder_id"=>$request->folder,
                "file_link"=>'/storage/' . $filePath
            ]);

            foreach ($tags as $tag){
                file_tags::create([
                    'tag_id'=>$tag,
                    "file_id"=>$saved_file->id
                ]);
            }



        }

//        $request->validate([
//            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
//        ]);

//        $fileName = $request->file->extension();
//        $file= $request->file->getClientOriginalName();
//        $filename = pathinfo($file, PATHINFO_FILENAME);
//        $extension = pathinfo($file, PATHINFO_EXTENSION);
//        $folder = $request->folder;
//        $fileModel = new file;
//        if($request->file()) {
//            $fileName = time().'_'.$request->file->getClientOriginalName();
//            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
//
//            $fileModel->name = $filename;
//            $fileModel->extension = $extension;
//            $fileModel->file_link = '/storage/' . $filePath;
//            $fileModel->folder_id = $folder;

//            dd($fileModel);
//            $fileModel->save();

//        }
        return redirect()->route('folders.index');
    }

}
