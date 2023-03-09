@vite(['resources/css/show.css','resources/js/app.js'])
@extends("master")

@section("content")
<div class="show-card">
  <div class="show-image">
    <img src="/images/user.jpg" alt="user's image">
  </div>
  <div class="show-content">
    <h3 class="title">{{$post->title}}</h3> 
    
    <article>{{$post->content}}</article>
    <div class="show-info">
      <small>publié le : {{$post->created_at->format("d/m/Y H:i:s")}}</small><br>
      <p>créé par : {{$post->user->name}}</p>
    </div>
  </div>
</div>
<a href="{{ route('posts.edit', $post) }}" class="submit-btn">Modifier</a>
<form method="POST" action="{{ route('posts.destroy', $post) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="submit-btn">{{__("Effacer")}}</button>
</form>


@endsection 

