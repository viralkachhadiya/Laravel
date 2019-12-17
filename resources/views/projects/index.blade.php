
@extends('welcome')

@section('content')

<div class="container">
<div class="col-md-8 offset-md-2">
<div class="card text-white bg-secondary mb-3">
  <div class="card-body">
    <h5 class="card-title">Projects <a class="btn btn-primary btn-sm" href="/projects/create"> + New Project</a></h5>
   
    @foreach($projects as $project)
  <li class="list-group-item  list-group-item-dark"><a href="/projects/{{$project->id}}">{{$project->name}}</a></li>
  @endforeach
   </div>
</div>
</div>
</div>
@endsection