@extends('layout')

@section('content')
    

<div style="width:100%; margin-top:20px; float:left;" class="category">

    @foreach($posts as $post)
            <div class="card" style="margin-top:10px; float:left; margin-left:10px; width: 16.5rem;">
                <center>
                <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>

                <a href="{{ route('index.post', $post->id) }}" class="btn btn-primary">სრულად</a>
                </div>
                </center>
            </div>
    @endforeach
<br>

<br>
<br>
<br>
<br>
</div>

@endsection