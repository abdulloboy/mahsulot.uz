@extends('layouts.default')

@section('content')

    <div>
        <p>
            @lang('Id:') {{ $product->id }}
        </p>
        <p>
            @lang('Title:') {{ $product->title }}
        </p>
        <p>
            @lang('Quantity:') {{ $product->quantity }}
        </p>
        <p>
            @lang('Price:') {{ $product->price }}
        </p>
        <p>
            @lang('Total price with VAT:') {{ $product->quantity * $product->price * (1 + env('VAT')) }}
        </p>
    </div>
@stop
