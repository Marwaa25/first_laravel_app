@vite(['resources/css/index.css','resources/js/app.js'])

@extends("master")
@section("meta")
<title>Liste des postes</title>
@endsection
@section("content")
<h1>Liste des postes</h1>
<a href="/posts/create" class="submit-btn">{{__("Ajouter un poste")}}</a>

<div class="posts-grid">
    @if(count($posts)>0)
        @foreach ($posts as $post )
            <div class="post-card">
                <a href="{{ route("posts.show",$post)}}">
                    <h3>{{$post->title}}</h3>
                </a>
                <small>publié le {{$post->created_at->format("d/m/Y H:i:s")}}</small>
            </div>
        @endforeach
    @else
        <p>Aucun post disponible dans la base de données</p>
    @endif
</div>
@endsection

