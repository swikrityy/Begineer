<!DOCTYPE html>
<html>
<head>
    <title>Home List</title>

    <style>
        body{
            font-family:Arial;
            padding:40px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th, td{
            padding:15px;
            text-align:left;
        }

        a{
            text-decoration:none;
            padding:8px 14px;
            background:#0f172a;
            color:white;
            border-radius:5px;
        }

        .btn-delete{
            background:red;
            border:none;
            color:white;
            padding:8px 14px;
            cursor:pointer;
        }
    </style>
</head>
<body>

<h1>Home Page Data</h1>

<br>

<a href="{{ route('home.create') }}">Add New</a>

<br><br>

<table>

    <tr>
        <th>ID</th>
        <th>Hero Title</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    @foreach($homes as $home)

    <tr>

        <td>{{ $home->id }}</td>

        <td>{{ $home->hero_title }}</td>

        <td>
            <img src="{{ asset('storage/'.$home->image) }}"
                 width="120">
        </td>

        <td>

            <a href="{{ route('home.show', $home->id) }}">
                Show
            </a>

            <a href="{{ route('home.edit', $home->id) }}">
                Edit
            </a>

            <form action="{{ route('home.destroy', $home->id) }}"
                  method="POST"
                  style="display:inline;">

                @csrf
                @method('DELETE')

                <button class="btn-delete">
                    Delete
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

</body>
</html>