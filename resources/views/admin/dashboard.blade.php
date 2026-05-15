@extends('layouts.admin.master')

@section('content')

<div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">

    <div style="background:white; padding:20px; border-radius:10px;">
        <h3>Total Users</h3>
        <h1>1200</h1>
    </div>

    <div style="background:white; padding:20px; border-radius:10px;">
        <h3>Total Orders</h3>
        <h1>530</h1>
    </div>

    <div style="background:white; padding:20px; border-radius:10px;">
        <h3>Revenue</h3>
        <h1>$12K</h1>
    </div>

    <div style="background:white; padding:20px; border-radius:10px;">
        <h3>Products</h3>
        <h1>320</h1>
    </div>

</div>

@endsection