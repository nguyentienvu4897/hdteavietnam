<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\ServiceCategoryType;
use Illuminate\Http\Request;

class ServiceCategoryTypeController extends Controller
{
    public function create(Request $request, ServiceCategoryType $serviceCategoryType)
    {
        $data = $serviceCategoryType->saveServiceCategoryType($request);
        return response()->json([
            'message' => 'Save Success',
            'data'=> $data
        ],200);
    }

    public function list(ServiceCategoryType $serviceCategoryType)
    {
        $data = $serviceCategoryType->getAll();
        return response()->json([
            'message' => 'Success',
            'data'=> $data
        ],200);
    }

    public function edit($id, ServiceCategoryType $serviceCategoryType)
    {
        $data = $serviceCategoryType->findById($id);
        return response()->json([
            'message' => 'Success',
            'data'=> $data
        ],200);
    }

    public function delete($id, ServiceCategoryType $serviceCategoryType)
    {
        $data = $serviceCategoryType->deleteById($id);
        return response()->json([
            'message' => 'Success',
            'data'=> $data
        ],200);
    }
}
