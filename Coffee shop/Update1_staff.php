<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Staff") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$Staff_id1 = $_POST['Staff_id1'];
	@$Username1 = $_POST['Username1'];
	@$Password1 = $_POST['Password1'];
	@$Phonenumber1 = $_POST['Phonenumber1'];
	@$Gender1 = $_POST['Gender1'];

	if($sname && $Username1)
	{
		$change = mysqli_query($connect , "UPDATE `Staff` SET `Username`='$Username1' WHERE `Staff_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}
	if($sname && $Password1)
	{
		$change = mysqli_query($connect , "UPDATE `Staff` SET `Password`='$Password1' WHERE `Staff_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}
	if($sname && $Phonenumber1)
	{
		$change = mysqli_query($connect , "UPDATE `Staff` SET `Phonenumber`='$Phonenumber1' WHERE `Staff_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}
	if($sname && $Gender1)
	{
		$change = mysqli_query($connect , "UPDATE `Staff` SET `Phonenumber`='$Gender1' WHERE `Staff_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}

?>
