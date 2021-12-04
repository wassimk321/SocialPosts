@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a href="/posts/create" class="btn btn-primary btn-lg">New Post</a>
                    <a href="/about" class="btn btn-primary btn-lg">ViewPosts Post</a>
                
                
                <!-- @foreach($posts as $p)
                <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$p->subject}}</h3>
                    <div class="panel-body">{{$p->body}}</div>
                </div>
                </div>
                @endforeach -->
                
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
    background-color: #f7f6f6
}

.card {
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 4px
}

.dots {
    height: 4px;
    width: 4px;
    margin-bottom: 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block
}

.badge {
    padding: 7px;
    padding-right: 9px;
    padding-left: 16px;
    box-shadow: 5px 6px 6px 2px #e9ecef
}

.user-img {
    margin-top: 4px
}

.check-icon {
    font-size: 17px;
    color: #c3bfbf;
    top: 1px;
    position: relative;
    margin-left: 3px
}

.form-check-input {
    margin-top: 6px;
    margin-left: -24px !important;
    cursor: pointer
}

.form-check-input:focus {
    box-shadow: none
}

.icons i {
    margin-left: 8px
}

.reply {
    margin-left: 12px
}

.reply small {
    color: #b7b4b4
}

.reply small:hover {
    color: green;
    cursor: pointer
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $p)
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"><span><small class="font-weight-bold text-primary">{{$p->firstname}} {{$p->lastname}}</small> <small class="font-weight-bold">{{$p->body}}</small></span> </div> <small>{{$p->created_at}}</small>
                    <a class ="pull-right" href="about/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
   
                  
            </div>
        </div>
        @endforeach
    </div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                                </body>
                            </html>
              
              
              
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

