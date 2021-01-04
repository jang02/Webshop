@extends('layouts.app')

@section('content')

        <div class="justify-content-left">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="display: inline-block">{{$product->label}}</h1>
                    </div>
                    <div class="card-body">
                            <img class="img-top" src="{{$product->photo}}" alt="?">
                        <div style="display: inline-block;">
                            <p>Descriptie:</p>
                            <table class="table">
                                <tbody>
                                @foreach($description as $key => $val)
                                    <tr>
                                        <td>
                                            {{$key}}
                                        </td>
                                        <td>
                                            {{$val}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a class="btn btn-primary float-right" href="{{route("add-to-cart", $product->id)}}">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
