@extends('layouts.front')


@section('title')

    {{ $category->name }}
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sm  border-top " >
    <div class="container">
        <h6 class="mb-0"> collections / {{ $category->name }}</h6>
    </div>
    </div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }} </h2>
            @foreach ($product as $item)
            <div class="col-md-3 mb-3">
                <a href="{{ url('view-category/'.$category->slug.'/'.$item->slug) }}">
                <div class="card">
                    
                    <img src="{{ asset('assets/uploads/product/'.$item->image) }}" alt="product image">
                    <div class="card-body">
                        <h5>{{ $item->name }}</h5>
                        <span class="float-start">
                            {{ $item->selling_price }}
                        </span>
                        <span class="float-end">
                          <s>  {{ $item->original_price }}</s>
                        </span>
                    </div>
                
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection