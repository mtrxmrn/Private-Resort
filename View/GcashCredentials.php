<form action="index.php?page=gcash" method="post" enctype="multipart/form-data">

  <table class="table">
    <tbody>
      <tr>
        <th colspan="2">Receiver details:</th>
      </tr>
      <tr>
        <td>Name:</td>
        <td>NIKKO N.</td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td>09505464948</td>
      </tr>
      <tr>
        <th colspan="2">Sender details:</th>
      </tr>
      <tr>
        <td>Screenshot of your payment:</td>
        <td>
          <input type="file" name="paymentScreenshot" accept="image/*">
        </td>
      </tr>
      <tr>
        <td>Amount:</td>
        <td>
          <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
        </td>
      </tr>
      <tr>
        <td>Gcash Name:</td>
        <td>
          <input type="text" class="form-control" name="gcashName" placeholder="Enter Gcash Name">
        </td>
      </tr>
      <tr>
        <td>Gcash number:</td>
        <td>
          <input type="text" class="form-control" name="gcashNumber" placeholder="Enter Gcash Number">
        </td>
      </tr>
      <tr>
        <td>Reference number:</td>
        <td>
          <input type="text" class="form-control" name="referenceNumber" placeholder="Enter Reference Number">
        </td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>
          <input type="email" class="form-control" name="email" placeholder="Enter Email">
        </td>
      </tr>
      <tr>
        <td>Note:</td>
        <td>
          <textarea class="form-control" name="note" placeholder="Enter Note"></textarea>
        </td>
      </tr>
    </tbody>
  </table>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
