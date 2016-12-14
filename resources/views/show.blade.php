@extends('layouts.layout')
@section('content')
<div class="col-md-6 col-md-offset-3">


<div class="span7" style="margin-top:100px;">
  <div class="panel panel-info">
    <div class="panel-heading">
      {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right'] ) !!}
                {!! Form::close()  !!}
      <h4>{{ $users->id }}</h4>
    </div>
    <div class="panel-body">
      <p>
          Staff ID : {{ $users->staffid }} <br><br>
          Author Names : {{ $users->authornames }} <br><br>
          Fields of Research (FOR) : {{ $users->forarea }} <br><br>
          Socio-economic Objectives (SEO) : {{ $users->seo }} <br> <br>
          Comment  : {{ $users->comments }}
      </p>

    </div>
  </div>

</div>
</div>
@endsection