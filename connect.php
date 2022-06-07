<?php

	if(isset($_POST["submit"]))
	{
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$gender=$_POST["gender"];
		$college=$_POST["college"];
		$dob=date("Y-m-d",strtotime($_POST["dob"]));
		$email=$_POST["email"];
		$areacode=$_POST["areacode"];
		$phone=$_POST["phone"];
		$department=$_POST["department"];
		$semester=$_POST["semester"];
		$outdoors=$_POST["outdoors"];
		$outdoor="";
		$indoors=$_POST["indoors"];
		$indoor="";
		
		foreach($outdoors as $row)
		{
			$outdoor .= "$row,";
		}
		
		foreach($indoors as $row)
		{
			$indoor .= "$row,";
		}
		
		if(empty($firstname) or empty($lastname) or empty($college) or empty($dob) or empty($email) or empty($areacode) or empty($phone) or empty($department) or empty($semester) or empty($outdoor) or empty($indoor))
		{
			echo
			"
				<script> alert('some data missing please fill it ....!!!!') </script>
			";
			//header("Location: http://localhost/49/registration.php"); 
			echo '<script>window.location.href = "http://localhost/49/registration.php";</script>';
		}
		else
		{

			$conn=mysqli_connect("localhost","root","","mproject");
			if(!$conn)
			{
				die("Connection Failed...." .mysqli_connect_error());
			}
		
			$query="INSERT INTO registration VALUES('','$firstname','$lastname','$gender','$college','$dob','$email','$areacode','$phone','$department','$semester','$outdoor','$indoor')";
			// echo "\n ".$query;
			mysqli_query($conn,$query);
			echo
			"
				<script> alert('Data Registration Successfully done...') </script>
			";	
			echo '<script>window.location.href = "http://localhost/ick-project/registration.php";</script>';
			mysqli_close($conn);
		}
		
	}
?>