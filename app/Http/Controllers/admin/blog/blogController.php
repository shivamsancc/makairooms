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
        $validator = Validator::make($request->all() , ['f_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);

        if ($validator->passes())
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
            $input = $request->all();
            $tags = explode(", ", $input['tags']);
            $post->tag($tags);
            alert()->success('You Data has been saved Prperly.', 'Saved Sucessfully');
            return redirect()->route('all_blogs');
           }
           alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
           return redirect()->route('all_blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
