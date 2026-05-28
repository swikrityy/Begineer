@extends('layouts.master')

@section('content')

<div class="container mt-5">

    <div class="card">
        <div class="card-header">
            <h2>Service Details</h2>
        </div>

        <div class="card-body">

            <h4>
                <strong>Title:</strong>
                {{ $service->title }}
            </h4>

            <h5 class="mt-3">
                <strong>Sub Title:</strong>
                {{ $service->sub_title }}
            </h5>

            <p class="mt-3">
                <strong>Paragraph:</strong><br>
                {{ $service->paragraph }}
            </p>

            <a href="{{ route('services.index') }}" class="btn btn-dark mt-3">
                Back
            </a>

        </div>
    </div>

</div>

@endsection