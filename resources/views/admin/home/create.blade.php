<!DOCTYPE html>
<html>
<head>
    <title>Create Home</title>

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

        button{
            padding:12px 20px;
            background:#0f172a;
            color:white;
            border:none;
        }

    </style>

</head>
<body>

<h1>Create Home Page</h1>

<form action="{{ route('home.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <input type="text"
           name="hero_title"
           placeholder="Hero Title">

    <textarea name="hero_description"
              placeholder="Hero Description"></textarea>

    <input type="text"
           name="about_title"
           placeholder="About Title">

    <textarea name="about_description"
              placeholder="About Description"></textarea>

    <input type="file" name="image">

    <button type="submit">
        Save
    </button>

</form>

</body>
</html>