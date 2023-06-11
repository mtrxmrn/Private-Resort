<div class="container p-10 ">
  <div class="row justify-content-center ">
    <div class="col-md-6 ">
      <div class="card">
          <h4 class="text-center h1 mt-4">Create an Account</h4>
        
        <div class="card-body ">
          
          <form action="index.php?page=register" method="POST">
            <div class="form-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
            
              <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
        
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address">
            </div>
            <div class="form-group">
              
              <input type="email" id="confirmEmail" name="confirmEmail" class="form-control" placeholder="Confirm your email address">
            </div>
            <div class="form-group">
              
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group">
        
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm your password">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <select id="city" name="city" class="form-control">
                <option value="" selected disabled>Select your city</option>
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
                <option value="city3">City 3</option>
                <!-- Add more options as needed -->
              </select>
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


