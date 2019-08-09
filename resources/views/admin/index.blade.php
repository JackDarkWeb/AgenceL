@extends('layouts.base')

@section('content')

    <h3>Gerer les biens</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($properties as  $property)
        <tr>
            <td>{{ $property->title }}</td>
            <td>
                <a href="{{ route('admin.property.edit', ['id' => $property->id]) }}" class="btn btn-info">Edit</a>
                <form method="post" action="{{ route('admin.property.delete', ['id' => $property->id]) }}" style="display: inline-block" onsubmit="return confirm('Voulez-vous vraiment supprimer ? ')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
            <div class="alert alert-info">
                <strong>No property now </strong>
            </div>
        @endforelse
        </tbody>
    </table>

    <div class="text-right">
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Create the new property</a>
    </div>

    <div class="mt-5">
        {{$properties->links()}}
    </div>


@stop
