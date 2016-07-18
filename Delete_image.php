
<a href="?p=student_image">New Image</a><br>
<br>

<?php
//include('menu/cn.php');

if(isset($_GET['id']))
{
	$path="";
	$sql3="select * from simage where id= ".base64_decode($_GET['id']);
	$r3=mysqli_query($cn,$sql3);
	while($sr3=mysqli_fetch_array($r3))
		{
			$path="imagebox/".$sr3["id"]."_".$sr3["image"];
			}
	$sql2="delete from simage where id= ".base64_decode($_GET['id']);
	$r2=mysqli_query($cn,$sql2);
	if($r2)
	{
		unlink($path);
		print '<div class="success">Data Deleted</div>';
		}
		else{
				print '<div class="success">'.mysqli_error($cn).'</div>';
			}
	}
	
		
$sql="select si.id as id, si.image as image,s.name as name from simage as si,student as s where si.studentid=s.id ORDER BY si.id";
$r=mysqli_query($cn,$sql);

print'<table>';
print '<tr><th>Id</th><th>Name</th><th>Image</th><th>Delete</th></tr>';
while($sr=mysqli_fetch_array($r))
{
	print '<tr>';
	print '<td>'.$sr["id"].'</td>';
	print '<td>'.$sr["name"].'</td>';
	print '<td><img src="imagebox/'.$sr["id"].'_'.$sr["image"].'" width="60" height="60" alt=""/></td>';
	print '<td>	
				<a href="?p=image_display&id='.base64_encode($sr["id"]).'">Delete</a>
			</td>';
	print '</tr>';
	}

print '</table>';

?>
