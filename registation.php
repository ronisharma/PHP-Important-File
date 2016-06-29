
<?php
$cn=mysqli_connect("localhost","designex_de","x1qtW-gO@QJn","designex_wpdesig");

$name="";
$surname="";
$address="";
$zip="";
$phone="";
$email="";
$language="";
$character="";
$education="";
$password="";
$retypepassword="";
$type="P";


$ename="";
$esurname="";
$eaddress="";
$ezip="";
$ephone="";
$eemail="";
$elanguage="";
$echaracter="";
$eeducation="";
$epassword="";

if(isset($_POST["submitone"]))
{
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $address=$_POST["address"];
    $zip=$_POST["zip"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $language=$_POST["language"];
    $character=$_POST["charact"];
    $education=$_POST["education"];
     $password=$_POST["password"];
	  $retypepassword=$_POST["retypepassword"];


    $er=0;
    if($name=="")
    {
        $er++;
        $ename="Required";
    }
    if($surname=="")
    {
        $er++;
        $esurname="Required";
    }
    if($address=="")
    {
        $er++;
        $eaddress="Required";
    }
    if($zip=="")
    {
        $er++;
        $ezip="Required";
    }
    if($phone=="")
    {
        $er++;
        $ephone="Required";
    }
    if($email=="")
    {
        $er++;
        $eemail="Required";
    }
    if($language=="")
    {
        $er++;
        $elanguage="Required";
    }
    if($character=="")
    {
        $er++;
        $echaracter="Required";
    }
    if($education=="")
    {
        $er++;
        $eeducation="Required";
    }
    if($password=="")
    {
        $er++;
        $epassword="Required";
    }
	if($retypepassword=="")
    {
        $er++;
        $epassword="Required";
    }
	else
	{
		if(!($password==$retypepassword))
		{
			$er++;
			$epassword="Passord does not Match";
		}
	}
     
		

    if($er==0)
    {
		$sql="select * from private_person where name='".$name."' and post='".$email."'";
        $result=mysqli_query($cn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            print "already actived";
        }
      $activ_key = sha1(mt_rand(10000,99999).time().$email);

		

        $sql2="insert into private_person(name,surname,address,zip,phone,post,language,charact,education,password,type,random)values('".mysqli_real_escape_string($cn,strip_tags($name))."',
        '".mysqli_real_escape_string($cn,strip_tags($surname))."',
        '".mysqli_real_escape_string($cn,strip_tags($address))."',
        '".mysqli_real_escape_string($cn,strip_tags($zip))."',
        '".mysqli_real_escape_string($cn,strip_tags($phone))."',
        '".mysqli_real_escape_string($cn,strip_tags($email))."',
        '".mysqli_real_escape_string($cn,strip_tags($language))."',
        '".mysqli_real_escape_string($cn,strip_tags($character))."',
        '".mysqli_real_escape_string($cn,strip_tags($education))."',
        '".mysqli_real_escape_string($cn,strip_tags($password))."',
        '".$type."',
		'".mysqli_real_escape_string($cn,strip_tags($activ_key))."'
        )";

        if(mysqli_query($cn,$sql2))
        {
			
			$to=$email;
			$subject="New Registration";
			$body="Hi ".$name.
			"<br /><br /> Thanks for your registration.<br />".
			"Click the below link to activate your account<br /><br />".
			"<a href=\"http://designexpose.net/marketplace/inpage/activate.php?k=$activ_key\"> Activate Account </a><br /><br /> Thanks<br />";
            $mailHeaders = "From: support@leexor.com"."\r\n";
            if(mail($to, $subject, $body, $mailHeaders))
             {
                // print " <div class='alert alert-success'><strong>Du har opprettet en konto hos oss! Gå i din registrerte mail og aktiver din konto ved å klikke på aktivering linken!</strong> </div>"; 
				
					echo "Thanks for your registration.Go to Email and Click the link to activate your account";
             }
             
             $name="";
            $surname="";
            $address="";
            $zip="";
            $phone="";
            $email="";
            $language="";
            $character="";
            $education="";
            $password="";
            

        }
    }
    else
    {
        print mysqli_error($cn);
    }
}


