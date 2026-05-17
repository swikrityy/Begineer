@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Information Page</title>

  <style>
    body{
      margin:0;
      padding:0;
      font-family:Arial, sans-serif;
      background:#f2f2f2;
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
    }

    .info-box{
      width:400px;
      background:white;
      padding:30px;
      border-radius:12px;
      box-shadow:0 4px 15px rgba(0,0,0,0.1);
    }

    .info-box h1{
      text-align:center;
      margin-bottom:25px;
      color:#333;
    }

    .info{
      margin-bottom:15px;
      font-size:18px;
      color:#555;
    }

    .info span{
      font-weight:bold;
      color:black;
    }
  </style>
</head>
<body>

  <div class="info-box">
    <h1>User Information</h1>

    <div class="info" >
      <span>Product Name: {{ $data->product_name }}</span> 
    </div>

    <div class="info">
      <span>Category: {{ $data->category }}</span> 
    </div>

    <div class="info">
      <span>Price: {{ $data->price }}</span>
    </div>

     <div class="info">
      <span>Quantity: {{ $data->quantity }}</span>
    </div>

    <div class="info">
      <span>Description: {{ $data->description }}</span>
    </div>
    
  </div>

</body>
</html>
@endsection