@extends("layout.erp.app")

@section("content")


<main class="adminuiux-content has-sidebar" onclick="contentClick()">


  <!-- body content of pages -->

  <!-- breadcrumb -->
  <div class="container-fluid mt-4">
    <div class="row gx-3 align-items-center">
      <div class="col-12 col-sm">
        <nav aria-label="breadcrumb" class="mb-2">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item bi"><a href="investment-dashboard.html">Home</a></li>
            <li class="breadcrumb-item active bi" aria-current="page">Clients</li>
          </ol>
        </nav>
        <h5>Account Holders</h5>
      </div>
      <div class="col-auto py-1">
        <button class="btn btn-sm btn-outline-theme" data-bs-toggle="modal" data-bs-target="#createuser"><i class="bi bi-plus me-1"></i>
          Create </button>
        <!-- add user  -->
            @include('pages.erp.customer.create')
      </div>
      <div class="col-auto py-1 ms-auto ms-sm-0">
        <button class="btn btn-link btn-square btn-icon" data-bs-toggle="collapse" data-bs-target="#filterschedule" aria-expanded="false" aria-controls="filterschedule">
          <i data-feather="filter"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- content -->
  <div class="container" id="main-content">
    <!-- filter area -->
    <div class="collapse" id="filterschedule">
      <div class="card adminuiux-card mt-4">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" placeholder="Search..." id="dt-search-0">
                <label>Search...</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="form-floating">
                <select class="form-select">
                  <option selected>All</option>
                  <option value="1">Doctor</option>
                  <option value="2">Staff</option>
                </select>
                <label>User Role</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="form-floating">
                <select class="form-select">
                  <option selected>All</option>
                  <option value="1">Available</option>
                  <option value="1">Available in 1hr</option>
                  <option value="1">Available in 2hr</option>
                  <option value="2">On Leave</option>
                </select>
                <label>Availability</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- appointment grid view list datatable-->
    <div class="card adminuiux-card mt-4 mb-0">
      <div class="card-body">

        <table class="table table-bordered table-hover align-middle " id="dataTable">
          <thead class="table-dark text-center">
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
            @foreach($customers as $customer)
            <tr>
              <td>{{$customer->id}}</td>
              <td>{{$customer->name}}</td>
              <td>{{$customer->email}}</td>
              <td>{{$customer->phone}}</td>
              <td>{{$customer->address}}</td>


              <td><a href="{{URL("customer/show")}}" class="btn btn-square btn-link" data-bs-toggle="modal" data-bs-target="#accountDetailsModal" title="View">
                  <i class="bi bi-eye"></i>
                </a>
                @include('pages.erp.customer.show')
                <div class="dropdown d-inline-block">
                  <a class="btn btn-link no-caret" data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{URL("customer/edit", $customer->id)}}">Edit</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>

                    <form action="{{ url('customer/delete', $customer->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
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

</main>

@endsection


{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
