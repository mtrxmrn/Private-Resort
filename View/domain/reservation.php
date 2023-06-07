<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Reservation</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" class="form-control" placeholder="Enter your full name" readonly>
              </div>
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" class="form-control" placeholder="Enter your city" readonly>
              </div>
              <div class="form-group">
                <label for="number">Number</label>
                <input type="tel" id="number" class="form-control" placeholder="Enter your phone number" readonly>
              </div>
              <div class="form-group">
                <label for="reservationDate">Reservation Date</label>
                <input type="date" id="reservationDate" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label for="reservationTime">Reservation Time</label>
                <select id="reservationTime" class="form-control">
                  <option value="9:00 AM">9:00 AM</option>
                  <option value="11:00 AM">11:00 AM</option>
                  <option value="1:00 PM">1:00 PM</option>
                  <option value="3:00 PM">3:00 PM</option>
                </select>
              </div>
              <div class="form-group">
                <label for="numPersons">Number of Persons</label>
                <input type="number" id="numPersons" class="form-control" placeholder="Enter the number of persons">
              </div>
              <div class="form-group">
                <label for="notes">Notes</label>
                <textarea id="notes" class="form-control" placeholder="Enter any additional notes" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Make Reservation</button>
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
