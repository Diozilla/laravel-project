@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h4 style="text-align: center">Products</h4>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-borderd table-striped">
            <thead>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Selling Price</th>
                <th>Image</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach ($product as $item)


                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->category->name }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->description }}
                    </td>
                    <td>
                        {{ $item->original_price }}
                    </td>
                    <td>
                        {{ $item->selling_price }}
                    </td>
                    <td>
                       <img class="cat-image" src="{{ asset('assets/uploads/product/'.$item->image) }}" alt="image here"> 
                    </td>
                    <td>
                       <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-sm btn-primary">edit</a>
                       <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



























@endsection