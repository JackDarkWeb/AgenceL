<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PropertyFormRequest;
use App\Models\Property;
use App\Services\OrmService;
use App\Services\RepositoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPropertyController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $properties = OrmService::getPropertyLatest();
        return view('admin.index', [
            'properties' => $properties,
            'menu_admin' => true,
        ]);
    }

    public function show($id){
        $property = Property::findOrFail($id);
        return view('admin.show', [
            'property' => $property,
            'menu_admin' => true,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('admin.create',[
            'menu_admin' => true,
        ]);
    }

    public function store(PropertyFormRequest $request){
        $create = RepositoryService::repositoryData($request, 'create');

        session()->flash('message', 'Le bien numéro  '.$create->id. '  à été bien créé!');
        return redirect(route('admin.property.index'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $property = OrmService::getPropertyById($id);

        //dd($property->heat_choices);
        //dd(sizeof((object)$property->postal_code));
        return view('admin.edit', [
            'menu_admin' => true,
            "property" => $property,
        ]);

    }

    /**
     * @param PropertyFormRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update(PropertyFormRequest $request, $id){
        //dd($request->get('update'));
        RepositoryService::repositoryData($request, 'update', $id);

        session()->flash('message', 'Le bien numéro  '.$id. '  à été bien modifié!');

        if($request->get('update')){
            return redirect(route('admin.property.show', ['id' => $id]));
        }
        return redirect(route('admin.property.index'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id){
        Property::destroy($id);
        session()->flash('message', 'Le bien numéro  '.$id. '  à été bien supprimé!');
        return redirect(route('admin.property.index'));
    }

}
