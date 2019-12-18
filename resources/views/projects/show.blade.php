@extends('welcome')

@section('content')

<main role="main" class="container">
<div class="row">

  <div class="col-md-9 blog-main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$project->name}}</h1>
          <p>{{$project->description}}</p>
        </div>
      </div>

      <div class="row" style="background: grey;color:white;margin:10px;">
       {{-- @foreach($project->project as $project)
      
      <!-- Example row of columns -->
    
        <div class="col-lg-6">
          <h2>{{$project->name}}</h2>
          <p>{{$project->description}}</p>
          <p><a class="btn btn-secondary" href="/project/{{$project->id}}" role="button">View details »</a></p>
        </div>
        @endforeach --}}
      </div>
   </div>  
      <!-- /container -->
      <aside class="col-md-3 blog-sidebar">
      <!-- <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div> -->
      
      <div class="p-4">
        <h4 class="font-italic">Actions</h4>
        <ol class="list-unstyled">
          <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
          <li><a href="/projects">My project</a></li>
          <li><a href="/projects/create">Create New project</a></li>
          <li><a href="#" onclick="
          
          var result=confirm('are u sure wish to delete this project?');
          if(result){
            event.preventDefault();
            document.getElementById('logout-form').submit();
            }
          ">Delete</a></li>

      <form id="logout-form" action="{{route('projects.destroy',[$project->id])}}" method="post">
      <input type="hidden" name="_method" value="delete">
      {{csrf_field()}}
      </form>


          <!-- <li><a href="#">Add new member</a></li> -->
        </ol>
      </div>
       
      <!-- <div class="p-4">
        <h4 class="font-italic">Member</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div> -->

    </aside>
    
    
     <div class="col-sm-9 col-md-9 col-lg-9">
    <form action="{{route('comments.store')}}" method="post">
     {{ csrf_field() }}
     
     <input type="hidden" name="commentable_type" value="Project">
     <input type="hidden" name="commentable_id" value="{{$project->id}}">

     
     <div class="form-group">
     <label for="comment-content">Comment</label>
     <textarea placeholder="Enter comment"
     style="resize:vertical"
      name="body" 
      id="comment-content" 
      class="form-control autosize-target text-left"
       rows="3"
       spellcheck="false"
      ></textarea>
     </div>

     <div class="form-group">
     <label for="comment-content">Proof of work done(Url/Photoes)</label>
     <textarea placeholder="Enter url or screenshots"
     style="resize:vertical"
      name="url" 
      id="comment-content" 
      class="form-control autosize-target text-left"
       rows="2"
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
   </div>
  </main>
  @endsection