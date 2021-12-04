@extends('pages.layout.app')
@section('content')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class='content'>
<div class="container" style="background:#FFCCFF;" >
    <div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
        
            <!-- Fluid width widget -->        
    	    <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-comment"></span> 
                        Recent Comments
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                            
                        @foreach($post as $p)
                        <img src="/storage/app/public/post_image/{{$p->postimage}}" alt ="" class="img-circle">
                        <div class="card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center"><span><small class="font-weight-bold text-primary">{{$p->firstname}} {{$p->lastname}}</small> <small class="font-weight-bold">{{$p->body}}</small></span> </div> <small>{{$p->created_at}}</small>
                        
                        @if(!Auth::guest())
                        @if(Auth::user()->id == $p->user_id)
                        <a class ="pull-right" href="about/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                        @endif
                        @endif
   
                  
            </div>
        </div>
        @endforeach
                            </div>
                        </li>
 
                    </ul>
            
                </div>
            </div>
            <!-- End fluid width widget --> 
            
		</div>
	</div>

</div>
</div>
@endsection