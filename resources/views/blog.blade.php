@extends('template')

@section('title')
    Listado
@endsection

@section('content')

    <div>
        <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
        <h1>Listado</h1>

        @foreach($posts as $post)
            <p>
                <strong>{{ $post->id}}</strong>
                <a href="{{ route('post', $post->slug) }}">
                    {{ $post->title}}
                </a>
            </p>
            <span>{{$post->user->name}}</span>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection
