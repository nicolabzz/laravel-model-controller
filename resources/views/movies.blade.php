<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../sass/app.scss">
    <title>MoV13s</title>
</head>
<body>
    <div class="container">
        <h1>MOVIES</h1>
        <div class="row g-2">
            @foreach ($movies as $movie)
            <div class="card col-6">
                <img src="nopic.png" alt="">
                <div class="card-header">
                    <h3>{{$movie->title}}</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$movie->Original_Title}}</p>
                    <p class="card-text">{{$movie->Nationality}}</p>
                    <p class="card-text">{{$movie->Date}}</p>
                    <p class="card-text">{{$movie->Vote}}</p>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
