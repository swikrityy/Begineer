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
     
      <th>Name</th>
      <th>Age</th>
      <th>Country</th>
      <th>Show</th>
    </tr>

    <tr>
     @foreach ( $datas as $data )
        
      <tr>
        <td>{{ $data->name }}</td>
        <td>{{ $data->age }} </td>
        <td>{{ $data->country }}</td>
        <td><a href="{{ route('show',$data->id) }}"><button>show</button></a></td>
         </tr>
       
        @endforeach
    </tr>

    
  </table>

</body>
</html>