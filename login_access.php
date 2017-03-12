<?php
	session_start();
   	include("pages/connection.php");
   
   	if(isset($_POST["submit"]))
   	 {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE name = '$name' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
         
      $count = mysqli_num_rows($result);		
      if($count == 1)
       {
         $_SESSION['id'] = $row["id"];
         header("location: welcome.php");
         //print "<script>alert('Hello! I am an alert box!!')</script>";
      }
      else
      {
         header("location: index.php");
      }
   }
?>
