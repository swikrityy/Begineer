@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Form</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f4f4f4;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.container{
    width:500px;
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.container h2{
    text-align:center;
    margin-bottom:25px;
    color:#e39831;
}

.form-group{
    margin-bottom:18px;
}

.form-group label{
    display:block;
    margin-bottom:6px;
    font-weight:bold;
    color:#333;
}

.form-group input,
.form-group textarea,
.form-group select{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    outline:none;
    transition:0.3s;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus{
    border-color:#e39831;
}

.form-group textarea{
    resize:none;
    height:100px;
}

.btn{
    width:100%;
    padding:14px;
    background:#e39831;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#c97d18;
}
</style>
</head>
<body>

<div class="container">
    <h2>Product Form</h2>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="product_name" placeholder="Enter product name" required>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category" required>
                <option value="">Select Category</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Food</option>
                <option>Books</option>
            </select>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" placeholder="Enter price" required>
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity" placeholder="Enter quantity" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" placeholder="Enter product description"></textarea>
        </div>

        <button type="submit" class="btn">Add Product</button>

    </form>
</div>

</body>
</html>

@endsection