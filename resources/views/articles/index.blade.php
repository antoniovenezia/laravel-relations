<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach($articles as $article)
        <div>
            {{-- @dd($article) --}}
            <div>{{ $article->title }}</div>
            <div>{{ $article->typeof }}</div>
            <div>{{ $article->subtitle }}</div>
            <div>{{ $article->paragraph }}</div>
            <div>{{ $article->author()->first()->name }}</div>
            <img src="{{ $article->picture }}" alt=""><br>
            
        </div>
    @endforeach

</body>
</html>