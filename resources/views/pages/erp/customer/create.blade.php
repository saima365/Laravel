<form action="{{URL("customer/save")}}" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
    @csrf
 <div class="modal adminuiux-modal fade" id="createuser" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header">
                 <nav>
                     <div class="nav nav-pills" id="nav-tab-user-1" role="tablist">
                         <button class="nav-link active" id="nav-basic-tab-user-1" data-bs-toggle="tab"
                             data-bs-target="#nav-basic-user-1" type="button" role="tab"
                             aria-controls="nav-basic-user-1" aria-selected="true">Basic Info</button>
                     </div>
                 </nav>
                 <button type="button" class="btn btn-link btn-square ms-auto" data-bs-dismiss="modal"
                     aria-label="Close"><i class="bi bi-x-lg"></i></button>
             </div>
             <div class="modal-body pt-0">
                 <div class="card adminuiux-card overflow-hidden mb-4 pt-5">
                     <figure class="coverimg start-0 top-0 w-100 h-100 z-index-0 position-absolute overlay-gradiant"
                         style="background-image: url(_assets/img/modern-ai-image/flamingo-3.html);">
                         <div class="position-absolute top-0 end-0 m-2">
                             <button class="btn btn-theme" onclick="$(this).next().click()">
                                 <i class="bi bi-camera"></i> Change Cover
                             </button>
                             <input type="file" class="d-none" name="img">
                         </div>
                         <img src="assets/img/modern-ai-image/flamingo-3.jpg" class="mw-100" alt=""
                             style="display: none;">
                     </figure>

                     <div class="card-body text-center text-white z-index-1">
                         <div class="d-inline-block position-relative w-auto mx-auto my-3">
                             <figure class="avatar avatar-150 coverimg rounded-circle"
                                 style="background-image: url(_assets/img/modern-ai-image/user-6.html);">
                                 <img src="assets/img/modern-ai-image/user-6.jpg" alt="" style="display: none;">
                             </figure>
                             <div class="position-absolute bottom-0 end-0 z-index-1 h-auto">
                                 <button class="btn btn-lg btn-theme btn-square" onclick="$(this).next().click()">
                                     <i class="bi bi-camera"></i>
                                 </button>
                                 <input type="file" class="d-none" name="img">
                             </div>
                         </div>
                         <h4>AdminUIUX</h4>
                         <p class="opacity-75 mb-3">guest@adminuiux.com</p>
                     </div>
                 </div>

                 <div class="tab-content" id="nav-tab-user-content-1">
                     <div class="tab-pane show active fade" id="nav-basic-user-1" role="tabpanel"
                         aria-labelledby="nav-basic-tab-user-1" tabindex="0">

                         <h6 class="mb-3">Basic Details</h6>
                         <div class="row mb-2">
                             <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating mb-3">
                                     <input type="text" placeholder="First Name" value="" required=""
                                         class="form-control is-valid" name="name">
                                     <label>Full Name</label>
                                 </div>
                                 <div class="invalid-feedback">Please enter valid input</div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating">
                                     <input type="email" placeholder="Email Address" value=""
                                          required="" class="form-control" name="email">
                                     <label>Email Address</label>
                                 </div>
                                 <div class="invalid-feedback mb-3">Add .com at last to insert valid data </div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating mb-3">
                                     <input type="date" placeholder="Birth Date" value=""
                                         required="" class="form-control datepicker" name="date_of_birth">
                                     <label>Birth date</label>
                                 </div>
                                 <div class="invalid-feedback">Please enter valid input</div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating mb-3">
                                     <select class="form-select" name="gender">
                                         <option>Male</option>
                                         <option>Female</option>
                                         <option>Others</option>
                                     </select>
                                     <label>Gender</label>
                                 </div>
                                 <div class="invalid-feedback">Please enter valid input</div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating mb-3">
                                     <input type="text" placeholder="Weight" value="" class="form-control" name="phone">
                                     <label>Phone</label>
                                 </div>
                                 <div class="invalid-feedback mb-3">Add .com at last to insert valid data </div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating mb-3">
                                     <input type="text" placeholder="Weight" value="" class="form-control" name="address">
                                     <label>Address</label>
                                 </div>
                                 <div class="invalid-feedback mb-3">Add .com at last to insert valid data </div>
                             </div>
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-floating mb-3">
                                     <select class="form-select" name="status">
                                         <option>Active</option>
                                         <option>Inactive</option>
                                         <option>Idle</option>

                                     </select>
                                     <label>Status</label>
                                 </div>
                                 <div class="invalid-feedback">Please enter valid input</div>
                             </div>
                         </div>


                     </div>

                     <div class="tab-pane fade" id="nav-timing-user-2" role="tabpanel"
                         aria-labelledby="nav-timing-tab-user-2" tabindex="0">
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
                                 <button class="btn btn-link mb-3" disabled><i class="bi bi-plus"></i> Add
                                     Shift</button>
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
                 <div class="col"><button type="submit" class="btn btn-success">Create</button></div>
                 <div class="col-auto"><button type="button" class="btn btn-link"
                         data-bs-dismiss="modal">Cancel</button></div>
             </div>
         </div>
     </div>
 </div>
</form>
