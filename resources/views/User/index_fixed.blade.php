@extends('Layouts.app')

@section('title', 'Users Data')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Header Section -->
            <div class="text-center mb-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-users fa-2x text-white"></i>
                </div>
                <h2 class="text-primary fw-bold mb-2">Users Management</h2>
                <p class="text-muted">View and manage all registered users</p>
            </div>

            <!-- Action Buttons -->
            <div class="row mb-4">
                <div class="col">
                    <a href="{{ route('user.create') }}" class="btn btn-success">
                        <i class="fas fa-plus me-2"></i>Add New User
                    </a>
                </div>
            </div>

            <!-- All Users Section -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-gradient text-white border-0" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="mb-0">
                                <i class="fas fa-list me-2"></i>All Users
                            </h4>
                            <small class="opacity-75">Complete list of registered users</small>
                        </div>
                        <div class="col-auto">
                            <span class="badge bg-light text-dark fs-6">{{ $userCount }} Total</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if($allUsers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allUsers as $index => $user)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                        <span class="text-white fw-bold">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                                                    </div>
                                                    <strong>{{ $user->name }}</strong>
                                                </div>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ isset($user->created_at) ? \Carbon\Carbon::parse($user->created_at)->format('M d, Y') : 'N/A' }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-eye me-1"></i>View
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning">
                                                        <i class="fas fa-edit me-1"></i>Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash me-1"></i>Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-users fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">No Users Found</h5>
                            <p class="text-muted">Get started by adding your first user.</p>
                            <a href="{{ route('user.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Add First User
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- First User Section -->
            @if($firstUser)
            <div class="card shadow border-0 mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-star text-warning me-2"></i>First Registered User
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="text-white fw-bold fs-5">{{ strtoupper(substr($firstUser->name, 0, 1)) }}</span>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="mb-1">{{ $firstUser->name }}</h6>
                            <p class="mb-0 text-muted">{{ $firstUser->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- User Names List -->
            <div class="card shadow border-0 mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-tags text-info me-2"></i>User Names (Pluck)
                    </h5>
                </div>
                <div class="card-body">
                    @if($userNames->count() > 0)
                        <div class="row">
                            @foreach($userNames as $name)
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <span class="badge bg-info text-white px-3 py-2">{{ $name }}</span>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted mb-0">No names to display</p>
                    @endif
                </div>
            </div>

            <!-- Ordered Users -->
            <div class="card shadow border-0 mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-sort-alpha-down text-success me-2"></i>Users Ordered by Name
                    </h5>
                </div>
                <div class="card-body">
                    @if($orderedUsers->count() > 0)
                        <div class="row">
                            @foreach($orderedUsers as $user)
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center p-2 rounded bg-light">
                                        <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 35px; height: 35px;">
                                            <span class="text-white fw-bold small">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                                        </div>
                                        <span>{{ $user->name }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted mb-0">No users to display</p>
                    @endif
                </div>
            </div>

            <!-- Limited Users -->
            <div class="card shadow border-0">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-limit text-danger me-2"></i>First 2 Users (Limited)
                    </h5>
                </div>
                <div class="card-body">
                    @if($limitedUsers->count() > 0)
                        <div class="row">
                            @foreach($limitedUsers as $user)
                                <div class="col-md-6 mb-3">
                                    <div class="card border-danger">
                                        <div class="card-body text-center">
                                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                                                <span class="text-white fw-bold">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                                            </div>
                                            <h6 class="mb-1">{{ $user->name }}</h6>
                                            <small class="text-muted">{{ $user->email }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted mb-0">No users to display</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
.card {
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-2px);
}

.table tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.1);
}

.btn-group .btn {
    transition: all 0.2s ease;
}

.btn-group .btn:hover {
    transform: translateY(-1px);
}

.badge {
    transition: transform 0.2s ease;
}

.badge:hover {
    transform: scale(1.05);
}
</style>
@endsection
