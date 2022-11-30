<?php
include_once 'includes/functions.inc.php';
checkLogin(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoams - Log in</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="block block-primary">
        <div class="container form-container">
            <form action="includes/login.inc.php" class="card card-login shadow mx-auto" method="POST">
                <header class="card-header center">
                    <h3 class="card-heading">LOG IN</h3>
                </header>
                <main class="card-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-stretch">
                                <label for="username" class="input-label">Username</label>
                                <input type="text" id="username" name="username" class="input" placeholder="Enter your username..." required>
                                <?php echo (isset($_GET['error']) && $_GET['error'] === 'invalidusername') ? "<p class=' input-label label-danger'> Username does not exist." : '' ?>
                                </div>
                            <div class="input-group input-stretch">
                                <label for="password" class="input-label">Password</label>
                                <input type="password" id="password" name="password" class="input" placeholder="Enter your password..." required>
                                <?php echo (isset($_GET['error']) && $_GET['error'] === 'invalidpass') ? "<p class=' input-label label-danger'> Wrong Password" : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary btn-stretch" id="submit" name="submit" type="submit">Submit</button>
                        </div>
                    </div>
                </main>
                <footer class="card-footer center">
                    <a href="register.php" class="link">Need an account? Sign in</a>
                </footer>
            </form>
        </div>
    </div>
</body>
</html>