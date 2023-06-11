<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Customer Profile</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group row">
              <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
              <div class="col-sm-10">
              <input type="text" id="firstName" class="form-control" placeholder="<?= $_SESSION['fname'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" id="lastName" class="form-control" placeholder="<?= $_SESSION['lname'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-10">
                <input type="tel" id="phoneNumber" class="form-control" placeholder="<?= "0000000000" ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email Address</label>
              <div class="col-sm-10">
                <input type="email" id="email" class="form-control" placeholder="<?= $_SESSION['useremail'] ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="city" class="col-sm-2 col-form-label" >City</label>
              <div class="col-sm-10">
                <input type="text" id="city" class="form-control" placeholder="<?= $_SESSION['city'] ?>" readonly>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>