<!--   RMIT University Vietnam
  Course: COSC2430 Web Programming
  Semester: 2023A
  Assessment: Assignment 2
  Author: Ho Dac Quang Minh
  ID: s3893444
  Acknowledgement:  student's sample
                    https://validator.w3.org/
                    https://jigsaw.w3.org/css-validator/ -->
<?php

session_start();
if(isset($_POST['changepp'])) {
    if($_FILES['changeProfilePicture']['name'] != null ) {
        $file = glob('../database/profile_picture/'.$_SESSION['username'].'.*');
        $file = $file[0];
        $path_parts = pathinfo($file);
        unlink('../database/profile_picture/'.$path_parts['basename']);

        $info = pathinfo($_FILES['changeProfilePicture']['name']);
        $ext = $info['extension'];
        $newname = $_SESSION['username'].".".$ext;
        $target = '../database/profile_picture/'.$newname;
        move_uploaded_file($_FILES['changeProfilePicture']['tmp_name'], $target);

        header("Location: my_account.php");
    } else {
        header("Location: index.php");
    }
}


?>