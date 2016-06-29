<?php
  
$cn=mysqli_connect("localhost","designex_de","x1qtW-gO@QJn","designex_wpdesig");
// dutoi kaj kore 
/* 
$code="";
$count="";
$msg="";
if(isset($_GET['k']))
{
	$code=mysqli_real_escape_string($cn,strip_tags($_GET['k']));
	
	$c=mysqli_query($cn,"SELECT * FROM private_person WHERE random='$code'");

	if(mysqli_num_rows($c) > 0)
  {
	$count=mysqli_query($cn,"SELECT * FROM private_person WHERE random='$code' and status='0'");

	if(mysqli_num_rows($count) == 1)
	{
	mysqli_query($cn,"UPDATE private_person SET status='1' WHERE random='$code'");
	$msg="Your account is activated"; 
	}
	else
	{
		$msg ="Your account is already active, no need to activate again";
	}

  }


	else
	{
	$msg ="Wrong activation code.";
	}

}
 

 */


$result="";
$key=mysqli_real_escape_string($cn,$_GET["k"]);

if (isset_GET['$key'])
{
		
	$query="SELECT * from private_person where random='$key'";
	$result=mysqli_query($cn,$query) or die('first error');
	 if (mysqli_num_rows($result))
		 {
			 $row=mysqli_fetch_array($result); 
			 if ($row['status']==='0')
			 {
			 $query2="update private_person set status='1' where random='$key'";
			 $result=mysqli_query($cn,$query2) or die('second error');
			
			 echo "User Account activated successfully.";
			 echo "Login to continue";
			 }
			 else
			 {
				 echo "Account already activated";
				 //header('Location: $url');
			
				
			 }
			 
		 }
		 else
		 {
			 echo "Invalid Activation Key";
			 //header('Location: $url');
		 }
}
else{
	echo "last error";
}

?>
