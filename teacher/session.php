<?php
   include('confi.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select teacher_id, firstname,lastname from staff where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstname']." ".$row['lastname'];
   
    $_SESSION['id']=$row['teacher_id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>