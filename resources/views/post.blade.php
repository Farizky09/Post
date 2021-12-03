@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    {!! $post->body !!}
    
    <h4>Komentar</h4>
    <form action="{{route('insertComment',$post->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Tambah</span>
            </div>
            <input type="text" name="comment" class="form-control" aria-label="Tambah komentar" aria-describedby="inputGroup-sizing-sm">
          </div>
          <button type="submit" class="btn btn-default" >
            Tambah Postingan
            </button> 
    </form>
    <br>
    <br>
     
   @foreach ($comments as $comment_post)
   <div class="card" style="width: 40rem;">
    <div class="card-body">
      <h5 class="card-title">{{$comment_post->comment}}</h5>
      <p class="card-text">{{$comment_post->created_at}}</p>
    </div>
  </div>
   @endforeach
    <a href="/posts">Back To Post</a>

      
@endsection