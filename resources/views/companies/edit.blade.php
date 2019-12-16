@extends('welcome')

@section('content')


<div class="row">

  <div class="col-md-9 blog-main">
    
   <div class="col-md-12" style="background: grey;color:white;margin:10px">
     <form action="{{route('companies.update',[$company->id])}}" method="post">
     {{ csrf_field() }}
     @csrf
  

     <input type="hidden" name="_method" value="put">


     <div class="form-group">
     <label for="company-name">Name<span class="required">*</spane></label>
     <input
     placeholder="Enter name" 
     id="company-name" 
     required
     name="name"
     spellcheck="false"
     class="form-control"
     value="{{$company->name}}">

     <div class="form-group">
     <label for="company-content">Description</label>
     <textarea placeholder="Enter description"
     style="resize:vertical"
      name="description" 
      id="company-content" 
      class="form-control autosize-target text-left"
       rows="5"
       spellcheck="false"
      >{{$company->description}}</textarea>
     </div>


      <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit">
      </div>

     </form>
    </div>

    </div>



@endsection