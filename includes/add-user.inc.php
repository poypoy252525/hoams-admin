<?php

if (isset($_POST['submit'])) {
    include_once "connection.inc.php";
    include_once "functions.inc.php";

    $username = $_POST['username'];

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileNameTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    if ($fileError === 0) {
        if ($fileSize <= 500000000) {
            $extension = explode('.', $fileName);
            $fileDestination = '../uploads/'.$fname.'-'.$lname.'.'.end($extension);
            move_uploaded_file($fileNameTmp, $fileDestination);
            $path = 'uploads/'.$fname.'-'.$lname.'.'.end($extension);
        } else {
            echo '<script>
                alert("File size is too large");
            </script>';
            header('Location: ../add-user.php?verification=filelarge');
            exit();
        }
    } else {
        echo '<script>
                alert("There was an error uploading the file");
            </script>';
            header('Location: ../add-user.php?verification=error');
            exit();
        exit();
    }
 
    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `role`, `joined_date`, `profile_dir`)
    VALUES ('$fname','$lname','$email','$role',NOW(), '$path')";
    
    $conn->query($sql);
    header('Location: ../add-user.php?verification=success');
    exit();
}