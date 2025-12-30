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
            <li class="breadcrumb-item active bi" aria-current="page">Users</li>
          </ol>
        </nav>
        <h5>Users</h5>
      </div>
      <div class="col-auto py-1">
        <button class="btn btn-sm btn-outline-theme" data-bs-toggle="modal" data-bs-target="#createuser"><i class="bi bi-plus me-1"></i>
          Create </button>
        <!-- add user  -->
        <div class="modal adminuiux-modal fade" id="createuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <nav>
                  <div class="nav nav-pills" id="nav-tab-user-1" role="tablist">
                    <button class="nav-link active" id="nav-basic-tab-user-1" data-bs-toggle="tab" data-bs-target="#nav-basic-user-1" type="button" role="tab" aria-controls="nav-basic-user-1" aria-selected="true">Basic Info</button>
                    <button class="nav-link" id="nav-prof-tab-user-2" data-bs-toggle="tab" data-bs-target="#nav-prof-user-2" type="button" role="tab" aria-controls="nav-prof-user-2" aria-selected="false">Professional</button>
                    <button class="nav-link" id="nav-timing-tab-user-2" data-bs-toggle="tab" data-bs-target="#nav-timing-user-2" type="button" role="tab" aria-controls="nav-timing-user-2" aria-selected="false">Availability</button>
                  </div>
                </nav>
                <button type="button" class="btn btn-link btn-square ms-auto" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
              </div>
              <div class="modal-body pt-0">
                <div class="card adminuiux-card overflow-hidden mb-4 pt-5">
                  <figure class="coverimg start-0 top-0 w-100 h-100 z-index-0 position-absolute overlay-gradiant" style="background-image: url(_assets/img/modern-ai-image/flamingo-3.html);">
                    <div class="position-absolute top-0 end-0 m-2">
                      <button class="btn btn-theme" onclick="$(this).next().click()">
                        <i class="bi bi-camera"></i> Change Cover
                      </button>
                      <input type="file" class="d-none">
                    </div>
                    <img src="assets/img/modern-ai-image/flamingo-3.jpg" class="mw-100" alt="" style="display: none;">
                  </figure>

                  <div class="card-body text-center text-white z-index-1">
                    <div class="d-inline-block position-relative w-auto mx-auto my-3">
                      <figure class="avatar avatar-150 coverimg rounded-circle" style="background-image: url(_assets/img/modern-ai-image/user-6.html);">
                        <img src="assets/img/modern-ai-image/user-6.jpg" alt="" style="display: none;">
                      </figure>
                      <div class="position-absolute bottom-0 end-0 z-index-1 h-auto">
                        <button class="btn btn-lg btn-theme btn-square" onclick="$(this).next().click()">
                          <i class="bi bi-camera"></i>
                        </button>
                        <input type="file" class="d-none">
                      </div>
                    </div>
                    <h4>AdminUIUX</h4>
                    <p class="opacity-75 mb-3">guest@adminuiux.com</p>
                  </div>
                </div>

                <div class="tab-content" id="nav-tab-user-content-1">
                  <div class="tab-pane show active fade" id="nav-basic-user-1" role="tabpanel" aria-labelledby="nav-basic-tab-user-1" tabindex="0">

                    <h6 class="mb-3">Basic Details</h6>
                    <div class="row mb-2">
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="First Name" value="adminuiux" required="" class="form-control is-valid">
                          <label>First Name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Last Name" value="" required="" class="form-control">
                          <label>Last Name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating">
                          <input type="email" placeholder="Email Address" value="guest@adminuiux.com" disabled="" required="" class="form-control">
                          <label>Email Address</label>
                        </div>
                        <div class="invalid-feedback mb-3">Add .com at last to insert valid data </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Birth Date" value="26-04-1982" required="" class="form-control datepicker">
                          <label>Birth date</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <select class="form-select">
                            <option>A</option>
                            <option>A+</option>
                            <option>B</option>
                            <option selected>B+</option>
                            <option>B-</option>
                            <option>O</option>
                            <option>O-</option>
                          </select>
                          <label>Blood group</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Weight" value="52" class="form-control">
                          <label>Weight (kg)</label>
                        </div>
                        <div class="invalid-feedback mb-3">Add .com at last to insert valid data </div>
                      </div>
                    </div>
                    <h6 class="mb-3">Address Details</h6>
                    <div class="row mb-2">
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Address Line 1" value="" required="" class="form-control">
                          <label>Address Line 1</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="email" placeholder="Address Line 2" required="" class="form-control">
                          <label>Address Line 2</label>
                        </div>
                        <div class="invalid-feedback mb-3">Add insert valid data </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Landmark" required="" class="form-control">
                          <label>Landmark</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="email" placeholder="Street" required="" class="form-control">
                          <label>Street</label>
                        </div>
                        <div class="invalid-feedback mb-3">Add insert valid data </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Country" value="" required="" class="form-control">
                          <label>Country</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Pincode" value="" required="" class="form-control">
                          <label>Pincode</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="State" value="" required="" class="form-control">
                          <label>State</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="City" value="" required="" class="form-control  is-invalid">
                          <label>City</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-prof-user-2" role="tabpanel" aria-labelledby="nav-prof-tab-user-2" tabindex="0">
                    <h6 class="mb-3">Professional bio</h6>
                    <div class="mb-4">
                      <textarea class="FroalaEditor"></textarea>
                    </div>

                    <h6 class="mb-3">Academic qualification</h6>
                    <div class="row  mb-2">
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Degree" value="M.B.B.S" class="form-control">
                          <label>Degree</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="College/University" value="" class="form-control">
                          <label>College/University</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-link mt-2">
                          <i class="bi bi-plus"></i> Add
                        </button>
                      </div>
                    </div>

                    <h6 class="mb-3">Specialized treatment</h6>
                    <div class="row  mb-2">
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Treatment name" value="Skin whitening" class="form-control">
                          <label>Treatment name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Treatment name" value="Skin problem" class="form-control">
                          <label>Treatment name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Treatment name" value="Skin decease" class="form-control">
                          <label>Treatment name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Treatment name" value="Lesser treatment" class="form-control">
                          <label>Treatment name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="form-floating mb-3">
                          <input type="text" placeholder="Treatment name" value="Hair problem" class="form-control">
                          <label>Treatment name</label>
                        </div>
                        <div class="invalid-feedback">Please enter valid input</div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-link mt-2">
                          <i class="bi bi-plus"></i> Add
                        </button>
                      </div>
                    </div>

                    <h6 class="mb-3">Public Visibility</h6>
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="profileswitch1" checked="">
                          <label class="form-check-label" for="profileswitch1">Show profile publicly</label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="profileswitch2" checked="">
                          <label class="form-check-label" for="profileswitch2">Show availability</label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="profileswitch3">
                          <label class="form-check-label" for="profileswitch3">Show tagline in profile</label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="profileswitch4">
                          <label class="form-check-label" for="profileswitch4">Make profile inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-timing-user-2" role="tabpanel" aria-labelledby="nav-timing-tab-user-2" tabindex="0">
                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="mb-3">Monday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="monday">
                          <label class="form-check-label" for="monday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="20:00" class="form-control">
                          <label>End Time</label>
                        </div>
                      </div>
                      <div class="col-auto pt-2">
                        <button class="btn btn-link mb-3"><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="h6  mb-3">Tuesday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="tuesday">
                          <label class="form-check-label" for="tuesday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="20:00" class="form-control">
                          <label>End Time</label>
                        </div>
                      </div>
                      <div class="col-auto pt-2">
                        <button class="btn btn-link mb-3"><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="mb-3">Wednesday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="wednesday">
                          <label class="form-check-label" for="wednesday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="20:00" class="form-control">
                          <label>End Time</label>
                        </div>
                      </div>
                      <div class="col-auto pt-2">
                        <button class="btn btn-link mb-3"><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="mb-3">Thursday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="thursday">
                          <label class="form-check-label" for="thursday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="20:00" class="form-control">
                          <label>End Time</label>
                        </div>
                      </div>
                      <div class="col-auto pt-2">
                        <button class="btn btn-link mb-3"><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="mb-3">Friday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="friday">
                          <label class="form-check-label" for="friday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="20:00" class="form-control">
                          <label>End Time</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto pt-2">
                        <button class="btn btn-link mb-3"><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="mb-3">Saturday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="saturday" checked>
                          <label class="form-check-label" for="saturday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating opacity-50 mb-3">
                          <input type="time" value="09:00" class="form-control" disabled>
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating opacity-50 mb-3">
                          <input type="time" value="20:00" class="form-control" disabled>
                          <label>End Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-link mb-3" disabled><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-6 col-md-3 col-xl-2 pt-3">
                        <h6 class="mb-3">Sunday</h6>
                      </div>
                      <div class="col-auto pt-3">
                        <div class="form-check form-switch mb-3">
                          <input class="form-check-input" type="checkbox" id="sunday">
                          <label class="form-check-label" for="sunday">Full Day</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="09:00" class="form-control">
                          <label>Start Time</label>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="form-floating mb-3">
                          <input type="time" value="20:00" class="form-control">
                          <label>End Time</label>
                        </div>
                      </div>
                      <div class="col-auto pt-2">
                        <button class="btn btn-link mb-3"><i class="bi bi-plus"></i> Add Shift</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="col"><button type="button" class="btn btn-theme">Create User</button></div>
                <div class="col-auto"><button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button></div>
              </div>
            </div>
          </div>
        </div>
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


              <td><a href="investment-myprofile.html" class="btn btn-square btn-link" data-bs-toggle="tooltip" title="View">
                  <i class="bi bi-eye"></i>
                </a>
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
