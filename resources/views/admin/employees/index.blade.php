@extends('admin.layouts.app')
@section('title', 'Employee List')
@section('page-title', 'Employee List')
@section('content')
    <div class="container">
    <span class="float-right"><a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a></span>
        <table class="table" id="employees-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
