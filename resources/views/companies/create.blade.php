@extends('welcome')

@section('content')

    <div class="col-md-9" style="background: grey;color:white;margin:10px;">
    <h1>Create New Company</h1>
     <form action="{{route('companies.store')}}" method="post">
     {{ csrf_field() }}
     
     <div class="form-group">
     <label for="company-name">Name<span class="required">*</spane></label>
     <input
     placeholder="Enter name" 
     id="company-name" 
     required
     name="name"
     spellcheck="false"
     class="form-control"
     >
    </div>
     <div class="form-group">
     <label for="company-content">Description</label>
     <textarea placeholder="Enter description"
     style="resize:vertical"
      name="description" 
      id="company-content" 
      class="form-control autosize-target text-left"
       rows="5"
       spellcheck="false"
      ></textarea>
     </div>

     <div class="form-group">
     <label for="company-name">Name<span class="required">*</spane></label>
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