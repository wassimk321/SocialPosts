@extends('pages.layout.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="content">
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Edit post</h1>
			<form action="{{route('posts.destroy',$posts->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">
    		            Delete
    		        </button>
			</form>
    		<form action="{{route('posts.update',$posts->id)}}" method="POST" enctype="multipart/form-data">
    		    @csrf
                {{method_field('PUT')}}
    		    <div class="form-group has-error">
    		        <label for="slug">Subject <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="subject" value ="{{$posts->subject}}"/>
    		    </div>
    		    

                <div class="form-group">
    		        <label for="title">FirstName <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="firstname" value="{{$posts->firstname}}" />
    		    </div>


                <div class="form-group">
    		        <label for="title">LastName <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="lastname" value="{{$posts->lastname}}" />
    		    </div>


    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="body" value = "{{$posts->body}}" >{{$posts->body}}</textarea>
    		    </div>
				<div class="form-group">
    
				<input type="file" id="myFile" name="postimage">
				</div>
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Update
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
</div>
@endsection