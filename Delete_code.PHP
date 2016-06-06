<?php
if(isset($_GET["id"]))
{
	$sql2 = "delete from student_image where id = ".base64_decode(ms($_GET['id']));
	$r2 = mysqli_query($cn, $sql2);
	if($r2)
	{
		print '<div class="success">Data Deleted</div>';	
	}
	else
	{
		print '<div class="error">'.mysqli_error($cn).'</div>';
	}
}



<a class="delete" href="?p=student_result&id='.base64_encode($sr["id"]).'">Delete</a>



<hr>


<?php
if(isset($_GET["studentid"]) and isset($_GET["courseid"]))

{
	$sql2 = "delete from studentcourse where studentid = ".base64_decode(ms($_GET['studentid']))." and courseid = ".base64_decode(ms($_GET['courseid']));
	$r2 = mysqli_query($cn, $sql2);
	if($r2)
	{
		print '<div class="success">Data Deleted</div>';	
	}
	else
	{
		print '<div class="error">'.mysqli_error($cn).'</div>';
	}
}

<a class="delete" href="?p=student_course&studentid='.base64_encode($sr['studentid']).'&courseid='.base64_encode($sr['courseid']).'">Delete</a>


