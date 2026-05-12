<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple HTML Table</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    table {
      width: 60%;
      border-collapse: collapse;
      margin: auto;
    }

    th, td {
      border: 1px solid #333;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Country</th>
    </tr>

    <tr>
      <td>1</td>
      <td>John</td>
      <td>25</td>
      <td>USA</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Alice</td>
      <td>28</td>
      <td>Canada</td>
    </tr>

    <tr>
      <td>3</td>
      <td>David</td>
      <td>30</td>
      <td>UK</td>
    </tr>
  </table>

</body>
</html>