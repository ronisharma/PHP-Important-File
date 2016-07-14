if($email == "")
	{
		$er++;
		$eemail = "Required";	
	}
	else
	{
		$a = explode("@", $email);
		$lp = $a[count($a)-1];
		if(count($a) <= 1)
		{
			$er++;
			$eemail = "Invalid Email";	
		}
		elseif($lp == "")
		{
			$er++;
			$eemail = "Invalid Email";	
		}
		else
		{
			$a = explode(".", $lp);
			$lp = $a[count($a) - 1];
			if(count($a) <= 1)
			{
				$er++;
				$eemail = "Invalid Email";	
			}
			if($lp == "")
			{
				$er++;
				$eemail = "Invalid Email";	
			}
		}
	}
