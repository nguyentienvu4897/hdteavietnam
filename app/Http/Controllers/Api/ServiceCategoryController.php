<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function create(Request $request, ServiceCategory $serviceCategory)
    {
        $data = $serviceCategory->saveServiceCategory($request);
        return response()->json([
            'message' => 'Save Success',
            'data'=> $data
        ],200);
    }

    public function list(ServiceCategory $serviceCategory)
    {
        $data = $serviceCategory->getAll();
        return response()->json([
            'message' => 'Success',
            'data'=> $data
        ],200);
    }

    public function edit($id, ServiceCategory $serviceCategory)
    {
        $data = $serviceCategory->findById($id);
        return response()->json([
            'message' => 'Success',
            'data'=> $data
        ],200);
    }

    public function delete($id, ServiceCategory $serviceCategory)
    {
        $data = $serviceCategory->deleteById($id);
        return response()->json([
            'message' => 'Success',
            'data'=> $data
        ],200);
    }
}
