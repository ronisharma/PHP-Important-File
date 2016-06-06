Student<br>
<select name="student" id="student">
<option value="">select</option>
<?php
$sql="select id,name,roll from student";
$r=mysqli_query($cn,$sql);
while($sr=mysqli_fetch_array($r))
{
	if($sr["id"]==$student)
	{
		print '<option value="'.$sr["id"].'" selected>'.$sr["name"].'</option>';
	}
	else
	{
		print '<option value="'.$sr["id"].'">'.$sr["name"].','.$sr["roll"].'</option>';
	}
}

?>
</select><?php print $estudent; ?><br>
<br>
