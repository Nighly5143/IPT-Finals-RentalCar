@extends('base')

@section('content')
    <h1>Add Car</h1>

    <form action="{{ route('cars.store') }}" autocomplete="off" method="POST">
        @csrf
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
            @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" required>
            @error('model')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" required>
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rental_rate" class="form-label">Rental Rate</label>
            <input type="number" class="form-control" id="rental_rate" name="rental_rate" required>
            @error('rental_rate')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Add more form fields as needed -->

        <button type="submit" class="btn btn-primary">Create Car</button>
    </form>
@endsection
