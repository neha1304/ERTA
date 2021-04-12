<?php
require './connect.php';

if (isset($_POST['submit'])) {
    
     $username = mysqli_real_escape_string($connection, $_POST['Username']);
     $password = mysqli_real_escape_string($connection, $_POST['password']);

     //echo 'submitted';

     $sql = "INSERT INTO users(username,  password) VALUES ('$username',  '$password')";

        $result = mysqli_query($connection, $sql);
        if (mysqli_affected_rows($connection)) {
            echo "
            <script>
                alert('You have been successfully registered');
                window.location.href='./gallery.html';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('something went wrong.');
                window.location.href='./login page.php';
            </script>
            ";
        }
            
    }
else{
   //echo ' not submitted';
   
}

?>
