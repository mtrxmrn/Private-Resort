<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Reservation</h4>
        </div>
        <div class="card-body">
          <form action="index.php?page=reservation" method="post">
            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" id="fullName" name="fullname" class="form-control" placeholder="Enter your full name" 
              <?php
                if(isset($_SESSION['id'])){
                  echo 'value="' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '"';
                }
              ?>
              >
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
              <?php
                if(isset($_SESSION['id'])){
                  echo 'value="' . $_SESSION['useremail'] . '"';
                }
              ?>
              >
            </div>
            <div class="form-group">
              <label for="phone">Number</label>
              <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" 
              <?php
                if(isset($_SESSION['id'])){
                  echo 'value="' . $_SESSION['phone'] . '"';
                }
              ?>
              >
            </div>
            <div class="form-group">
              <label for="reservationDate">Reservation Date</label>
              <input type="date" id="reservationDate" class="form-control" name="date">
            </div>
            <div class="form-group">
              <label for="reservationTime">Reservation Time</label>
              <select id="reservationTime" class="form-control" name="time">
                <option value="9:00">9:00 AM to 5:00 PM</option>
                <option value="11:00">11:00 AM to 5:00 PM</option>
                <option value="1:00">1:00 PM to 5:00 PM</option>
                <option value="3:00">3:00 PM to 5:00 PM</option>
              </select>
            </div>

            <div class="form-group">
              <label for="numPersons">Number of Persons</label>
              <input type="text" id="numPersons" name="numPersons" class="form-control" placeholder="Enter the number of persons">
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <textarea id="notes" class="form-control" name="notes" placeholder="Enter any additional notes" rows="5"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Make Reservation</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

