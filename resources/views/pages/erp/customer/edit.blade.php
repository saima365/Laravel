 @extends('layout.erp.app')



 @section('content')
     <div class="container py-5">
         <div class="row justify-content-center">
             <div class="col-xl-7 col-lg-8 col-md-10 col-12">

                 <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                     <!-- Header -->
                     <div class="card-header bg-gradient text-white py-4"
                         style="background: linear-gradient(135deg, #4e73df, #1cc88a);">
                         <div class="d-flex align-items-center justify-content-between">
                             <div>
                                 <h4 class="mb-1 fw-bold">Edit Customer</h4>
                                 <small class="opacity-75">Update customer information</small>
                             </div>
                             <i class="bi bi-person-lines-fill fs-1 opacity-50"></i>
                         </div>
                     </div>

                     <!-- Body -->
                     <div class="card-body p-4 p-md-5 bg-light">
                         <form action="{{ URL('customer/update', $customer->id) }}" method="POST"
                             enctype="multipart/form-data" class="p-4 border rounded">
                             @csrf

                             <!-- Profile -->
                             <div class="text-center mb-4">
                                 <img src="https://via.placeholder.com/120" class="rounded-circle shadow mb-3"
                                     width="120" height="120">
                                 <div>
                                     <label class="btn btn-sm btn-outline-primary">
                                         <i class="bi bi-camera"></i> Change Photo
                                         <input type="file" hidden name="img">
                                     </label>
                                 </div>
                             </div>

                             <!-- Name -->
                             <div class="form-floating mb-3">
                                 <input type="text" class="form-control shadow-sm" id="name" placeholder="Full Name"
                                     value="{{ $customer->name }}" name="name">
                                 <label for="name"><i class="bi bi-person me-2"></i>Full Name</label>
                             </div>

                             <!-- Email -->
                             <div class="form-floating mb-3">
                                 <input type="email" class="form-control shadow-sm" id="email" placeholder="Email"
                                     value="{{ $customer->email }}" name="email">
                                 <label for="email"><i class="bi bi-envelope me-2"></i>Email Address</label>
                             </div>

                             <!-- Phone -->
                             <div class="form-floating mb-3">
                                 <input type="text" class="form-control shadow-sm" id="phone" placeholder="Phone"
                                     value="{{ $customer->phone }}" name="phone">
                                 <label for="phone"><i class="bi bi-telephone me-2"></i>Phone Number</label>
                             </div>

                             <!-- Address -->
                             <div class="form-floating mb-3">
                                 <textarea class="form-control shadow-sm" id="address" placeholder="Address" style="height: 110px" name="address">{{ $customer->address }}"</textarea>
                                 <label for="address"><i class="bi bi-geo-alt me-2"></i>Address</label>
                             </div>

                             <!-- Gender & Status -->
                             <div class="row g-3">
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <select class="form-select shadow-sm" id="gender" name="gender">
                                             <option selected>Male</option>
                                             <option>Female</option>
                                             <option>Other</option>
                                         </select>
                                         <label for="gender"><i class="bi bi-gender-ambiguous me-2"></i>Gender</label>
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <select class="form-select shadow-sm" id="status" name="status">
                                             <option selected>Active</option>
                                             <option>Inactive</option>
                                         </select>
                                         <label for="status"><i class="bi bi-toggle-on me-2"></i>Status</label>
                                     </div>
                                 </div>
                             </div>

                             <!-- Buttons -->
                             <div class="d-flex justify-content-end gap-3 mt-5">
                                 <a href="{{ URL('/customers') }}" class="btn btn-outline-secondary px-4">
                                     <i class="bi bi-arrow-left"></i> Back
                                 </a>
                                 <button type="submit" class="btn btn-primary px-4 shadow">
                                     <i class="bi bi-check-circle"></i> Update
                                 </button>
                             </div>

                         </form>
                     </div>

                 </div>

             </div>
         </div>
     </div>
 @endsection
