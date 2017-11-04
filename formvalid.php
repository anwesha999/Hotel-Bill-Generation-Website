<html>
<head>
</head>
<body> 
<?php
$user = 'root';
$pass = '';
$db = 'testdb';
$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
echo"HURRAH!!!!";
$Name=$_POST['username'];
$E_mail=$_POST['email'];
//$Website = $_POST['website'];
//$Comment = $_POST['comment'];
//$Gender = $_POST['gender'];
$Booking_Id=$_POST['a'];
$Room_no=$_POST['b'];
$No_of_people=$_POST['c']; //Booking_Id,Room_no,No_of_people,Entertainment,Luxury,GST,Total:
$Entertainment=$_POST['d'];
$Luxury=$_POST['e'];
$GST=$_POST['f'];
$Total=$_POST['g'];


$sql = "INSERT INTO person (Name,E_mail,a,b,c,d,e,f,g) VALUES ('$Name','$E_mail','$Booking_Id','$Room_no','$No_of_people','$Entertainment','$Luxury','$GST','$Total')";
//Name,E_mail,Website,Comment,Gender....are fields in table person which is in testdb database


if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
	echo "INSERTed suceessfully";
}

header("refresh:2; url=display.php");

?>
 
</body>
</html>