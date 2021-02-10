<?php
include_once 'connect_db.php';
if(isset($_POST['submit']))
{    
     $name_movie = $_POST['name_movie'];
     $date_movie = $_POST['date_movie'];
     $sql = "INSERT INTO theater (name_movie,date_movie) VALUES ('$name_movie','$date_movie')";
     if (mysqli_query($conn, $sql)) {
        header("location:search.php");;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>



