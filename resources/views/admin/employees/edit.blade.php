@extends('admin.layouts.app')
@section('title', 'Edit Employee')
@section('page-title', 'Edit Employee')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('employees.update', $employee->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ $employee->first_name }}" >
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ $employee->last_name }}" >
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="company_id">Company:</label>
                <select class="form-control @error('company_id') is-invalid @enderror" id="company_id" name="company_id" >
                    {{-- Assuming $companies is available from the controller --}}
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                </select>
                @error('company_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $employee->email }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $employee->phone }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to Employee List</a>
    </div>
@endsection
