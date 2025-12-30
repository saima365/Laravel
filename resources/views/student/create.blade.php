 

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-header bg-dark text-white">
          Create Student
        </div>
        <div class="card-body">
          <form method="POST" action="">
            
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>

            <div class="mb-3">
              <label class="form-label">Phone</label>
              <input type="text" class="form-control" name="phone" placeholder="Enter phone">
            </div>

            <div class="mb-3">
              <label class="form-label">Address</label>
              <textarea class="form-control" name="address" rows="3" placeholder="Enter address"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              Save Student
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
