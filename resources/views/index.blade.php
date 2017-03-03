<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>资源控制器</title>
        <ul>
            <li><a href="good/good.c">添加商品</a></li>
            <li><a href="/good/1">浏览单个商品</a> </li>
            <li><a href="/good/1">更新商品</a> </li>
            <form action="/good/1" method="POST">
                {{ method_field('DELETE') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit">

            </form>
        </ul>



    </body>
</html>
