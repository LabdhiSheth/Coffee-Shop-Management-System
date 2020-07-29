<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Product") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$name1 = $_POST['$name1'];
	@$type1 = $_POST['$type1'];
	@$price1 = $_POST['$price1'];

	if($sname && $name1)
	{
		$change = mysqli_query($connect , "UPDATE `Product` SET `name`='$name1' WHERE `Product_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='product.php'>Back</a></button>";
	}
	if($sname && $type1)
	{
		$change = mysqli_query($connect , "UPDATE `Product` SET `type`='$type1' WHERE `Product_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='product.php'>Back</a></button>";
	}
	if($sname && $price1)
	{
		$change = mysqli_query($connect , "UPDATE `Product` SET `price`='$price1' WHERE `Product_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='product.php'>Back</a></button>";
	}

?>
