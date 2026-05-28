@extends('layouts.master')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Edit Service</h2>

    <form action="{{ route('services.update',$service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $service->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Sub Title</label>
            <input type="text" name="sub_title" value="{{ $service->sub_title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="5">{{ $service->paragraph }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection