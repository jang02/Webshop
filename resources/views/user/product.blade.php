@extends('layouts.app')

@section('content')

        <div class="justify-content-left">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="display: inline-block">{{$product->label}}</h1>
                    </div>
                    <div class="card-body">
                            <img src="{{$product->photo}}" alt="?">
                        <div style="display: inline-block;">
                            <p>Descriptie:</p>
                            <p>{{$product->description}}</p>
                            //TODO listable specs
                        </div>
                        <a class="btn btn-primary float-right" href="{{route("add-to-cart", $product->id)}}">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
