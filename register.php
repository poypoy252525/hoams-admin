
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
            <form style="width: 960px" action="includes/login.inc.php" class="card shadow mx-auto" method="POST">
                <header class="card-header center">
                    <h3 class="card-heading">Register</h3>
                </header>
                <main class="card-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">First Name</label>
                                        <input type="text" class="input input-stretch" placeholder="Enter your first name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Last Name</label>
                                        <input type="text" class="input input-stretch" placeholder="Enter your last name...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Email</label>
                                        <input type="text" class="input input-stretch" placeholder="Enter your Email...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Age</label>
                                        <input type="number" class="input input-stretch" >
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Birthdate</label>
                                        <input type="date" class="input input-stretch" placeholder="Enter your birthdate...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Sex</label>
                                        <div style="width: 100%">
                                            <input type="radio" id="m" name="sex" class="">
                                            <label for="m" class="input-label label-inline">Male</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="f" name="sex" class="">
                                            <label for="f" class="input-label label-inline">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Civil Status</label>
                                        <input type="text" class="input input-stretch" placeholder="Enter your civil status...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Address</label>
                                        <input type="text" class="input input-stretch" placeholder="Enter your address...">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <label for="fname" class="input-label">Contact Number</label>
                                        <input type="text" class="input input-stretch" placeholder="Enter your contact number...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="card-footer center">
                    <a href="#" class="link">Already have an account? Login</a>
                </footer>
            </form>
        </div>
    </div>
</body>
</html>