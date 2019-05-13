<!DOCTYPE html>
<!User Interface>
<html>
<head><title>HOSPITAL HOMEPAGE</title>
</head>

<body bgcolor ="green">

<div id="Container">

<div id="Header">
<div class="logo">
<img src="logo4.png" class="logo2">
</div>
<div class="Name">
<p class="title">NAIROBI CITY CENTER HOSPITAL</p>
</div>
</div>

<div id="Menu">
<div class ="space">
</div>
<div class="list">
<ul>
<li><a href ="index.php">Home</a></li>
<li>Registration<ul> <li><a href="forms.php">Patient Registration</a></li> <li><a href="forms-kins.php">Next kin Registration</a></li></ul></li>
<li>Records<ul> <li><a href="patients.php">Patient Records</a></li> <li><a href="kins-records.php">kin Records</a></li></ul></li>

<li><a href ="about-us.php">About Us</a></li>
<li><a href ="Contact.php">Contacts</a></li>
</ul>
</div>
<div class="line">
&nbsp;&nbsp;&nbsp;&nbsp;
<hr width="98%" align="center" color="green">
</div>
</div>


<div id="SideBar">
 <ul>
      <li>SITE NAVIGATION</li>
      &nbsp;&nbsp;&nbsp;&nbsp;
     <li><a href ="index.php">Home</a></li>
      <li>Registration<ul> <li><a href="forms.php">Patient Registration</a></li> <li><a href="forms-kins.php">Next kin Registration</a></li></ul></li>
      <li>Records<ul> <li><a href="patients.php">Patient Records</a></li> <li><a href="kins-records.php">kin Records</a></li></ul></li>
 
    </ul>
  </div>


<div id="MainBody">
<div>
<h1><u>WELCOME TO THE NAIROBI CITY CENTER HOSPITAL WEBSITE</u></h1>
<h2><u>FORMS PAGE</u></h2>
<p>Forms data will be entered in this page about the next of kins for the patients</p>
<br><br>
<div class="divForm">
				<div class="divFormH">
					Next of kin 
				</div><br>
				<form action="kin.php" class="uform"> 
					PatientId <br>
					<?php 
						//fetch id of registered patients in the drop down 
						$db = mysqli_connect("localhost","root","","nairobicitycenter");
						if($db)
						{
							$sel = mysqli_query($db,"SELECT * FROM patients ORDER BY parentid DESC ");
							if( mysqli_num_rows($sel) == 0 )
							{
								echo "<h1>There are currently no patients in the database. Fill in the patients table from the database.</h1>";
							}
							else
							{
								// fetch parent ids then user interface 
								echo "<select class='kinpid'>";
								while( $a = mysqli_fetch_array($sel) )
								{
									$idz = $a['pid'];

									echo "<option>$idz<option>";
								}
								echo "</select><br />";
								?>

								First Name <br><input type="text" required name="" class="kinfname"><span class="err"></span><br>
					Surname <br><input type="text" name="" required class="kinsname"><span class="err"></span><br>
					Relationship <br><input type="text" required name="" class="rel"><span class="err"></span><br>
					<br>
					<input type="submit" name="create" value="Send" class="kinsend"> &nbsp;&nbsp;
					<input type="reset" name="" value="Clear" class="clear"><br>
					<div class="results"></div>

					
								<?php 
							}
						 	
						}
						else
						{
							echo "<h1>Problem with connecting to the database</h1>";
							
						}

					?>


					

				</form>

			</div>

			<br><br>





</div>

</div>


<div id="Footer">
<div class="line">
&nbsp;&nbsp;&nbsp;&nbsp;
<hr width="98%" align="center" color="green">
</div>
<p align="center"><a href="#"> &copy; Nairobi City Center Hospital </a>
</div>



<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="Menu.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:551px) and (max-width:2000px)" href="styles.css">
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="functions.js"></script>

</body>
</html>