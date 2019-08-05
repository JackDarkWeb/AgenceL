<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){

        $properties = Property::where('sold', '0')
                             ->orderBy('created_at', 'DESC')
                             ->get();

        return view('property.index',[
            'properties' => $properties
        ]);
    }

    public function show($slug, $id){

        $property = Property::find($id);
        //dd($property->slug_title);
        if($property->slug_title !== $slug){

            return redirect(route('property.show', [
                'slug' => $property->slug_title,
                'id' => $property->id
            ] ));
        }

        return view('property.show',[
            'property' => $property
        ]);
    }
}
