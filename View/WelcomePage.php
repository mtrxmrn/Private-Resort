<h1>Welcome! <?= $_SESSION['fname']; ?></h1>
    <script>
        setTimeout(function() {
            window.location.href = "index.php?page=home";
        }, 3000); // Redirect to homepage.php after 3 seconds
    </script>