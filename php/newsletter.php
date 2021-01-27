<?php
//Extract values from textbox
$email=$_POST['email'];
//Database connectivity
	$connection=mysqli_connect("localhost", "root", "") or die ("cannot connect server");
	echo "Connection Established <br>";
	
	//select database
	
	$db_select = mysqli_select_db($connection, 'contact');
		if (!$db_select) 
		{
				die("Database selection failed: " . mysqli_error($connection));
		}

	//write query         //name of columns in database          //variables declared above
	$query="insert into newsletter (email) values ('$email')";

	//execute query
	$result=mysqli_query($connection,$query);
	
	//check if query is executed or not
	if(!$result)
	{
		die("Connection lost".mysqli_error($connection));
	}
	else
	{
		echo "Data Inserted! ";
		echo "<script>alert('Thank You for Subscribing !');window.location.href='index.php';</script>";
	}
	mysqli_close($connection);
	
//Database connectivity
?> 