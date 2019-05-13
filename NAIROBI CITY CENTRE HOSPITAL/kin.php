<?php 

if ( isset($_POST['kinpid']) && isset($_POST['kinfname']) && isset($_POST['kinsname']) && isset($_POST['rel']) ) 
{
	$pid = $_POST['kinpid'];
	$fname = $_POST['kinfname'];
	$sname = $_POST['kinsname'];
	$rel = $_POST['rel'];

	// store in db 
	$db = mysqli_connect("localhost","root","","nairobicitycenter");
	if($db)
	{
		// echo "successfully connected to database";
		// insert kin 
			$in = mysqli_query($db,"INSERT INTO 
				nextkin(parentid,firstname,surname,relationship) 
				VALUES('$pid','$fname','$sname','$rel') ");
			if( $in )
			{
				echo "<br />Information successfully inserted &#10003;&#10003;<br />";
			}	
			else{ echo "Could not be inserted. Please check later."; }
		

	}
	else{ echo "Connection to database not possible."; }

}

?>