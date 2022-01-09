@extends('admin.layout')
@section('content')
    

<a href="{{route('posts.create')}}" class="btn btn-primary">პოსტის დამატება</a>
<br><br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">პოსტის სახელი</th>
        <th scope="col">შეცვლა</th>
        <th scope="col">წაშლა</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td><a class="btn btn-success" href="{{ route('posts.edit', $post->id)}}">რედაქტირება</a></td>
        <td>
            
            <form action="{{ route('posts.destroy', $post->id)}}" method="post">
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