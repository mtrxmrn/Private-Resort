<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Contact Us</h4>
        </div>
        <div class="card-body">
          <form action="index.php?page=contact" method="post">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
              <label for="lastName">Name</label>
              <input type="text" id="Name" class="form-control" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label for="text">Subject</label>
              <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter your Subject">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" class="form-control" placeholder="Enter your message" name="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>