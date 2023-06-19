<div class="container p-10 ">
  <div class="row justify-content-center ">
    <div class="col-md-6 ">
      <div class="card">
          <h4 class="text-center h1 mt-4">Create an Account</h4>
        
        <div class="card-body ">
          
          <form action="index.php?page=register" method="POST">
            <div class="form-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
              <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter your First Name" required>
            </div>
            <div class="form-group">
            
              <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter your Last Name" required>
            </div>
            <div class="form-group">
        
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
              
              <input type="email" id="confirmEmail" name="confirmEmail" class="form-control" placeholder="Confirm your email address" required>
            </div>
            <div class="form-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm your password" required>
            </div>

            <div class="form-group">
            <label for="+63">+63</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Confirm your phone number" maxlength="10" required>
            </div>

            <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other" selected>Other</option>
            </select>
            </div>


            <div class="form-group">
            <label for="birthday" >Birthday</label>
            <input type="date" id="dob" name="dob" required>
            </div>

              <div class="form-check d-flex justify-content-center mt-4 mb-5">
                <input class="mr-2" type="checkbox" value="" id="Term" />
                <label class="form-check-label" for="Term">
                  I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                </label>
              </div>
            </div>

            <div class="form-group text-center">
            <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-black">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


