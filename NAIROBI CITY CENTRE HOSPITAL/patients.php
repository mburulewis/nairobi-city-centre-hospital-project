<!DOCTYPE html>
<!User Interface>
<html>
<head><title>PATIENTS DATA</title>
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
<h2><u>PATIENTS RECORD PAGE</u></h2>
<p>Patients Data</p>
<br><br>
<table>
				<thead style="background-color: cyan;">
					<tr>
						<th>Patient ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>County</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						// fetch database contents 
						$db = mysqli_connect("localhost","root","","nairobicitycenter");
						if( $db )
						{
							$sel = mysqli_query($db,"SELECT * FROM patients ORDER BY parentid DESC ");
							if( mysqli_num_rows($sel) == 0 )
							{
								echo "<h2>There are no patients in the database. Create some in the creation section.</h2>";
							}
							else
							{

								while( $a = mysqli_fetch_array($sel) )
								{
									$pid = $a['parentid'];
									$prid = $a['pid'];
									$firstname = $a['firstname'];
									$middlename = $a['middlename'];
									$surname = $a['surname'];
									$kdate = $a['dateofbirth'];
									$gender = $a['gender'];
									$county = $a['county'];
									$datefull = explode("/",$kdate);
									$getdate = end($datefull);
									$today = date("D/M/Y");
									$todayfull = explode("/", $today);
									$gettoday = end($todayfull);
									$age = $gettoday - $getdate;
									
									if( $pid % 2 == 0 )
										{
											//echo "Put cyan <hr />";
											?>
											<tr>
												<td style="background-color: cyan;text-align: center;"><?php echo $prid; ?></td>
												<td style="background-color: cyan;text-align: center;"><?php echo $firstname; ?></td>
												<td style="background-color: cyan;text-align: center;"><?php echo $surname; ?></td>
												<td style="background-color: cyan;text-align: center;"><?php echo $age; ?></td>
												<td style="background-color: cyan;text-align: center;"><?php echo $gender; ?></td>
												<td style="background-color: cyan;text-align: center;"><?php echo $county; ?></td>
											</tr>
											<?php
										}
										else
										{
											//echo "Put none <hr />";
											?>
											<tr>
												<td style="background-color: #FFF;text-align: center;"><?php echo $prid; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $firstname; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $surname; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $age; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $gender; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $county; ?></td>
											</tr>
											<?php
										}
									

								}

							}
						}
						else{ echo "<h2>Connection to database not possible.</h2>"; }

					?>
				</tbody>
				<tfoot>
					
				</tfoot>
			</table>

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