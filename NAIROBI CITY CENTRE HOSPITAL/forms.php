<!DOCTYPE html>
<!User Interface>
<html>
<head><title>FORMS PAGE</title>
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
<p>Forms data will be entered in this page about the patients</p>
<br><br>
<div class="divForm">
				<div class="divFormH">
					Register patient
				</div><br>
				<form action="patient.php" class="uform">
					PatientId <input type="text" required name="" class="pid" placeholder="Patient id"><span class="err"></span><br>
					First Name <input type="text" required name="" class="fname" placeholder="First name " ><span class="err"></span><br>
					Middle Name <input type="text" required placeholder="Middle name" name="" class="mname"><span class="err"></span><br>
					Surname <input type="text" name="" placeholder="Surname" required class="sname"><span class="err"></span><br>
					Date of birth <input type="text" placeholder="Day/Month/Year" required name="" class="dob"><span class="err"></span><br>
					Gender <select class="gen">
						<option>Male</option>
						<option>Female</option>
						<option>Bi-sexual</option>
					</select> <br>
					County <select class="county">
						<?php require("counties.php"); ?>
					</select> <br><br>
					<input type="submit" name="" value="Send" class="send"> &nbsp;&nbsp;
					<input type="reset" name="" value="Clear" class="clear"><br>
					<div class="results"></div>
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