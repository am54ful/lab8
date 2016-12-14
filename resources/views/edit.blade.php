@extends('layouts.layout')
@section('content')
<div class="container" style="margin-top:100px;">
	@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif

	{!! Form::model($users, [
		'method' => 'PUT',
		'route' => ['users.update', $users->id], 
		'class' => 'form-horizontal'
	]) !!}
	
	<fieldset>
		<!-- Text input-->
		<div class="form-group">
			{!! Form::label('staffid', 'Staff ID:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('staffid', null, ['class' => 'form-control input-md']) !!}
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			{!! Form::label('author', 'Author Names:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('authornames', null, ['class' => 'form-control input-md']) !!}
			</div>
		</div>
		<!-- Select Basic -->
		<div class="form-group">
			{!! Form::label('research', 'Fields of Research (FOR):', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!!  Form::select('forarea', [
				'ayam' => 'ayam',
				'ikan' => 'ikan',
				'kuda' => 'kuda'], null, ['class' => 'form-control' ]) !!}
			</div>
		</div>
		<!-- Select Basic -->
		<div class="form-group">
			{!! Form::label('objective', 'Socio-economic Objectives (SEO):', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!!  Form::select('seo', ['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3', '4' => 'Option 4'],  null, ['class' => 'form-control' ]) !!}
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			{!! Form::label('comments', 'Comment:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-4">
				{!! Form::textarea('comments', null, ['class' => 'form-control input-md']) !!}
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