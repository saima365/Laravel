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
                            <th>Address</th>
                            {{-- <th>Branch</th> --}}
                            <th>Account Type</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $accounts as $account )
                          <tr>
                            <td>{{$account->id}}</td>
                            <td>
                                <img src="{{ asset('storage/img/customer/' . $account->customer?->img) }}"
                                     class="rounded-circle border"
                                     width="40" height="40">
                            </td>
                            <td>{{$account->account_number}}</td>
                            <td>{{$account->customer?->name}}</td>
                            <td>{{$account->address}}</td>
                            {{-- <td>{{$branch->name}}</td> --}}
                            <td>{{$account->account_type}}</td>
                            <td>
                                <span class="badge bg-success">{{$account->status}}</span>
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

                        @endforeach



                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
