<!-- ni extend app.blade.php tadi, dia mcm ko include la, untuk guna  -->
@extends('layouts.layout')
<!-- section ni tempat ko set component ko, kalau nak guna ni kat page yg
ko nak, paggil @yield('content') -->
@section('content')
<div class="jumbotron">
	<div class="container">
		<p>&nbsp;</p>
		
		<p>Deputy Vice Chancellor's Office (Research and Innovation)</p>
		<p><a class="btn btn-primary btn-lg" href="/info" role="button">Learn More &raquo;</a></p>
	</div>
</div>
<div class="container">
	@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif
	@if(Session::has('message'))
	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif
	{!! Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) !!}
	
	<fieldset>
		<!-- Text input-->
		<div class="form-group">
			{!! Form::label('staffid', 'Staff ID:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('staffid', $value = null, ['class' => 'form-control input-md', 'placeholder' => 'eg. ew1334r']) !!}
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			{!! Form::label('author', 'Author Names:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('authornames', $value = null, ['class' => 'form-control input-md', 'placeholder' => 'eg. Mazlan ']) !!}
			</div>
		</div>
		<!-- Select Basic -->
		<div class="form-group">
			{!! Form::label('forarea', 'Fields of Research (FOR):', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!!  Form::select('forarea', [
				'ayam' => 'ayam',
				'ikan' => 'ikan',
				'kuda' => 'kuda'],  null, ['class' => 'form-control' ]) !!}
			</div>
		</div>
		<!-- Select Basic -->
		<div class="form-group">
			{!! Form::label('objective', 'Socio-economic Objectives (SEO):', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!!  Form::select('seo', ['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3', '4' => 'Option 4'], null, ['class' => 'form-control' ]) !!}
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			{!! Form::label('comment', 'Comment:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!! Form::textarea('comments', $value = null, ['class' => 'form-control input-md', 'placeholder' => '']) !!}
			</div>
		</div>
		<!-- Button (Double) -->
		<div class="form-group">
			<label class="col-md-4 control-label"></label>
			<div class="col-md-8">
				{{ Form::submit('Submit', ['class' => 'btn btn-primary'] ) }}
				{!! Form::reset('Clear', ['class' => 'btn btn-warning'] ) !!}
			</div>
		</div>
	</fieldset>
	{!! Form::close()  !!}
	
</div>
@endsection