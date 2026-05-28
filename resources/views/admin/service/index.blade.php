@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h2>Services List</h2>

        <a href="{{ route('services.create') }}" class="btn btn-primary">
            Add Service
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Paragraph</th>
                <th width="220">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->sub_title }}</td>
                <td>{{ $service->paragraph }}</td>

                <td>
                    <a href="{{ route('services.show',$service->id) }}" class="btn btn-info btn-sm">
                        Show
                    </a>

                    <a href="{{ route('services.edit',$service->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('services.destroy',$service->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection