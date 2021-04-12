<?php
require './connect.php';

if (isset($_POST['submit'])) {
    
     $username = mysqli_real_escape_string($connection, $_POST['Username']);
     $password = mysqli_real_escape_string($connection, $_POST['password']);

     //echo 'submitted';
     
     $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password` = '$password'";
     
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 0){
            echo "
            <script>
                alert('NO such record found. Try to Create a new account');
                window.location.href='./login page.php';
            </script>
            ";
        }

        if (mysqli_num_rows($result) >= 1) {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "
                <script>
                    alert('Hello $row[username],You have been successfully Logged in ');
                    window.location.href='./gallery.html';
                </script>
                ";
            }
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
  // echo ' not submitted';
}

?>


