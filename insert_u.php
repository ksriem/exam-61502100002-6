<?php
include_once 'connect_db.php';
if(isset($_POST['submit']))
{    
     $username = $_POST['username'];
     $passwords = $_POST['passwords'];
     $sql = "INSERT INTO user (username,passwords) VALUES ('$username','$passwords')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>



