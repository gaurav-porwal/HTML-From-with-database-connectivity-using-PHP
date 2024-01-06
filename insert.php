<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$con=mysqli_connect('localhost','gauravporwal','gauravporwal');
mysqli_select_db($con,'gauravporwal');
$q="insert into new_table (name,email,mobile,address) values ('$name','$email','$mobile','$address')";
$i=mysqli_query($con,$q);
echo "Thank You!!!";
mysqli_close($con);
?>