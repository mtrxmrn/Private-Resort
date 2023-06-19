<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Customer Profile</h4>
        </div>
        <div class="card-body">
          <form action="index.php?page=edit" method="post">
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
              <input type="text" id="username" class="form-control" value="<?= $_SESSION['username'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
              <div class="col-sm-10">
              <input type="text" id="firstName" class="form-control" value="<?= $_SESSION['fname'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" id="lastName" class="form-control" value="<?= $_SESSION['lname'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-10">
                <input type="tel" id="phoneNumber" class="form-control" value="<?= $_SESSION['phone'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email Address</label>
              <div class="col-sm-10">
                <input type="email" id="email" class="form-control" value="<?= $_SESSION['useremail'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="gender" class="col-sm-2 col-form-label" >Gender</label>
              <div class="col-sm-10">
                <input type="text" id="gender" class="form-control" value="<?= $_SESSION['gender'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="dob" class="col-sm-2 col-form-label" >Date of Birth</label>
              <div class="col-sm-10">
                <input type="text" id="dob" class="form-control" value="<?= $_SESSION['dob'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="city" class="col-sm-2 col-form-label" >Booking status</label>
              <div class="col-sm-10">
                <input type="text" id="city" class="form-control" name="status"value="<?= 'No bookings!'; ?>" readonly>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Edit Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>