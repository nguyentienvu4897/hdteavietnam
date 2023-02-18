<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServiceCategory extends Model
{
    protected $table = 'service_categories';

    public function types()
    {
        return $this->hasMany(ServiceCategoryType::class, 'category_id', 'id');
    }

    public function services() 
    {
        return $this->hasMany(Services::class, 'category_id', 'id');
    }

    public function saveServiceCategory($request)
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
