@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $product->name }} </h4>
                <h5 class="card-title">Price: {{ $product->price }} </h5>
                <p class="card-text">Stock: {{ $product->stock }} </p>
                <a href="../products" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
