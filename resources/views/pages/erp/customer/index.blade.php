@extends('layout.erp.app')
<style>
    .main-content {
        margin-left: 200px;
        margin-top: 56px;
    }
</style>

@section('content')
    <div class="container mt-5 pt-3 " style="min-height: 788px;">
        <div class="card shadow border-0 rounded-4 main-content">

            <!-- Header -->
            <div class="card-header  d-flex justify-content-between align-items-center rounded-top-4">
                <h5 class="mb-0">
                    <i class="bi bi-bank me-2"></i>Clients Details List
                </h5>
                <a class="btn btn-Primary btn-sm" href="{{ Url('/customer/create') }}">
                    <i class="bi bi-plus-circle"></i> Create Client
                </a>
            </div>
            <input type="text" class="form-control w-25" id="search" placeholder="Search here..." >
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>


                                    <td><a href="{{ URL('customer/show') }}" class="btn btn-square btn-link"
                                            data-bs-toggle="modal" data-bs-target="#accountDetailsModal" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        @include('pages.erp.customer.show')
                                        <div class="dropdown d-inline-block">
                                            <a class="btn btn-link no-caret" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item"
                                                        href="{{ URL('customer/edit', $customer->id) }}">Edit</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                </li>

                                                <form action="{{ url('customer/delete', $customer->id) }}" method="post"
                                                    onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="dropdown-item theme-red">
                                                        Delete
                                                    </button>
                                                </form>

                                            </ul>




                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection


        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
