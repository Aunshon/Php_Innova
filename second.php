<?php
  //
  // if (empty($_POST["nam"])) {
  //   header('location:index.php?nameerr=Please enter your name');
  // }
  // else if (empty($_POST["mail"])) {
  //   header('location:index.php?mailerr=Please enter valid mail&NAME='.$_POST["nam"]);
  // }
  // elseif (!filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)) {
  //   header('location:index.php?mailerr=Its a invalide Email&NAME='.$_POST["nam"]);
  // }
  // else if (empty($_POST["pass"])) {
  //   header('location:index.php?pass=password is empty&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"]);
  // }
  // // elseif (!preg_match('/^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[^A-Za-z\d])[\s\S]{6,16}$/',$_POST["pass"])) {
  // //       header('location:index.php?pass=Please give a valid pssword&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"]);
  // // }
  // else if (empty($_POST["repass"])) {
  //   header('location:index.php?repass=Type the password again&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"].'&PASS='.$_POST["pass"]);
  // }
  // else if ($_POST["pass"]!=$_POST["repass"]) {
  //   header('location:index.php?repass=Password does not matched&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"].'&PASS='.$_POST["pass"]);
  // }
  // elseif (empty($_POST['mess'])) {
  //       header('location:index.php?MESS=Enter your messge&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"].'&PASS='.$_POST["pass"]);
  // }
  // elseif ($_POST['day']=='day' || $_POST['month']=='month' || $_POST['year']=='year') {
  //     header('location:index.php?date=Select date&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"].'&PASS='.$_POST["pass"]);
  // }
  // elseif (empty($_POST["gridRadios"])) {
  //   header('location:index.php?GENDER=Please select your genderd&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"].'&PASS='.$_POST["pass"]);
  // }
  // elseif (empty($_POST["check"])) {
  //   header('location:index.php?CHECK=Please select food&NAME='.$_POST["nam"].'&EMAIL='.$_POST["mail"].'&PASS='.$_POST["pass"]);
  // }
  // echo filter_var($_POST["mail"],FILTER_SANITIZE_EMAIL)."<br>";
  // echo "Your name  : " . $_POST["nam"]."<br>";
  // echo "Your gender is : ".$_POST['gridRadios']."<br>";
  // echo "Date : ".$_POST['day']."/".$_POST['month']."/".$_POST['year']."<br>";
  // echo "Your Message :  ".$_POST['mess']."<br>";
  // echo "Your Food : ";
  // foreach ($_POST["check"] as $value) {
  //   echo $value." , ";
  // }
  // // echo "Your Email  : " . $_POST["mail"]."<br>";
  // // echo sha1("aunshon")."<br>";
  // // echo md5("aunshon");

 require 'db.php';
 if (isset($_POST['login_btn'])) {
    header("location:login.php");
 }else {
   $name=$_POST["nam"];
   $gender=$_POST['gridRadios'];
   $date=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
   $messsage=$_POST['mess'];
   $email=$_POST["mail"];
   $foods=null;
   $pass=$_POST["pass"];
   $role=$_POST['role'];
   $upload_photo=$_FILES['photo'];
   $after_explode=explode(".",$upload_photo['name']);
   $extension=end($after_explode);
   //echo $extension;
   $suppported_fild=array('jpg','jpeg','png','JPG');
   $count=0;

   echo "Your Email  : " . $_POST["mail"]."<br>";
   foreach ($_POST["check"] as $value) {
     //echo $value." , ";
     $foods=$foods ."," . $value;
   }

    $queryforexistingemail="select * from users_table where email='$email'";
    $resultforexistingemail=mysqli_query($connectionQuery,$queryforexistingemail);
    if(!$resultforexistingemail){
        echo "Connection Problem....😥";
    }
    else{
    $rowofemails = mysqli_fetch_array($resultforexistingemail);
    if($email == $rowofemails['email']){
        echo "Sorry this Email is already exists , please try a new one </br>";
        header("refresh:3; URL=registration.php");
    }
    else {



      if (in_array($extension,$suppported_fild)) {

        $insertQuery="insert into users_table(name,gender,bdate,message,email,food,password,role) values('$name','$gender','$date','$messsage','$email','$foods','$pass','$role')";

        $resultOfInsertQuery=mysqli_query($connectionQuery,$insertQuery);

        if (!$resultOfInsertQuery) {
          echo "Failed to inseret data<br>";
        }
        else {
          // echo "Data inserted 😍😍👏<br><br><br>";
          //
          // echo "Your name  : " . $_POST["nam"]."<br>";
          // echo "Your gender is : ".$_POST['gridRadios']."<br>";
          // echo "Date : ".$date."<br>";
          // echo "Your Message :  ".$_POST['mess']."<br>";
          // echo "Your Food : ";
          // print_r($_POST['check']);
          // echo "<br>";
          // echo $foods;
          //header("Refresh:3; url=registration.php");
          $current_user_id=mysqli_insert_id($connectionQuery);
          // echo $current_user_id;
          $uploadFileName=$current_user_id .".". $extension;
          // echo "$uploadFileName";
          $uploadFileLocation='pro_pic/'.$uploadFileName;
          move_uploaded_file($upload_photo['tmp_name'],$uploadFileLocation);
          $uploadPhotoQuery="UPDATE users_table SET photo='$uploadFileName' WHERE id=$current_user_id";
          mysqli_query($connectionQuery,$uploadPhotoQuery);
          //header("Refresh:2;URL=login.php");
          header("location:login.php");
        }
          //$n=$_POST['username'];$e=$_POST['mail'];$m=$_POST['message'];
          // $contactinsertquery="insert into contact(name,email,message) values('$n','$e','$m')";
          // $contactresult=mysqli_query($connectionQuery,$contactinsertquery);
          // $current_user_id=mysqli_insert_id($connectionQuery);
          // // echo $current_user_id;
          // $uploadFileName=$current_user_id .".". $extension;
          // // echo "$uploadFileName";
          // $uploadFileLocation='uploads/'.$uploadFileName;
          // move_uploaded_file($upload_photo['tmp_name'],$uploadFileLocation);
          //$uploadPhotoQuery="UPDATE contact SET photo='$uploadFileName' WHERE id=$current_user_id";
          // $res=mysqli_query($connectionQuery,$uploadPhotoQuery);
          // if (!$contactresult) {
          //   echo "Could not save contact to database";
          // }
          // else {
          //   //echo "Contact saved";
          //   //header("Refresh:2;URL=contact_list.php");
          //   $_SESSION['messageAlert']=1;
          //   //header("location:contact_list.php");
          //   header("location:index.php");
          // }

      }else {
        echo "Unsupported file";
      }

    }

  }

}
 ?>
