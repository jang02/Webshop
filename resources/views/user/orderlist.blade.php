@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">OrderID</th>
                            <th scope="col">Items</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderslist as $order)

                            <tr id="order_{{$order->id}}" class="product">
                                <td>{{$order->orderid}}</td>

                                <td>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(Illuminate\Support\Facades\DB::table("orderitems")->where("orderid", $order->orderid)->get() as $orderitem)
                                            {{-- Convert product ID to product object--}}
                                            @php($product = \App\Product::find($orderitem->itemid))
                                            <tr>
                                                <td>
                                                    {{$product->label}}
                                                </td>
                                                <td>
                                                    {{$orderitem->amount}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </td>

                                <td id="{{$order->orderid}}_price">{{$order->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

