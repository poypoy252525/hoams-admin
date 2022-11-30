<?php

if (isset($_POST['submit'])) {
    include_once "connection.inc.php";
    include_once "functions.inc.php";

    $id = $_GET['id'];

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileNameTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    if ($fileName !== '') {
        if ($fileError === 0) {
            if ($fileSize <= 500000000) {
                $extension = explode('.', $fileName);
                $fileDestination = '../uploads/'.$fname.'-'.$lname.'.'.end($extension);
                move_uploaded_file($fileNameTmp, $fileDestination);
                $path = 'uploads/'.$fname.'-'.$lname.'.'.end($extension);
                $syntax = ",`profile_dir`='$path'";
            } else {
                echo '<script>
                    alert("File size is too large");
                </script>';
                header('Location: ../edit-user.php?verification=filelarge');
                exit();
            }
        } else {
            echo '<script>
                    alert("There was an error uploading the file");
                </script>';
                header('Location: ../edit-user.php?verification=error');
                exit();
            exit();
        }
    }
 
    $sql = "UPDATE `users` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`role`='$role'".(isset($syntax) ? $syntax : '')." WHERE id='$id'";
    
    $conn->query($sql);
    header('Location: ../edit-user.php?verification=success');
    exit();
}