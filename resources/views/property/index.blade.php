@extends('layouts.base', ['title' => 'Properties'])

@section('content')

    <h3>Voir tous nos biens</h3>

    <div class="row">
       @forelse($properties as $property)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <a href="{{ route("property.show", ['slug' => $property->slug_title, 'id' => $property->id]) }}">{{ $property->title }}</a></h5>
                    <p class="card-text">{{ $property->city }} ({{ $property->postal_code }})</p>
                    <div class="text-info font-weight-bold" style="font-size: 2rem">{{ $property->formatted_price }} $</div>
                </div>
            </div>
        </div>
        @empty
           <div class="alert alert-info">
               <strong>No property now </strong>
           </div>
        @endforelse
    </div>

@stop
