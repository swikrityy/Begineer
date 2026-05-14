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
          <th>ID</th>
          <th>Blog Title</th>
          <th>Author</th>
          <th>Date</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>How to Learn HTML</td>
          <td>John Doe</td>
          <td>2026-05-14</td>
          <td>Web Development</td>
          <td><a href="#" class="read-btn">Read More</a></td>
        </tr>

       
      </tbody>
    </table>
  </div>

</body>
</html>