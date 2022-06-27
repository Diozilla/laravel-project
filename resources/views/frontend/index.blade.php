@extends('layouts.front')
@section('title')
Fashion Project
@endsection
@section('content')
@include('layouts.includes.frontslider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Featured </h2>
            @foreach ($feat_product as $item)
            <div class="col-md-4 mt-3">
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
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending </h2>
            @foreach ($trending_cat as $item)
            <div class="col-md-4 mt-3">
                <a href="{{ url('view-category/'.$item->slug) }}">
                <div class="card">
                    <img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="product image">
                    <div class="card-body">
                        <h5>{{ $item->name }}</h5>
                        <p>
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>


















@section('scripts')
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
@endsection

@endsection