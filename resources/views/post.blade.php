@extends('layout')
@section('content')

<center>
<h3>{{$post->title}}</h3>
<img style="width: 50%;" src="{{$post->image}}" alt="">
<br>
<br>

<p>აღწერა: {{$post->description}}</p>
</center>
<br>
<h6>დაამატეთ კომენტარი:</h6>
<form onSubmit="addComment(this)">
    <input type="text" required name="author" class="form-control" placeholder="Your Name" id="">
    <br>
    <textarea name="comment" required id="" cols="10" rows="3" class="form-control" placeholder="Your Comment"></textarea>
    <br>
    <input type="submit" name="button" class="btn btn-primary" value="დამატება">
</form>
<hr>
<h4>კომენტარები:</h4>
<br>
@if(count($post->comments))
    @foreach($post->comments as $comment)
        <div class="card">
            <div class="card-body">
                <h4>ავტორი: {{$comment->author}}</h4>
                <p>{{$comment->comment}}</p>
            </div>
        </div>
    @endforeach
@else 
<br>
<center>კომენტარები არ არის</center>
<br>
@endif  
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>

function addComment(e) {

    author = e.author.value;
    comment = e.comment.value;
    post_id = "{{$post->id}}";

    axios.post('/comments/add', {
        post_id: post_id,
        author: author,
        comment: comment
    })
    .then(function (response) {
        
        alert("კომენტარი წარმატებით დაემატა")
        console.log(response);
        return false;
    })
    .catch(function (error) {
        alert(error)
    });

}


</script>

@endsection