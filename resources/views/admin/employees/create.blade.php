@extends('admin.layouts.app')
@section('title', 'Create Employee')
@section('page-title', 'Create Employee')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="company_id">Company:</label>
                <select class="form-control @error('company_id') is-invalid @enderror" id="company_id" name="company_id" >
                    {{-- Assuming $companies is available from the controller --}}
                    <option value="">Select</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
                @error('company_id')
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
                <label for="phone">Phone:</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to Employee List</a>
    </div>
@endsection
