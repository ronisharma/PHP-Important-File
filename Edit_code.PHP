country_edit.....

<?php
$name= "";
$ename="";
if(isset($_POST['submit']))
{
	
	$name=mysqli_real_escape_string($cn,strip_tags($_POST['name']));
	$er=0;
	if($name=="")
	{
		$er++;
		$ename= '<span class="error">Requird</span>';
	}
	if($er==0)
	{
		$sql="update country set name = '".ms($name)."' where id = ".base64_decode($_GET['id']);
		if(mysqli_query($cn,$sql))
		{
			print '<span class="sucess">Country Saved</sucess>';
		}
		else
		{
			print '<span class="error">'.mysqli_error($cn).'</span>';
		}
	}
	
}
else if(isset($_GET['id']))
{
	$sql2 = "select * from country where id = ".base64_decode($_GET['id']);
	$r2 = mysqli_query($cn, $sql2);
	while($sr2 = mysqli_fetch_array($r2))
	{
		$name = $sr2["name"];	
	}
}
?>
<form method="post" action="">
<fieldset>
<legend>Country New</legend>
Name<br>
<input type="text" name="name" id="name" maxlength="20" value="<?php print $name; ?>" required><?php print $ename; ?><br>
<br>
<input type="submit" name="submit" value="save"><br>
</fieldset>
</form>

.........

<a class="edit" href="?p=country_edit&id='.base64_encode($sr["id"]).'">Edit</a>
