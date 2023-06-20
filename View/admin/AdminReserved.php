<div class="container mt-5">
    <h2>Table Contents</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Full Name</th>
                <th>Reserve Date</th>
                <th>Gcash Name</th>
                <th>Gcash Number</th>
                <th>Amount</th>
                <th>Pending</th>
                <!-- Add more table headers/columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['reservedate']; ?></td>
                    <td><?php echo $row['gcashName']; ?></td>
                    <td><?php echo $row['gcashNumber']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['pending']; ?></td>
                    <td>

                    </td>
                    <!-- Add more table cells/columns as needed -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
