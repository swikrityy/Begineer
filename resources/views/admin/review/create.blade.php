@extends('layouts.admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Review Form</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    body{
      background:#f4f6f9;
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
    }

    .container{
      width:400px;
      background:#fff;
      padding:30px;
      border-radius:12px;
      box-shadow:0 4px 10px rgba(0,0,0,0.1);
    }

    h2{
      text-align:center;
      margin-bottom:20px;
      color:#333;
    }

    .form-group{
      margin-bottom:15px;
    }

    label{
      display:block;
      margin-bottom:6px;
      font-weight:bold;
      color:#555;
    }

    input,
    textarea,
    select{
      width:100%;
      padding:10px;
      border:1px solid #ccc;
      border-radius:8px;
      font-size:14px;
    }

    textarea{
      resize:none;
      height:100px;
    }

    .rating{
      display:flex;
      gap:10px;
      margin-top:8px;
    }

    .rating label{
      font-weight:normal;
    }

    button{
      width:100%;
      padding:12px;
      border:none;
      background:#007bff;
      color:#fff;
      border-radius:8px;
      font-size:16px;
      cursor:pointer;
      transition:0.3s;
    }

    button:hover{
      background:#0056b3;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Customer Review Form</h2>

    <form action="{{ route('review.store') }}" method="post">
        @csrf

      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input 
          type="text" 
          id="fullname"
          name="fullname"
          placeholder="Enter your product name" 
          required
        >
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input 
          type="email" 
          id="email"
          name="email"
          placeholder="Enter your email" 
          required
        >
      </div>

      <div class="form-group">
        <label for="product">Product / Service</label>
        <input 
          type="text" 
          id="product"
          name="product"
          placeholder="What are you reviewing?" 
          required
        >
      </div>

      <div class="form-group">
        <label>Rating</label>

        <div class="rating">
          <label>
            <input type="radio" name="rating" value="1"> 1
          </label>

          <label>
            <input type="radio" name="rating" value="2"> 2
          </label>

          <label>
            <input type="radio" name="rating" value="3"> 3
          </label>

          <label>
            <input type="radio" name="rating" value="4"> 4
          </label>

          <label>
            <input type="radio" name="rating" value="5"> 5
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="review">Your Review</label>

        <textarea 
          id="review"
          name="review"
          placeholder="Write your feedback here..."
        ></textarea>
      </div>

      <button type="submit" name="submit_review">
        Submit Review
      </button>

    </form>
  </div>

</body>
</html>
@endsection