$search="";
$country="";
if(isset($_POST["search"]))
{
	$search=$_POST['search'];	
}

if(isset($_POST["country"]))
{
	$country=$_POST['country'];	
}
?> 

//query......//

if($search !="")
 {
	 $sql.=" and city.name like '%".ms($search)."%'";
 }
 
 if($country !="")
 {
	 $sql.=" and country.id=".$country;
 }



<form method="post" action="">
<fieldset>
<legend>Search</legend>
<input type="text" name="search" value="<?php print $search;?>"/>
Country
<select name="country" id="country">
<option value="">Select</option>
			<?php
			$sql="select * from country";
			$r=mysqli_query($cn,$sql);
			while($sr=mysqli_fetch_array($r))
			{
				if($sr["id"]==$country)
				{
					print '<option value="'.$sr["id"].'" selected>'.$sr["name"].'</option>';
				}
				else
				{
				print '<option value="'.$sr["id"].'">'.$sr["name"].'</option>';
				}
			}
			
			?>
</select>
<input type="submit" name="submit" value="search"/>
</fieldset>
</form>
