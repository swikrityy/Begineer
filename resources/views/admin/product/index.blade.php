@extends('layouts.admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog Table</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
    }

    .table-container {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 14px;
      border: 1px solid #ddd;
      text-align: left;
    }

    table th {
      background-color: #007bff;
      color: white;
    }

    table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    table tr:hover {
      background-color: #f1f1f1;
    }

    .read-btn {
      padding: 8px 14px;
      background: #28a745;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .read-btn:hover {
      background: #218838;
    }
  </style>
</head>
<body>

  <div class="table-container">
    <h2>Latest Blog Posts</h2>

    <table>
      <thead>
        <tr>
         
          <th>Product Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Description</th>
          <th >Show</th>
          <th >Edit</th>
          <th >Create</th>
          <th >Delete</th>
        </tr>
      </thead>

      <tbody>
        <tr>
             @foreach ( $datas as $data )
             <tr>

   
          <td>{{ $data->product_name }}</td>
          <td>{{ $data->category }}</td>
          <td>{{ $data->price }}</td>
          <td>{{ $data->quantity }}</td>
          <td>{{ $data->description }}</td>
          <td><a href="{{ route('product.show',$data->id) }}"><button>show</button></a></td>
          <td><a href="{{ route('product.edit', $data->id) }}"><button>edit</button></a></td>
          <td><a href="{{ route('product.create', $data->id) }}"><button>create</button></a></td>
          <td><form action="{{ route('product.destroy',$data->id) }}" method="post">
           @csrf
           @method('DELETE')
          <button type="submit">delete</button></form></td>
        </tr>
         @endforeach
        </tr>

       
      </tbody>
    </table>
  </div>

</body>
</html>

@endsection