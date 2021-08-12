<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Http;
class queryController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $old_cookie= $_COOKIE['ConnectoID'];
        $data_inserted= \App\Models\query::create([
             'name'=> $request->name,
             'email'=> $request->email,
             'phone'=> $request->phone,
             'query'=> $request->helpquery,
             'cookie_id'=> $old_cookie,
         ]);
         if ($data_inserted) {
            alert()->success('You Query has been saved Prperly.', 'Query Sent Sucessfully');
            return back();
        }
        alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
