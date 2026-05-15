<style>

.sidebar{
    width:220px;
    height:100vh;
    background:#111827;
    color:white;
    padding:20px;
    position:fixed;
    left:0;
    top:0;
}

.sidebar h2{
    text-align:center;
    margin-bottom:30px;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    padding:15px;
    margin:10px 0;
    background:#1f2937;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

.sidebar ul li:hover{
    background:#374151;
}

.sidebar ul li a{
    color:white;
    text-decoration:none;
    display:block;
}

</style>

<div class="sidebar">

    <h2>Admin</h2>

    <ul>
        <li><a href="#">Dashboard</a></li>
       <li><a href="{{ route('blogtable') }}">Blogs</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Settings</a></li>
    </ul>

</div>