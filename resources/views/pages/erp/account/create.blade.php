
@extends("layout.erp.app")

<style>

.main-content {
  margin-left: 250px;
  margin-top: 56px;
}


</style>
@section("content")

<div class="container ">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            <div class="card shadow border-0 rounded-4 main-content ">

                <!-- Header -->
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h5 class="mb-0">
                        <i class="bi bi-bank me-2"></i>Create Bank Account
                    </h5>
                </div>

                <div class="card-body p-4">
                    <form enctype="multipart/form-data">

                        <!-- Photo -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">
                                    <i class="bi bi-image"></i> Account Holder Photo
                                </label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <!-- Account Number & Customer -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Account Number">
                                    <label>
                                        <i class="bi bi-credit-card me-1"></i>Account Number
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select">
                                        <option selected disabled>Select Customer</option>
                                        <option>John Doe</option>
                                        <option>Jane Smith</option>
                                    </select>
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
                                    <input type="email" class="form-control" placeholder="Email">
                                    <label>
                                        <i class="bi bi-envelope me-1"></i>Email
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" placeholder="Phone">
                                    <label>
                                        <i class="bi bi-telephone me-1"></i>Phone
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-floating mt-3">
                            <textarea class="form-control" style="height: 90px" placeholder="Address"></textarea>
                            <label>
                                <i class="bi bi-house-door me-1"></i>Address
                            </label>
                        </div>

                        <!-- DOB & Branch -->
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control">
                                    <label>
                                        <i class="bi bi-calendar-event me-1"></i>Date of Birth
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select">
                                        <option selected disabled>Select Branch</option>
                                        <option>Main Branch</option>
                                        <option>Uttara Branch</option>
                                    </select>
                                    <label>
                                        <i class="bi bi-geo-alt me-1"></i>Branch
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Account Type & Currency -->
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select">
                                        <option selected disabled>Select Account Type</option>
                                        <option>Savings</option>
                                        <option>Current</option>
                                        <option>Fixed Deposit</option>
                                    </select>
                                    <label>
                                        <i class="bi bi-list-ul me-1"></i>Account Type
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select">
                                        <option selected disabled>Select Currency</option>
                                        <option>BDT</option>
                                        <option>USD</option>
                                        <option>EUR</option>
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
                                    <input type="number" class="form-control" placeholder="Balance">
                                    <label>
                                        <i class="bi bi-cash-stack me-1"></i>Opening Balance
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select">
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
