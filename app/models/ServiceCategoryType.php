<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategoryType extends Model
{
    protected $table = 'service_category_types';

    public function services()
    {
        return $this->hasMany(Services::class, 'type_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id', 'id');
    }

    public function saveServiceCategoryType($request)
    {
        $id = $request->id;
        if( isset($id) )
        {
            $query = $this->findOrFail($id);
            if ($query) 
            {
                $query->name = json_encode($request->name) ;
                $query->slug = to_slug($request->name[0]['content']);
                $query->content = json_encode($request->content);
                $query->avatar = $request->avatar;
                $query->status = $request->status;
                $query->category_id = $request->category_id;
                $query->modal_column = $request->modal_column;
                $query->save();
            }
            else
            {
                $query = new $this;
                $query->name = json_encode($request->name) ;
                $query->slug = to_slug($request->name[0]['content']);
                $query->content = json_encode($request->content);
                $query->avatar = $request->avatar;
                $query->status = $request->status;
                $query->category_id = $request->category_id;
                $query->modal_column = $request->modal_column;
                $query->save();
            }
        }
        else
        {
            $query = new $this;
                $query->name = json_encode($request->name) ;
                $query->slug = to_slug($request->name[0]['content']);
                $query->content = json_encode($request->content);
                $query->avatar = $request->avatar;
                $query->status = $request->status;
                $query->category_id = $request->category_id;
                $query->modal_column = $request->modal_column;
                $query->save();
        }
        return $query;
    }

    public function getAll()
    {
        return $this->all();
    }

    public function deleteById($id)
    {
        $data = $this->findOrFail($id);
        $result = $data->delete();
        return $result;
    }

    public function findById($id)
    {
        return $this->findOrFail($id);
    }
}
