<?php
require 'db.php';
session_start();
  if(isset($_POST['login'])){
      $loginEmail=$_POST['youremailforlogin'];
      $loginpassword=$_POST['yourpasswordforlogin'];


          $query="select * from users_table where email='$loginEmail' and password='$loginpassword'";
          $result=mysqli_query($connectionQuery,$query);
          if(!$result){
              echo "Connection Problem....😥";
          }
          else{
              $row = mysqli_fetch_array($result);
              if($loginEmail == $row['email'] and $loginpassword == $row['password']){
                  $_SESSION['check_login']=$loginEmail;
                  //echo "Login Successfull 👏👏👏";
                  //header("refresh:2; URL=Desh.php");
                  header("location: Desh.php");
              }
              else{
              echo "No account found for " . $loginEmail;
              header("refresh:2; URL=login.php");
              }
          }
  }
  else{
      header("location: login.php");
  }

?>
