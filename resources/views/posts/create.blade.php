<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>title</h2>
                <input type="text" name=post[title] placeholder="タイトル">
            </div>
            <diV class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした"></textarea>
            </diV>
            <input type="submit" value="store">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>