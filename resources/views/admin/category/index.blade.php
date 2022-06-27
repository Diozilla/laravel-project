@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h4 style="text-align: center">Category</h4>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-borderd table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach ($category as $item)


                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->description }}
                    </td>
                    <td>
                       <img class="cat-image" src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="image here"> 
                    </td>
                    <td>
                       <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary">edit</a>
                       <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



























@endsection