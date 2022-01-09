@extends('admin.layout')
@section('content')

<form method="POST" action="{{route('posts.store')}}">
    @csrf

    <br>
    <input required placeholder="პოსტის სახელი" type="text" name="title" class="form-control">
    <br>
    <br>
    <input required placeholder="სურათის ლინკი მაგ: https://mcdonalds.ge/a7f24fee96fe-resized.png" type="text" name="image" class="form-control">
    <br>
    <textarea name="description" id="" placeholder="აღწერა" class="form-control" cols="30" rows="3"></textarea>
    <br>
    <input type="submit" name="submit" class="btn btn-primary" value="დამატება" >
</form>    

@endsection