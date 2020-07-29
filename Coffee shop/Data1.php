<?php
echo "
<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
";

@$Cust_id = $_POST['Cust_id'];
@$qty1 = $_POST['qty1'];
@$PPP = $_POST['PPP'];
@$Price = $_POST['Price'];
@$Offer_amount = $_POST['Offer_amount'];
@$add = $_POST['submit1'];

@$submit = $_POST['submit'];
@$connect = mysqli_connect("localhost","root","","Customer") or die("couldn't connect");

if($add)
{
	@$query = mysqli_query($connect,"INSERT INTO `Customer` (`Cust_id`,`Quantity`,`Offer_amount`,`PPP`,`Price`) VALUES ('$Cust_id','$qty1','$Offer_amount','$PPP','$Price')");

	@$query2 = mysqli_query($connect,"SELECT * FROM `Customer` WHERE `Cust_id`='$Cust_id'");

	while (@$row = mysqli_fetch_assoc(@$query2)) {
	    @$dbquantity =$row['Quantity'];
	}
	@$dbquantity = $dbquantity - $qty1;
	@$query1 = mysqli_query($connect,"UPDATE `Customer` SET `Quantity`='$dbquantity' WHERE `Cust_id` ='$Cust_id' ");

	@$query3 = mysqli_query($connect,"SELECT * FROM `Customer` WHERE `Cust_id`='$Cust_id'");

	while (@$row = mysqli_fetch_assoc(@$query3)) {
		@$dbpps = $row['PPS'];
	}
	@$dbpps = ($dbpps * $qty1)-$Offer_amount;
	@$query1 = mysqli_query($connect,"UPDATE `Customer` SET `Price`='$dbpps' WHERE `Cust_id` ='$Cust_id'");
	echo "Succesfully added .....please  go <a href='Data.php'>back</a>";
}
if($submit)
{

	@$query4 = mysqli_query($connect,"SELECT * FROM `Customer`");
	echo "<h3><table>";
	echo "<tr>
			<td>
			    Cust_id
			</td>

			<td>
			  	Offer_amount
			</td>
			<td>
			  	PPP
			</td>
			<td>
			  	Price
			</td>
	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query4))
	{
		@$dbcustid = $row['Cust_id'];
		@$dbqty1 = $row['qty1'];
		@$dbOffer_amount = $row['Offer_amount'];
		@$dbPPP = $row['PPP'];
		@$dbprice = $row['Price'];
		echo "

		<tr>
			<td>
				$dbcustid
			</td>

			<td>
				$dbOffer_amount
			</td>
			<td>
				$dbPPP
			</td>
			<td>
				$dbprice
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
}
echo "</body>
</html>";
?>
