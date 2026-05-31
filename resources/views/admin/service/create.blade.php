@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Create Service</h2>

    <form action="{{ route('services.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Sub Title</label>
            <input type="text" name="sub_title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            Save
        </button>

    </form>

</div>

@endsection