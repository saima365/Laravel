@extends("layout.erp.app")

<style>


.main-content {
  margin-left: 200px;
  margin-top: 56px;
}

</style>
@section("content")

<div class="container mt-5 pt-3 ">
    <div class="card shadow border-0 rounded-4 main-content">

        <!-- Header -->
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center rounded-top-4">
            <h5 class="mb-0">
                <i class="bi bi-bank me-2"></i>Account Details List
            </h5>
            <a class="btn btn-light btn-sm" href="{{Url('/account/create')}}">
                <i class="bi bi-plus-circle"></i> Create Account
            </a>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Account Number</th>
                            <th>Customer Name</th>
                            {{-- <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date of Birth</th> --}}
                            <th>Branch</th>
                            <th>Account Type</th>
                            {{-- <th>Balance</th>
                            <th>Currency</th> --}}
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="https://via.placeholder.com/40"
                                     class="rounded-circle border"
                                     width="40" height="40">
                            </td>
                            <td>ACC-10001</td>
                            <td>John Doe</td>
                            {{-- <td>john@example.com</td>
                            <td>017XXXXXXXX</td>
                            <td>Dhaka, Bangladesh</td>
                            <td>1995-06-15</td> --}}
                            <td>Main Branch</td>
                            <td>Savings</td>
                            {{-- <td>50,000</td>
                            <td>BDT</td> --}}
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <img src="https://via.placeholder.com/40"
                                     class="rounded-circle border"
                                     width="40" height="40">
                            </td>
                            <td>ACC-10002</td>
                            <td>Jane Smith</td>
                            {{-- <td>jane@example.com</td>
                            <td>018XXXXXXXX</td>
                            <td>Chittagong</td>
                            <td>1992-03-20</td> --}}
                            <td>Uttara Branch</td>
                            <td>Current</td>
                            {{-- <td>120,000</td>
                            <td>USD</td> --}}
                            <td>
                                <span class="badge bg-warning text-dark">Inactive</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
