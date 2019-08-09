@extends('layouts.base')

@section('content')
    <h2>Creer un bien</h2>

    @if($errors->any())
        <div class="alert alert-danger ">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    <form method="post" action="{{ route('admin.property.store') }}" >

        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" name="title" class="form-control" id="formGroupExampleInput" value="{{ old('title') }}" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Surface</label>
                    <input type="number" name="surface" class="form-control" id="formGroupExampleInput" value="{{ old('surface') }}" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Price</label>
                    <input type="number" name="price" class="form-control" id="formGroupExampleInput" value="{{ old('price') }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="formGroupExampleInput">Rooms</label>
                    <input type="number" name="rooms" class="form-control" id="formGroupExampleInput" value="{{ old('rooms') }}" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="formGroupExampleInput">Bedrooms</label>
                    <input type="number" name="bedrooms" class="form-control" id="formGroupExampleInput" value="{{ old('bedrooms') }}" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Heat</label>
                        <select class="custom-select mr-sm-2" name="heat" id="inlineFormCustomSelect">
                            <option value="0">Electric</option>
                            <option value="1">Gaz</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="formGroupExampleInput">Floor</label>
                    <input type="number" name="floor" class="form-control" id="formGroupExampleInput" value="{{ old('floor') }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="formGroupExampleInput">Address</label>
                    <input type="text" name="address" class="form-control" id="formGroupExampleInput" value="{{ old('address') }}" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="formGroupExampleInput">City</label>
                    <input type="text" name="city" class="form-control" id="formGroupExampleInput" value="{{ old('city') }}" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="formGroupExampleInput">Postal Code</label>
                    <input type="number" name="postal_code" class="form-control" id="formGroupExampleInput" value="{{ old('postal_code') }}" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sold" value="0" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Sold
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit"  class="btn btn-outline-warning">{{'Create'}}</button>
        <a href="{{ route('admin.property.index') }}" class="btn btn-secondary">Back</a>
    </form>

@stop
