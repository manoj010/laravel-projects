<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <style>
        h1 {
            text-align: center;
            color: red;
        }

        .news-block {
            text-align: center;
            padding: 10px 10px;
        }
    </style>
</head>
<body>
    <h1>{{$header}}</h1>

    @foreach ($articles as $value)
        <div class="news-block">
            <h1><a href="article/{{$value['id']}}">{{$value['title']}}</a></h1>
            <p>{{$value['desc']}}</p>
        </div>
    @endforeach 
</body>
</html>