@extends('admin.layouts.app')
@section('title', 'Edit Company')
@section('page-title', 'Edit Company')
@section('content')
    <div class="container">

        <form method="post" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $company->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $company->email }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="logo">Logo (minimum 100x100):</label>
                <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" accept="image/*">
                @error('logo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($company->logo)
                    <img src="{{ asset('storage/' . $company->logo) }}" height="50" />
                @endif
            </div>

            <div class="form-group">
                <label for="website">Website:</label>
                <input type="url" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ $company->website }}">
                @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
