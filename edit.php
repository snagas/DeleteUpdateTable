<?php

//aprasome connection
$con=mysqli_connect('localhost', 'root', '');
//nurodome savo db pavadinima kai vyks connectionas
$db=mysqli_select_db($con, 'wordpress' );

/*
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
*/


if ($db==false)
    die (mysqli_error($con));

echo '<p> AS CIAAAAAAAAAAAAAAAA</p>';

echo 'Succescul CONECTION !!!!!!!!!!!!!'

?>