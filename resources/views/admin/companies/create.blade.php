@extends('admin.layouts.app')
@section('title', 'Add Company')
@section('page-title', 'Add Company')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('companies.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="logo">Logo (minimum 100x100):</label>
                <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" accept="image/*" value="{{ old('logo') }}">
                @error('logo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="website">Website:</label>
                <input type="url" class="form-control @error('website') is-invalid @enderror" id="website" name="website">
                @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
