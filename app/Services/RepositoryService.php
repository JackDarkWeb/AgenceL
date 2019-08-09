<?php


namespace App\Services;


use App\Models\Property;

class RepositoryService
{
    static function repositoryData($request, $statement, $id = null){
        //$where = trim($where, '(, )');
        //dd($id);

        if($id == null){

            return Property::$statement([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'surface' => $request->input('surface'),
                'floor' => $request->input('floor'),
                'rooms' => $request->input('rooms'),
                'bedrooms' => $request->input('bedrooms'),
                'heat' => $request->input('heat'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'price' => $request->input('price'),
                'sold' => self::getValueSold($request),
                'postal_code' => $request->input('postal_code'),
            ]);

        }else {
            return Property::where('id', $id)->$statement([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'surface' => $request->input('surface'),
                'floor' => $request->input('floor'),
                'rooms' => $request->input('rooms'),
                'bedrooms' => $request->input('bedrooms'),
                'heat' => $request->input('heat'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'price' => $request->input('price'),
                'sold' => self::getValueSold($request),
                'postal_code' => $request->input('postal_code'),
            ]);
        }
    }

    static function getValueSold($request){
        return $request->input('sold') == null ? 0 : 1;
    }
}
