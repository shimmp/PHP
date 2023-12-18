<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <x-app-layout>
    <x-slot name="header">
        header
        </x-slot>
    </head>
    <body>
         <div>
        @foreach($questions as $question)
            <div>
                <a href="https://teratail.com/questions/{{ $question['id'] }}">
                    {{ $question['title'] }}
                </a>
            </div>
        @endforeach
    </div>
        <h1>Blog Name</h1>
        {{ Auth::user() }}
         
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href = "/posts/{{$post->id}}">{{$post->title }}</a>
                    <p class='body'>{{ $post->body }}</p>
                   <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>

                      @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        {{ Auth::user()->name }}
        <h2 class ='title'>
            <a href='/posts/create'>create</a>
            
            
            </h2>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
    function deletePost(id) {
        'use strict'
        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
    </body>
    </x-app-layout>
</html>