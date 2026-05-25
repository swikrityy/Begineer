@extends('layouts.admin.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Index</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .gallery-container{
            max-width: 1200px;
            margin: auto;
        }

        .top-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .create-btn{
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .create-btn:hover{
            background: #0056b3;
        }

        .gallery-grid{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .gallery-card{
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px;
            text-align: center;
        }

        .gallery-image{
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-group{
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .edit-btn,
        .delete-btn{
            padding: 8px 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .edit-btn{
            background: #28a745;
        }

        .edit-btn:hover{
            background: #218838;
        }

        .delete-btn{
            background: #dc3545;
        }

        .delete-btn:hover{
            background: #c82333;
        }
    </style>
</head>
<body>

    <div class="gallery-container">

        <div class="top-bar">
            <h2>Gallery Images</h2>

            <a href="{{ route('gallery.create') }}" class="create-btn">
                Add Image
            </a>
        </div>

        <div class="gallery-grid">

            @foreach($galleries as $gallery)

            <div class="gallery-card">

                <img 
                    src="{{ asset('/storage/' . $gallery->image) }}" 
                    alt="Gallery Image"
                    class="gallery-image"
                >

                <div class="btn-group">

                    <a href="{{ route('gallery.edit', $gallery->id) }}">
                        <button class="edit-btn">Edit</button>
                    </a>

                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-btn">
                            Delete
                        </button>
                    </form>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</body>
</html>

@endsection