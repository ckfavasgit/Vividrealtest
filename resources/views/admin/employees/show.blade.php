@extends('admin.layouts.app')
@section('title', 'Employee Details')
@section('page-title', 'Employee Details')
@section('content')
    <div class="container">
        <h2>Employee Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $employee->first_name }} {{ $employee->last_name }}</h5>
                <p class="card-text">Company: {{ $employee->company->name }}</p>
                <p class="card-text">Email: {{ $employee->email }}</p>
                <p class="card-text">Phone: {{ $employee->phone }}</p>

            </div>
        </div>

        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to Employee List</a>
    </div>
@endsection
