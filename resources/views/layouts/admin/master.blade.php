<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
        }

        .dashboard{
            display:flex;
        }

        .main-content{
            width:100%;
            margin-left:220px;
            padding:20px;
        }

    </style>

</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    @include('layouts.admin.sidebar')

    <div class="main-content">

        <!-- Header -->
        @include('layouts.admin.header')

        <br>

        <!-- Page Content -->
        @yield('content')

    </div>

</div>

</body>
</html>