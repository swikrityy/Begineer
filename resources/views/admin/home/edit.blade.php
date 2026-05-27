<!DOCTYPE html>
<html>
<head>
    <title>Edit Home</title>

    <style>

        body{
            font-family:Arial;
            padding:40px;
        }

        form{
            width:500px;
        }

        input, textarea{
            width:100%;
            padding:12px;
            margin-bottom:20px;
        }

        img{
            width:200px;
            margin-bottom:20px;
        }

        button{
            padding:12px 20px;
            background:#0f172a;
            color:white;
            border:none;
        }

    </style>

</head>
<body>

<h1>Edit Home Page</h1>

<form action="{{ route('home.update', $home->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <input type="text"
           name="hero_title"
           value="{{ $home->hero_title }}">

    <textarea name="hero_description">{{ $home->hero_description }}</textarea>

    <input type="text"
           name="about_title"
           value="{{ $home->about_title }}">

    <textarea name="about_description">{{ $home->about_description }}</textarea>

    <img src="{{ asset('storage/'.$home->image) }}">

    <input type="file" name="image">

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>