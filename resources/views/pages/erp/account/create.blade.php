@extends('layout.erp.app')

<style>
    .main-content {
        margin-left: 250px;
        margin-top: 56px;
    }
</style>
@section('content')

    <div class="container-fluid ">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="card shadow border-0 rounded-4 main-content ">

                    <!-- Header -->
                    <div class="card-header text-white rounded-top-4">
                        <h5 class="mb-0">
                            <i class="bi bi-bank me-2"></i>Create Bank Account
                        </h5>
                    </div>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body p-4">
                        <form action="{{ Url('account/save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Photo -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="bi bi-image"></i> Account Holder Photo
                                    </label>
                                    <input type="file" class="form-control" name="img">
                                    @error('img')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Account Number & Customer -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('account_number') }}" type="text" class="form-control"
                                            placeholder="Account Number" name="account_number">
                                        @error('account_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <label>
                                            <i class="bi bi-credit-card me-1"></i>Account Number
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('name') }}" type="text" class="form-control"
                                            placeholder="Account Number" name="name">
                                        <label>
                                            <i class="bi bi-person me-1"></i>Customer Name
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <!-- Email & Phone -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('email') }}" type="email" class="form-control"
                                            placeholder="Email" name="email">
                                        <label>
                                            <i class="bi bi-envelope me-1"></i>Email
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" placeholder="Phone" name="phone">
                                        <label>
                                            <i class="bi bi-telephone me-1"></i>Phone
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('national_id') }}" type="text" class="form-control"
                                            placeholder="Phone" name="national_id">
                                        <label>
                                            <i class="bi bi-person-badge me-1"></i> NID
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select value="{{ old('gender') }}" class="form-select" name="gender">
                                            <option selected disabled>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                        <label>
                                            <i class="bi bi-gender-ambiguous me-1"></i> Gender
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="form-floating mt-3">
                                <textarea class="form-control" style="height: 90px" placeholder="Address" name="address">{{ old('account_number') }}</textarea>
                                <label>
                                    <i class="bi bi-house-door me-1"></i>Address
                                </label>
                            </div>

                            <!-- DOB & Branch -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('date_of_birth') }}" type="date" class="form-control"
                                            name="date_of_birth">
                                        <label>
                                            <i class="bi bi-calendar-event me-1"></i>Date of Birth
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="branch_id" required>
                                            <option value="" disabled {{ old('branch_id') ? '' : 'selected' }}>
                                                Select Branch
                                            </option>

                                            @foreach ($branches as $branch)
                                                <option value="{{ $branch->id }}"
                                                    {{ old('branch_id') == $branch->id ? 'selected' : '' }}>
                                                    {{ $branch->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <label>
                                            <i class="bi bi-geo-alt me-1"></i> Branch
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- Account Type & Currency -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select value="{{ old('account_type') }}" class="form-select" name="account_type">
                                            <option selected disabled>Select Account Type</option>
                                            <option value="Savings">Savings</option>
                                            <option value="Current">Current</option>
                                            <option value="Fixed Deposit">Fixed Deposit</option>
                                        </select>
                                        <label>
                                            <i class="bi bi-list-ul me-1"></i>Account Type
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select value="{{ old('currency') }}" class="form-select" name="currency">
                                            <option selected disabled>Select Currency</option>
                                            <option value="BDT">BDT</option>
                                            <option value="USD">USD</option>
                                            <option value="EUR">EUR</option>
                                        </select>
                                        <label>
                                            <i class="bi bi-currency-exchange me-1"></i>Currency
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Balance & Status -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('balance') }}" type="text" class="form-control"
                                            placeholder="Balance" name="balance">
                                        <label>
                                            <i class="bi bi-cash-stack me-1"></i>Opening Balance
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select value="{{ old('status') }}" class="form-select" name="status">
                                            <option selected disabled>Select Status</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="blocked">Blocked</option>
                                        </select>
                                        <label>
                                            <i class="bi bi-toggle-on me-1"></i>Status
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">

                                        <select value="{{ old('role_id') }}" class="form-select" name="role_id">
                                            <option selected disabled>Select Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Client">Client</option>

                                        </select>
                                        <label>
                                            <i class="bi bi-person-badge me-1"></i> Roles
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="text-end mt-4">
                                <button type="reset" class="btn btn-outline-secondary px-4">
                                    <i class="bi bi-x-circle"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-primary px-4 ms-2">
                                    <i class="bi bi-save"></i> Create Account
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
