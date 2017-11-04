<?php
$user = 'root';
$pass = '';
$db = 'testdb';
$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");//create connect
//select db
//mysqli_select_db('testdb');
$sql = "SELECT * FROM person";
$records = mysqli_query($con,$sql);
?>
<html>
<body background="sample/r.jpg">
   <style>
   body{
   color:white;
   }
   h3{
   color:pink;
   }
   h4{
   color:red;
   }
   </style>
                    <table>
                        <tr>
                            <td>
                                <img src="http://fourscape.com/wp-content/uploads/2015/09/taj-hotels.jpg" style="width:80%; height:60%">
                            </td>
                            
                           <td><center><h1>
                                WELCOME TO TAJ<br>
                                Quintessentially Indian in its fabric<br>
                                Taj Hotels Palaces Resorts Safaris for<br>delivering a unique flavour of hospitality 
                        </h1> </center>   </td>
                        </tr>
                    </table>

          
                    <table>
                        <tr>
                            <td><h3>
                                BANGALORE
THE TAJ WEST END<br>
Race Course Road,<br>
Bangalore ,
Karnataka 560 001
India<br></h3>
                            </td>
                            </tr>
                    </table>
					
            <tr><h4>
                <td>
                    BILL
                </td>
                
                <td>
                    Check #
                </td>
            </h4></tr>
            
           
<table border="1" width="600" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Booking_Id</th>
<th>Room no</th>
<th>No of people</th>
<th>Entertainment</th>
<th>Luxury</th>
<th>GST</th>
<th>Total</th>
</tr>
<?php
while($person=mysqli_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$person['Name']."</td>";
	echo "<td>".$person['E_mail']."</td>";
	echo "<td>".$person['a']."</td>";
	echo "<td>".$person['b']."</td>";
	echo "<td>".$person['c']."</td>";
	echo "<td>".$person['d']."</td>";
	echo "<td>".$person['e']."</td>";
	echo "<td>".$person['f']."</td>";
	echo "<td>".$person['g']."</td>";
	echo "</tr>";
	}
?>
</table>

</body>
</html>