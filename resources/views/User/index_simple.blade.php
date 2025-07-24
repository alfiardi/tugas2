@extends('Layouts.app')

@section('title', 'Users Data')

@section('content')
<div class="container mt-4">
    <h1>Users Management</h1>
    <p>This is a test version to identify the issue.</p>
    
    @if(isset($allUsers))
        <p>Users count: {{ $userCount }}</p>
    @else
        <p>No users data available</p>
    @endif
</div>
@endsection
