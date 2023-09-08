@extends('layouts.default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('title', 'Title', ['class'=>'form-label']) }}
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('quantity', 'Quantity', ['class'=>'form-label']) }}
			{{ Form::text('quantity', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('price', 'Price', ['class'=>'form-label']) }}
			{{ Form::text('price', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
