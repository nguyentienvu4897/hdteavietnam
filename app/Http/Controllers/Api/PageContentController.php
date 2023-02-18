<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\PageContent;

class PageContentController extends Controller
{
    public function create(Request $request,PageContent $page_content)
    {
        $page_content->savePageContent($request);
        return response()->json([
            'message' => 'Success'
        ]);
    }
    public function list(Request $request)
    {
    	$keyword = $request->keyword;
        if($keyword == ""){
            $data = PageContent::orderBy('id','DESC')->get();
        }else{
            $data = PageContent::where('title', 'LIKE', '%'.$keyword.'%')->orderBy('id','DESC')->get()->toArray();
        }
        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
    public function edit($id)
    {
    	$data = PageContent::where([
            'id'=> $id,
        ])
        ->first();
        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
    public function deletePageContent($id)
    {
        $data = PageContent::where('id',$id)->first();
        $data->delete();
        return response()->json([
            'message' => 'success'
        ]);
    }
}
