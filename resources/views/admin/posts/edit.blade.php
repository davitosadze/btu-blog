@extends('admin.layout')
@section('content')

<form method="POST" action="{{route('posts.update', $post->id)}}">
    @csrf
    @method('put')
    <br>
    <input required placeholder="პოსტის სახელი" type="text" name="title" value="{{$post->title}}" class="form-control">
    <br>
    <br>
    <input required placeholder="სურათის ლინკი მაგ: https://mcdonalds.ge/a7f24fee96fe-resized.png" value="{{$post->image}}" type="text" name="image" class="form-control">
    <br>
    <textarea name="description" id="" placeholder="აღწერა" class="form-control" cols="30" rows="3">{{$post->description}}</textarea>
    <br>
    <input type="submit" name="submit" class="btn btn-primary" value="განახლება" >
</form>    


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ავტორი</th>
        <th scope="col">კომენტარი</th>

        <th scope="col">წაშლა</th>
      </tr>
    </thead>
    <tbody>
    @foreach($post->comments as $comment)
      <tr>
        <th scope="row">{{$comment->id}}</th>
        <td>{{$comment->author}}</td>
        <td>{{$comment->comment}}</td>


        <td>
            <form action="{{ route('admin.comments.delete', $comment->id)}}" method="post">
                <input class="btn btn-danger" type="submit" value="წაშლა" />
                @method('delete')
                @csrf
            </form>    
        </td>
      </tr>
      @endforeach

      
    </tbody>
  </table>


@endsection