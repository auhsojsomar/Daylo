<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {

   if (isset($_POST['Submitbot'])) { 
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE username = '$username' and pwd = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		if($row['membership']=="admin")
   {
    header("Location: admindash.php");
     }elseif ($count == 1) {
         $_SESSION['login_user'] = $username;
         header("location: ../lnf/welcome.php");
      }else {
         header("Location: ../lnf?invalidaccount=1");
         exit();
      }
    }

   }
?>

