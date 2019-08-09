<?php


namespace App\Services;


use App\Models\Property;

class OrmService
{
    static function getPropertyLatest():Object{
        return Property::where('sold', 0)
                       ->orderBy('created_at','DESC')
                       ->paginate(3);
    }
    static function getPropertyById($id){
        return Property::findOrFail($id);
    }
}
