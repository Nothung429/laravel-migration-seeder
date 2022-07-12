<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Trains</h1>
        <ul>
            @foreach ($trains as $train)
                <li>
                    <p>{{$train['departure_station']}}</p>
                    <p>{{$train['arrival_station']}}</p>
                    <p>{{$train['train_code']}}</p>
                    <p>{{$train['departure_time']}}</p>
                    <p>{{$train['arrival_time']}}</p>
                </li>
            @endforeach
        </ul>
    </body>
</html>