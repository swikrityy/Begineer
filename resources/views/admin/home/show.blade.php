<!DOCTYPE html>
<html>
<head>
    <title>Show Home</title>

    <style>

        body{
            font-family:Arial;
            padding:40px;
        }

        img{
            width:400px;
            border-radius:10px;
        }

    </style>

</head>
<body>

<h1>{{ $home->hero_title }}</h1>

<p>{{ $home->hero_description }}</p>

<h2>{{ $home->about_title }}</h2>

<p>{{ $home->about_description }}</p>

<br>

<img src="{{ asset('storage/'.$home->image) }}">

</body>
</html>