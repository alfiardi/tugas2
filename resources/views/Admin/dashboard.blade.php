@extends('Layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-12 mb-4">
            <div class="card bg-gradient text-white border-0" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-1">
                                <i class="fas fa-tachometer-alt me-2"></i>Admin Dashboard
                            </h3>
                            <p class="mb-0 opacity-75">Welcome to the administrative control panel</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shield-alt fa-3x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-user-plus fa-3x text-success"></i>
                    </div>
                    <h5 class="card-title">Create New Admin</h5>
                    <p class="card-text text-muted">Add a new administrator to the system</p>
                    <a href="{{ route('admin.create') }}" class="btn btn-success">
                        <i class="fas fa-plus me-1"></i>Create Admin
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text text-muted">View and manage all registered users</p>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">
                        <i class="fas fa-users me-1"></i>View Users
                    </a>
                </div>
            </div>
        </div>

        <!-- System Stats -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-bar me-2"></i>System Overview
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="border-end">
                                <h4 class="text-success">
                                    <i class="fas fa-users"></i> 0
                                </h4>
                                <small class="text-muted">Total Users</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border-end">
                                <h4 class="text-info">
                                    <i class="fas fa-user-shield"></i> 0
                                </h4>
                                <small class="text-muted">Total Admins</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border-end">
                                <h4 class="text-warning">
                                    <i class="fas fa-box"></i> 0
                                </h4>
                                <small class="text-muted">Total Products</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-primary">
                                <i class="fas fa-tags"></i> 1
                            </h4>
                            <small class="text-muted">Categories</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
