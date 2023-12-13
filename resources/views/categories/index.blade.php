<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Categories</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class ='title' >
            {{ $category->title }}
            </h1>
        <div class='content'>
            <h3>本文</h3>
            <p>{{$category->title}}</p3>
        </div>
        <div class='footer'>
            <a href = "/">戻る</a>
        </div>
    </body>
</html>