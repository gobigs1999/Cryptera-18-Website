<?php
		$hostname='localhost';
        $username='id6736352_gobigs1999';
		$password='gobigs1999';

		try
		{
			$dbh = new PDO("mysql:host=$hostname;dbname=id6736352_v2", $username, $password );

			if ($dbh->connect_error)
			{
    			die("Connection failed: " . $dbh->connect_error);
			} 

			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "INSERT INTO new_participants (first,last,email,gender,college,course,dept,year,phone,Wk1,Wk2,Accomodations)
			VALUES ('".$_POST["firstName"]."','".$_POST["lastName"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["college"]."','".$_POST["course"]."','".$_POST["dept"]."','".$_POST["year"]."','".$_POST["phone"]."','".$_POST["Wk1"]."','".$_POST["Wk2"]."','".$_POST["Accomodations"]."')";
			if ($dbh->query($sql)) 
			{
				echo "<script type= 'text/javascript'>alert('Registration Successfull');</script>";
			}
			else
			{
				echo "<script type= 'text/javascript'>alert('Please try again later !');</script>";
			}

			$dbh = null;

			$URL="http://cryptera.xyz";
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

?>