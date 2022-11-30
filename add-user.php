<?php $pageName = 'Add User' ?>
<?php $headerIcon = '<svg class="icon icon-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/></svg>' ?>
<?php include "includes/header.inc.php" ?>
            <?php
                if (isset($_GET['verification'])) {
                    $verify = $_GET['verification'];
                    switch ($verify) {
                        case 'success':
                            echo '<div class="row">
                                    <div class="col-12">
                                        <div class="banner banner-success">
                                            <svg class="banner-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                                            Added Successfully
                                        </div>
                                    </div>
                                </div>';
                            break;
                        case 'userexist':
                            echo '<div class="row">
                                    <div class="col-12">
                                        <div class="banner banner-danger">
                                        <svg class="banner-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
                                            Username Already Exist
                                        </div>
                                    </div>
                                </div>';
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
            ?>
            <div class="mb-4"></div>
            <form action="includes/add-user.inc.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card shadow mb-4">
                            <header class="card-header">
                                <p class="card-heading">Profile Picture</p>
                            </header>
                            <section class="card-content">
                                <div class="profile-picture-panel">
                                    <div class="user-profile center">
                                        <img id="profile-picture" src="images/user.png" alt="profile" class="image-fluid">
                                    </div>
                                    <p class="mb-2">JPG or PNG file no larger than 5MB</p>
                                    <input type="file" id="upload-profile" name="file" accept=".jpg, .png" class="input" required>
                                    <label for="upload-profile" class="btn btn-primary upload-btn">Upload new Image</label>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card shadow mb-4">
                            <header class="card-header">
                                <p class="card-heading">Account Details</p>
                            </header>
                            <section class="card-content">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-group">
                                            <label for="fname" class="input-label">First Name</label>
                                            <input type="text" id="fname" name="fname" class="input input-stretch" placeholder="Enter your first name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group">
                                            <label for="lname" class="input-label">Last Name</label>
                                            <input type="text" id="lname" name="lname" class="input input-stretch" placeholder="Enter your last name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-group">
                                            <label for="email" class="input-label">Email Address</label>
                                            <input type="email" id="email" name="email" class="input input-stretch" placeholder="Enter your email address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-group">
                                            <label for="date" class="input-label">Role</label>
                                            <select name="role" id="role" class="input input-stretch" required>
                                                <option selected disabled>Select a role:</option>
                                                <option>Administrator</option>
                                                <option>Registered</option>
                                                <option>Guest</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button class="btn btn-primary" type="submit" name="submit">Add user</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </form>
<?php include "includes/footer.inc.php" ?>