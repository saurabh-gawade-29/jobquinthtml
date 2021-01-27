<?php
//Extract values from textbox

$name=$_POST['name'];    //name of textbox
$email=$_POST['email'];
$message=$_POST['message'];

//Database connectivity
	$connection=mysqli_connect("localhost", "root", "") or die ("cannot connect server");
	//
	echo "Connection Established <br>";
	
	//select database
	
	$db_select = mysqli_select_db($connection, 'contact');
		if (!$db_select) 
		{
				die("Database selection failed: " . mysqli_error($connection));
		}

	//write query         //name of columns in database          //variables declared above
	$query="insert into contactus (name,email,message) values ('$name','$email','$message')";

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
		header('location:contact.html');
	}
	mysqli_close($connection);
//Database connectivity
?>