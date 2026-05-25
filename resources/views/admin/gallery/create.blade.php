@extends('layouts.admin.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Create Form</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .form-container{
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group{
            margin-bottom: 20px;
        }

        label{
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="file"]{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-btn{
            width: 100%;
            padding: 12px;
            border: none;
            background: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover{
            background: #0056b3;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Create Gallery</h2>

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="image" required>
            </div>

            <button type="submit" class="submit-btn">
                Upload Image
            </button>
        </form>
    </div>

</body>
</html>

@endsection