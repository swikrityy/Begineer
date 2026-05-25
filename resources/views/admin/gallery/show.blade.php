@extends('layouts.admin.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Gallery Image</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .show-container{
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2{
            margin-bottom: 20px;
        }

        .gallery-image{
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .btn-group{
            margin-top: 20px;
        }

        .back-btn{
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover{
            background: #0056b3;
        }
    </style>
</head>
<body>

    <div class="show-container">

        <h2>Gallery Image</h2>

        <img 
            src="{{ asset('/storage/' . $gallery->image) }}" 
            alt="Gallery Image"
            class="gallery-image"
        >

        <div class="btn-group">
            <a href="{{ route('gallery.index') }}" class="back-btn">
                Back
            </a>
        </div>

    </div>

</body>
</html>

@endsection