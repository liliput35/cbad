<?php 
    session_start(); 

    // 🔹 Handle logout first
    if (isset($_POST['logout'])) {
        session_unset();   // clears all session variables
        session_destroy(); // destroys the session
        header("Location: " . $_SERVER['PHP_SELF']); // reload the page
        exit;
    }

    // 🔹 Hardcoded credentials
    $Student = [
        "username" => "admin", 
        "password" => "admin123"
    ]; 

    // 🔹 Handle login only if username & password are posted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) { 
        $UsernameInput = htmlspecialchars($_POST['username']); 
        $PasswordInput = htmlspecialchars($_POST['password']); 

        if ($UsernameInput == $Student['username'] && $PasswordInput == $Student['password']) {
            $_SESSION['username'] = $Student['username'];
        } else {
            $_SESSION['error'] = "Invalid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            $Title = "Log in Page"; 
            echo("<title>$Title</title>"); 
        ?>

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body { 
                overflow-x: hidden;
            }
            .hero { 
                background: linear-gradient(-45deg, #c28d5bff, #6f2fc2ff);
                color: white;
                height: 100vh;
                padding: 10em;
            }

            h3 { 
                color: #6f2fc2ff;
            }

            input { 
                width: 100%;
                background-color: #e3d8f1ff;
                border-radius: 20px;
                border: none; 
            }

            button { 
                padding: 5px 10px;
                width: 150px;
                border: none; 
                border-radius: 25px; 
                color: white; 
                background: linear-gradient(to right, #c25bb9ff, #6f2fc2ff);
            }
        </style>
    </head>
    <body>
        <div class="content-container">
            <div class="row">
                <!-- Hero section with dynamic header -->
                <div class="col-md-7 hero">
                    <h1 id="header-el">
                        <?php 
                            if (isset($_SESSION['username'])) {
                                echo "Welcome, " . $_SESSION['username'] . "!";
                            } else {
                                echo "Welcome to website";
                            }
                        ?>
                    </h1>
                    <p id="parag-el">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultrices elit a neque pellentesque, id auctor mi aliquam. Donec vel arcu sapien. Aenean risus est, rutrum a aliquet sed, vestibulum vitae felis. Curabitur quis vulputate leo. In enim metus, rutrum vel sapien pulvinar
                    </p>
                </div>

                <!-- Right column: login OR logout -->
                <div class="col-md-5 login d-flex flex-column justify-content-center align-items-center ">
                    <?php if (!isset($_SESSION['username'])): ?>
                        <!-- Login form -->
                        <form action="" method="post">
                            <div class="login-cont w-50">
                                <h3 class="text-center">USER LOGIN</h3>

                                <input type="text" name="username" placeholder="username" class="mb-3 px-2 py-2 animate__animated" id="user-input" required>
                                <br>
                                <input type="password" name="password" placeholder="password" class="mb-3 px-2 py-2 animate__animated" id="pass-input" required> 
                                <br>
                            </div>
                            <button class="text-center" type="submit">LOGIN</button>
                        </form>

                        <!-- Show error if login failed -->
                        <?php 
                            if (isset($_SESSION['error'])) {
                                echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
                                unset($_SESSION['error']); // clear after showing
                            }
                        ?>
                    <?php else: ?>
                        <!-- Logout button -->
                        <form method="post" action="">
                            <button type="submit" name="logout">Logout</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>
