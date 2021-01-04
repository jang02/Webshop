@extends('layouts.app')

@section('content')

    <ul class="list-unstyled">
        @foreach($category->getProducts() as $product)
            <li>
                <div class="row justify-content-left">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <h1><a href="{{route("show-product", $product)}}" style="color: black;text-decoration: none;">{{$product->label}}</a></h1>
                            </div>
                            <div class="card-body">
                                <a href="{{route("show-product", $product)}}">
                                    <img src="{{$product->photo}}" alt="?">
                                </a>

                                <a class="btn-primary btn" href="{{route("show-product", $product)}}">Bekijk product</a>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endsection



