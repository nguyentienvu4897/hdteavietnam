<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\language\Language;

class PageContent extends Model
{
    protected $table = "page_contents";
    public function rule()
    {
        
    }
    public function savePageContent($request)
    {
        $id = $request->id;
        if($id != ""){
            $query = PageContent::where([
                'id' => $id
             ])->first();
            if ($query) {
                $query->title = json_encode($request->title);
                $query->content = json_encode($request->content);
                $query->status = $request->status;
                $query->quiz_id = $request->quiz_id;
                $query->language = $request->language;
                $query->type = $request->type;
                $query->image = $request->image;
                $query->slug = to_slug($request->title[0]['content']);
                $query->description = json_encode($request->description);
                $query->save();
            }else{
                $query = new PageContent();
                $query->quiz_id = $request->quiz_id;
                $query->language = $request->language;
                $query->title = json_encode($request->title);
                $query->content = json_encode($request->content);
                $query->status = $request->status;
                $query->type = $request->type;
                $query->image = $request->image;
                $query->slug = to_slug($request->title[0]['content']);
                $query->description = json_encode($request->description);
                $query->save();
            }
            
        }else{
                $query = new PageContent();
                $query->quiz_id = $request->quiz_id;
                $query->language = $request->language;
                $query->title = json_encode($request->title);
                $query->content = json_encode($request->content);
                $query->status = $request->status;
                $query->type = $request->type;
                $query->image = $request->image;
                $query->slug = to_slug($request->title[0]['content']);
                $query->description = json_encode($request->description);
                $query->save();
        }
        return $query;
        
    }
}
