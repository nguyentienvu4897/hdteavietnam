<?php

namespace App\Http\Controllers\Api\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\website\Setting;
use DB;

class SettingController extends Controller
{
	public function setting()
	{
		$data = Setting::first();
		return response()->json([
    		'message' => 'get Success',
    		'data'=> $data
    	],200);
	}
    public function postsetting(Request $request)
    {
    	if (Setting::count() < 1 )
        {
        	$setting = new Setting();
        
	    	$setting->webname = json_encode($request->webname);
	    	$setting->company = json_encode($request->company);
	    	$setting->address1 = $request->address1;
	    	$setting->address2 = $request->address2;
			$setting->address3 = $request->address3;
	    	$setting->address4 = $request->address4;
	    	$setting->address5 = $request->address5;
	    	$setting->phone1 = $request->phone1;
	    	$setting->phone2 = $request->phone2;
	    	$setting->phone3 = $request->phone3;
	    	$setting->phone4 = $request->phone4;
	    	$setting->phone5 = $request->phone5;
	    	$setting->map1 = $request->map1;
	    	$setting->map2 = $request->map2;
	    	$setting->map3 = $request->map3;
	    	$setting->map4 = $request->map4;
	    	$setting->map5 = $request->map5;
	    	$setting->fax = $request->fax;
            $setting->email  = $request->email;
	    	$setting->facebook = $request->facebook;
            $setting->google   = $request->google;
            $setting->GA = $request->GA;
            $setting->fbPixel  = $request->fbPixel;
	    	$setting->iframe_map  = $request->iframe_map;
	    	$setting->favicon  = $request->favicon;
	    	$setting->logo  = $request->logo;
			$setting->popupimage  = $request->popupimage;
			$setting->statusPopup  = $request->statusPopup;
			$setting->linkpopup  = $request->linkpopup;
			$setting->footer_content  = $request->footer_content;
	    	$setting->save();
        }else {

        	$setting = Setting::find(1);
	    	$setting->webname = json_encode($request->webname);
	    	$setting->company = json_encode($request->company);
	    	$setting->address1 = $request->address1;
	    	$setting->address2 = $request->address2;
	    	$setting->address3 = $request->address3;
	    	$setting->address4 = $request->address4;
	    	$setting->address5 = $request->address5;
	    	$setting->phone1 = $request->phone1;
	    	$setting->phone2 = $request->phone2;
	    	$setting->phone3 = $request->phone3;
	    	$setting->phone4 = $request->phone4;
	    	$setting->phone5 = $request->phone5;
	    	$setting->map1 = $request->map1;
	    	$setting->map2 = $request->map2;
	    	$setting->map3 = $request->map3;
	    	$setting->map4 = $request->map4;
	    	$setting->map5 = $request->map5;
	    	$setting->fax = $request->fax;
            $setting->email  = $request->email;
	    	$setting->facebook = $request->facebook;
            $setting->google   = $request->google;
            $setting->GA = $request->GA;
            $setting->fbPixel  = $request->fbPixel;
	    	$setting->iframe_map  = $request->iframe_map;
	    	$setting->favicon  = $request->favicon;
	    	$setting->logo  = $request->logo;
			$setting->popupimage  = $request->popupimage;
			$setting->linkpopup  = $request->linkpopup;
			$setting->statusPopup  = $request->statusPopup;
			$setting->footer_content  = $request->footer_content;
	    	$setting->save();
        }
        return response()->json([
    		'message' => 'save Success'
    	],200);
    }
}
