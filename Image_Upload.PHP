<?php
$image="";
$date="";
$title="";

$eimage="";
$edate="";
$etitle="";
	
	if(isset($_POST['submit'])){
		$image=$_FILES['image'];
		$date=$_POST['date'];
		$title=$_POST['title'];
		
		$er=0;
		
		if(!(isset($image['size']) and $image['size']>0))
		{
			$er++;
			$eimage= "<span class='error'>Required</span>";
		}
		else
		{
			$a=explode(".",$image["name"]);
			if(count($a)>=2)
			{
				$ext=strtolower($a[count($a)-1]);
				if(!($ext=="gif" or $ext=="jpg" or $ext=="png" or $ext=="jpeg"))
				{
					$er++;
					$eimage= '<span class="error">Invalid File Formate</span>';
				}
			}
			else
			{
				$er++;
				$eimage= '<span class="error">No Extension</span>';
			}
		}
		if($date=="")
		{
			$er++;
			$edate= "<span class='error'>Required</span>";
		}
		if($title=="")
		{
			$er++;
			$etitle= "<span class='error'>Required</span>";
		}
		if($er==0)
		{
			$sql = "insert into studentimages(studentid,image,date,title) values('".$_SESSION['id']."','".$image['name']."','".$date."','".$title."')";
			if(mysqli_query($cn,$sql)){
				$sp = $image['tmp_name'];
				$dp = "StudentImages/".mysqli_insert_id($cn)."_".$image['name'];
				move_uploaded_file($sp,$dp);
				print "<span class='success'>Success</span>";
				$student="";
				$image="";
				$date="";
				$title="";	
			}
		}
		else
		{
			print '<span class="error">'.mysqli_error($cn).'</span>';
		}
	}
?>

<form method="post" action="" enctype="multipart/form-data">
	<fieldset>
    <legend>Your Image</legend>
    Image<br>
    <input type="file" name="image"/><?php print $eimage; ?><br>
    Date<br>
    <input type="text" name="date" value="<?php print $date; ?>"><?php print $edate; ?><br>
    Title<br>
    <input type="text" name="title" value="<?php print $title; ?>"><?php print $etitle; ?><br>
    <input type="submit" name="submit" value="save">

	</fieldset>
</form>
