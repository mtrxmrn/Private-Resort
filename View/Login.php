<div class="p-5 container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Login</h4>
        </div>
        <div class="card-body">
          <form action="index.php?page=login" method="post">
            <div class="form-group">
              <label for="username">Username/Email Address</label>
              <input type="text" id="username" class="form-control" name="useremail" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>