<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Registration Form</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 30px;
    }

    .form-container {
      width: 400px;
      margin: auto;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 12px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      border: none;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>User Registration Form</h2>

    <form method="post" action="{{ route('update',$userdata->id) }}">
        @csrf
      <label for="id">ID</label>
      <input type="number" id="id" name="id"  placeholder="Enter ID">

      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="{{ $userdata->name }}" placeholder="Enter Name">

      <label for="age">Age</label>
      <input type="number" id="age" name="age" value="{{ $userdata->age }}" placeholder="Enter Age">

      <label for="country">Country</label>
      <input type="text" id="country" name="country" value="{{ $userdata->country }}" placeholder="Enter Country">

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>