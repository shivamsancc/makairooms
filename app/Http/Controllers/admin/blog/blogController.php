<?php

namespace App\Http\Controllers\admin\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use Auth;
use Storage;
use Image;
use App\Models\blog_post;
use App\Models\blog_category;
use Illuminate\Support\Facades\Validator;
//=====================Imports==================
class blogController extends Controller
{

    public function index()
    {
        $blog_post= blog_post::where('status','1')->get()->all();    
        return view('admindash.blog.blog_post',compact('blog_post'));
    }

    public  function create()
    {
        $blog_category= blog_category::where('status','1')->get()->all();    
        return view('admindash.blog.add_blog_post',compact('blog_category'));
    }


    public function store(Request $request)
    {
        $ref_no = rand(1, 2000000000);
        if ($this->validate($request, [
            'f_image' =>  ['required', 'mimes:jpeg,jpg,png,gif','max:10000'], 
            'body' => ['required', 'string'], 
            ]))
        {
            $file = $request->file('f_image');
            $name = $ref_no . time().str_replace(' ', '', $file->getClientOriginalName());
            $filePath = 'upload/blog/images/' . $name;
            Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($file) , 'public');
            $post=blog_post::create([
                'name'=>$request->name,
                'body'=>$request->body,
                'f_image'=>$filePath,
                'user_id'=>Auth::user()->id,
                'user_name'=>Auth::user()->name,
                'category'=>$request->category,
            ]);
            if ($request->tags  == 1) {
                $input = $request->all();
                $tags = explode(", ", $input['tags']);
                $post->tag($tags);
            }           
            alert()->success('You Data has been saved Prperly.', 'Saved Sucessfully');
            return redirect()->route('all_blogs');
           }
           alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
           return redirect()->route('all_blogs');
    }
    public function blogedit($id)
    {
     $post= blog_post::where('id',$id)->first();
     $blog_category= blog_category::where('status','1')->get()->all();    
        return view('admindash.blog.edit_post',compact('post','blog_category'));
    }

    public function blogupdate($id,Request $request )
    {
        $update= blog_post::where('id',$id)->update([
            'name'=>$request->name,
            'body'=>$request->body,
            'category'=>$request->category,
        ]);
        if ($update) {
            alert()->success('You Data has been Updated Prperly.', 'Updated Sucessfully');
            return redirect()->route('all_blogs');
        } else {
            alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
                    return back();
        }
    }






    public function destroy($id)
    {
        if (blog_post::destroy($id)) {
            alert()->success('You Data has been Deleted Prperly.', 'Deleted Sucessfully');
            return back();
           }
            return back();
           alert()->error('You Data has not been Deleted Prperly.', 'Something Went Wrong');
                   return back();
    }

//===============================================Blog Category==============================
public function categoryindex(){
   $blog_category= blog_category::where('status','1')->get()->all();
    return view('admindash.blog.blog_cat',compact('blog_category'));
}




public function categorystore(Request $request)
{
    if (blog_category::create($request->all())) {
     alert()->success('You Data has been saved Prperly.', 'Saved Sucessfully');
     return back();
    }
     return back();
    alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return back();
}
public function editcategory($id){
   $blog_category= blog_category::where('status','1')->get()->all();
    $cat_data= blog_category::where('id',$id)->first();
    return view('admindash.blog.edit_cat',compact('cat_data','blog_category'));
}

public function updatecategory($id,Request $request){
     $update= blog_category::where('id',$id)->update([
        'name'=>$request->name,
        'parent_id'=>$request->parent_id,
    ]);
    if ($update) {
        alert()->success('You Data has been Updated Prperly.', 'Updated Sucessfully');
        return redirect()->route('all_blogs_cat');
    } else {
        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
                return back();
    }
 }


public  function categorydestroy($id)
{
    if (blog_category::destroy($id)) {
        alert()->success('You Data has been Deleted Prperly.', 'Deleted Sucessfully');
        return back();
       }
        return back();
       alert()->error('You Data has not been Deleted Prperly.', 'Something Went Wrong');
               return back();
}


//=======================================================
public function upload(Request $request)
{
    if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
    
        $request->file('upload')->move(public_path('images'), $fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('images/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
           
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }
}

}
