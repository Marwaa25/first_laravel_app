@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="description" content="Tutoriel Laravel">
    <meta name="keywords" content="HTML,CSS,JS">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
@endsection

    <p> Corps du contenu

@section('content')
@if ($type === 'stagiaire')
    l'institut {{$name}}
@elseif ($type === 'ecole')
    le stagiaire {{$name}}
@else 
    Je n'ai pas de résultat
@endif
</p>
@endsection 
