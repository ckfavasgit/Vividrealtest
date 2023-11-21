@extends('admin.layouts.app')
@section('title', 'Company Details')
@section('page-title', 'Company Details')
@section('content')
    <div class="container">
        <h2>Company Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $company->name }}</h5>
                <p class="card-text">Email: {{ $company->email }}</p>
                <p class="card-text">Website: {{ $company->website }}</p>
                <p class="card-text">Logo: <img src="{{ $company->logo }}" height="50" /></p>
            </div>
        </div>

        <a href="{{ route('companies.index') }}" class="btn btn-primary mt-3">Back to Company List</a>
    </div>
@endsection
