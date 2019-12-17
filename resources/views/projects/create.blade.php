@extends('welcome')

@section('content')

    <div class="col-md-9" style="background: grey;color:white;margin:10px;">
    <h1>Create New Project</h1>
     <form action="{{route('projects.store')}}" method="post">
     {{ csrf_field() }}
     
     <div class="form-group">
     <label for="project-name">Name<span class="required">*</spane></label>
     <input
     placeholder="Enter name" 
     id="project-name" 
     required
     name="name"
     spellcheck="false"
     class="form-control"
     >
     </div>
     <input type="hidden" name="company_id" value="{{$company_id}}">
 
     <div class="form-group">
     <label for="project-content">Description</label>
     <textarea placeholder="Enter description"
     style="resize:vertical"
      name="description" 
      id="project-content" 
      class="form-control autosize-target text-left"
       rows="5"
       spellcheck="false"
      ></textarea>
     </div>

     <div class="form-group">
     <label for="project-name">Name<span class="required">*</spane></label>
     <input
     placeholder="Enter user_id" 
     id="id" 
     required
     name="id"
     spellcheck="false"
     class="form-control"
     >
     </div>


      <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit">
      </div>

     </form>
    </div>

@endsection