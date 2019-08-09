@extends('layouts.base', ['title' => $property->title])

@section('content')

    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            <h1>{{ $property->title }}</h1>
            <h2>@if ($property->rooms > 1) {{$property->rooms}} rooms @else {{ "1 room" }} @endif  - {{ $property->surface }} M<sup>2</sup></h2>
            <div class="text-info font-weight-bold" style="font-size: 4rem">{{ $property->formatted_price }} $</div>
            <button class="btn btn-outline-info">Contact agency</button>
        </div>
    </div>
    <p>{{ $property->description  }}</p>

    <div class="row">
        <div class="col-md-8">
            <h2>Caracteristiques</h2>
            <table class="table table-striped">
                <tr>
                    <td>Surface habitable</td>
                    <td>{{ $property->surface }} m<sup>2</sup></td>
                </tr>

                <tr>
                    <td>Rooms</td>
                    <td>{{ $property->rooms }}</td>
                </tr>

                <tr>
                    <td>Chambres</td>
                    <td>{{ $property->bedrooms }}</td>
                </tr>
                <tr>
                    <td>Etage</td>
                    <td>{{ $property->floor }}</td>
                </tr>
                <tr>
                    <td>Chauffage</td>
                    <td>{{ $property->heat_type }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <h2>Spécificités</h2>
        </div>
    </div>

@stop
