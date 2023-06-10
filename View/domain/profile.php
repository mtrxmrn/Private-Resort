<?php
  echo $username;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Profile</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
                  <input type="text" id="firstName" class="form-control" placeholder="Enter your first name" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" id="lastName" class="form-control" placeholder="Enter your last name" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="tel" id="phoneNumber" class="form-control" placeholder="Enter your phone number" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                  <input type="email" id="email" class="form-control" placeholder="Enter your email address" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label" >City</label>
                <div class="col-sm-10">
                  <input type="text" id="city" class="form-control" placeholder="Enter your city" readonly>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Save Profile</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
