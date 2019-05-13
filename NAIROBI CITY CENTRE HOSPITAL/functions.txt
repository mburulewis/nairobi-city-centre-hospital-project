$("document").ready(function()
		{
			$(".send").on("click",function()
			{
				var patientid = $(".pid").val();
				var fname = $(".fname").val();
				var mname = $(".mname").val();
				var sname = $(".sname").val();
				var dob = $(".dob").val();
				var gender = $(".gen").val();
				var county = $(".county").val();
				var rezdiv = $(".results");
				if( patientid == "" || patientid == " " || patientid == 'undefined' || fname == "" || fname == " " || fname == 'undefined' || mname == "" || mname == " " || mname == 'undefined' || sname == "" || sname == " " || sname == 'undefined' || dob == "" || dob == " " || dob == 'undefined' || gender == "" || gender == " " || gender == 'undefined' || county == "" || county == " " || county == 'undefined' )
				{
					rezdiv.html("Ensure none of the fields is empty ...");
					$(".pid").css("border","2px solid red");
					$(".fname").css("border","2px solid red");
					$(".mname").css("border","2px solid red");
					$(".sname").css("border","2px solid red");
					$(".dob").css("border","2px solid red");
					$(".err").html(" Enter data ... ");
					return false;
				}
				else
				{
					rezdiv.html("Processing, please wait ...");
					$(".pid").css("border","2px solid black");
					$(".fname").css("border","2px solid black");
					$(".mname").css("border","2px solid black");
					$(".sname").css("border","2px solid black");
					$(".dob").css("border","2px solid black");
					$(".err").html("");

					$.post("talent.php",{'pid': patientid ,'fname': fname ,'mname': mname ,'sname': sname ,'dob': dob ,'gender': gender ,'county': county },function(data)
						{
							rezdiv.html(data);
						});
				}
				return false;
			});

			$(".kinsend").on("click",function()
							{ 
								var kinpid = $(".kinpid").val();
								var fname = $(".kinfname").val();
								var sname = $(".kinsname").val();
								var rel = $(".rel").val();
								var rezdiv = $(".results");
								if( kinpid == "" || kinpid == " " || kinpid == 'undefined' || fname == "" || fname == " " || fname == 'undefined' || sname == "" || sname == " " || sname == 'undefined' || rel == "" || rel == " " || rel == 'undefined' )
								{
									rezdiv.html("Ensure none of the fields is empty ...");
									$(".kinfname").css("border","2px solid red");
									$(".kinsname").css("border","2px solid red");
									$(".rel").css("border","2px solid red");
									$(".err").html(" Enter data ... ");
									return false;
								}
								else
								{
									rezdiv.html("Processing, please wait ...");
									$(".kinfname").css("border","2px solid black");
									$(".kinsname").css("border","2px solid black");
									$(".rel").css("border","2px solid black");
									$(".err").html("");
									
									$.post("kin.php",{'kinpid': kinpid ,'kinfname': fname ,'kinsname': sname ,'rel': rel },function(data)
										{
											rezdiv.html(data);
										});
								}
								return false;
							});

			$(".uform").on("submit",function(){ return false; });

		});

