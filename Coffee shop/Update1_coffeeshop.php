<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","CoffeeShop") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$Shop_id1 = $_POST['tochange'];
	@$Location1 = $_POST['Location1'];

	if($sname && $Location1)
	{
		$change = mysqli_query($connect , "UPDATE `CoffeeShop` SET `Location`='$Location1' WHERE `Shop_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='coffeeshop.php'>Back</a></button>";
	}

?>
