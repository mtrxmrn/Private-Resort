<?php
    session_start();
    include 'linkmeta/linkmeta.php';   
    include 'View/Navigation.php';?>
<body>
<?php
    // Front Controller

    // Include the necessary files
    require_once 'controllers/HomeController.php';
    require_once 'controllers/ContactUsController.php';
    require_once 'controllers/LoginController.php';
    require_once 'controllers/RegisterController.php';
    require_once 'controllers/LogoutController.php';
    
    // Render the navbar
    
    echo isset($_SESSION['useremail'])
    ? "Hi, your name is ".$_SESSION['useremail']
    : "Hi, you are not logged in";

if (isset($_SESSION['password'])) {
    echo ", your last name is ".$_SESSION['password'];
}
    // Get the requested page from the URL
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Initialize the appropriate controller based on the requested page
    switch ($page) {
        case 'home':
            $controller = new HomeController();
            break;
        case 'contact':
            $controller = new ContactUsController();
            break;
        case 'login':
            $controller = new LoginController();
            break;
        case 'register':
            $controller = new RegisterController();
            break;
        case 'logout':
            $controller = new LogoutController();
            break;
        default:
            $controller = new HomeController();
            break;
    }
    
    // Process the request
    $controller->controller();
    include 'View/Footer.php';
?>

<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include 'linkmeta/scripts.php'; ?>
</body>
</html>

<?php
   
?>