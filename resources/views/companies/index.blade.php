
@extends('welcome')

@section('content')

<div class="container">
<div class="col-md-8 offset-md-2">
<div class="card text-white bg-secondary mb-3">
  <div class="card-body">
    <h5 class="card-title">Companies <a class="btn btn-primary btn-sm" href="/companies/create"> + New Company</a></h5>
   
    @foreach($companies as $company)
  <li class="list-group-item  list-group-item-dark"><a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
  @endforeach
   </div>
</div>
</div>
</div>
@endsection