<?php 

if ( isset($_POST['pid']) && isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['sname']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['county']) ) 
{
	$pid = $_POST['pid'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$sname = $_POST['sname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$county = $_POST['county'];

	// store in db 
	$db = mysqli_connect("localhost","root","","nairobicitycenter");
	if($db)
	{
		// echo "successfully connected to database";
		// see if id was already inserted 
		$sel = mysqli_query($db,"SELECT pid FROM patients WHERE pid = '$pid' LIMIT 1");
		if( mysqli_num_rows($sel) == 0 )
		{
			// insert parent id 
			$in = mysqli_query($db,"INSERT INTO 
				patients(pid,firstname,middlename,surname,dateofbirth,gender,county) 
				VALUES('$pid','$fname','$mname','$sname','$dob','$gender','$county') ");
			if( $in )
			{
				echo "<br />Information successfully inserted &#10003;&#10003;<br />";
			}	
			else{ echo "Could not be inserted. Please check later."; }
		}
		else
		{
			echo "Try another parent id. That one was previously inserted.";
		}

	}
	else{ echo "Connection to database not possible."; }

}

?>