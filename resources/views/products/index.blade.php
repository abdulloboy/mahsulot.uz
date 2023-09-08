@extends('layouts.default')

@section('content')

    @if (Auth::user()->is_admin)
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">
                {{ __('Create product') }}
            </a>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>quantity</th>
                <th>price</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>

                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('products.show', [$product->id]) }}" class="btn btn-info">Show</a>
                            @if (Auth::user()->is_admin)
                                <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-primary">Edit</a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
