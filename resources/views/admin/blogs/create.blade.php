@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Table with Form</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    /* Form Styling */
    form {
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    .submit-btn {
      background: #007bff;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background: #0056b3;
    }

    /* Table Styling */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    table th {
      background: #007bff;
      color: white;
    }

    table tr:nth-child(even) {
      background: #f9f9f9;
    }

    .read-btn {
      background: #28a745;
      color: white;
      padding: 8px 12px;
      text-decoration: none;
      border-radius: 4px;
    }

    .read-btn:hover {
      background: #218838;
    }
  </style>
</head>
<body>

  <div class="container">

    <h2>Create Blog Post</h2>

    <form action="{{ route('blogstore') }}" method="post">
      <div class="form-group">
        <label for="title">Blog Title</label>
        <input type="text" id="blogtitle" name="blogtitle" placeholder="Enter blog title">
      </div>

      <div class="form-group">
        <label for="author">Author Name</label>
        <input type="text" id="author" name="author" placeholder="Enter author name">
      </div>

      <div class="form-group">
        <label for="date">Publish Date</label>
        <input type="date" id="date" name="date">
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category">
          <option value="">Select Category</option>
          <option>Web Development</option>
          <option>Programming</option>
          <option>Design</option>
          <option>Technology</option>
        </select>
      </div>

      <div class="form-group">
        <label for="content">Blog Content</label>
        <textarea id="content" name="content" placeholder="Write your blog content here..."></textarea>
      </div>

      <button type="submit" class="submit-btn">Add Blog</button>
    </form>

  </div>

</body>
</html>

@endsection
