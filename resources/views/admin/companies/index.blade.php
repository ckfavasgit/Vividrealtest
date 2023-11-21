<!-- resources/views/admin/companies/index.blade.php -->

@extends('admin.layouts.app')
@section('title', 'Company List')
@section('page-title', 'Company List')
@section('content')
    <div class="container">
        <span class="float-right"><a href="{{ route('companies.create') }}" class="btn btn-primary">Add Company</a></span>

        <table class="table" id="companies-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    
@endsection
