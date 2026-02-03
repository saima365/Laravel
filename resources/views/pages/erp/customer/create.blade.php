
@extends('layout.erp.app')
<style>
    .main-content {
        margin-left: 250px;
        margin-top: 10px;
    }
</style>
@section('content')


<div class="container ">
<form action="{{ url('customer/save') }}" method="POST" enctype="multipart/form-data" class="main-content">
    @csrf

        <h4 class="mb-4">Customer Information</h4>

        <div class="row g-3 ">

            <!-- Profile Image -->
            <div class="col-12 col-md-6">
                <label class="form-label">Profile Image</label>
                <input type="file" name="img" class="form-control">
            </div>

            <!-- Full Name -->
            <div class="col-12 col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
            </div>

            <!-- Email -->
            <div class="col-12 col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
            </div>

            <!-- Date of Birth -->
            <div class="col-12 col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
            </div>

            <!-- Gender -->
            <div class="col-12 col-md-6">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <!-- Phone -->
            <div class="col-12 col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="">
            </div>

            <!-- Address -->
            <div class="col-12">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" rows="3"
                    placeholder="Enter address"></textarea>
            </div>

            <!-- Status -->
            <div class="col-12 col-md-6">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="Idle">Idle</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="col-12 d-flex flex-column flex-sm-row gap-2 mt-3">
                <button type="submit" class="btn btn-success">
                    Create Customer
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    Cancel
                </a>
            </div>

        </div>
    </div>
</form>

@endsection
