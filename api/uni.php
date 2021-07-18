<!DOCTYPE html>
<html>
<head>
	<html lang="uk">
    <title>Universities</title>
	<link rel ="icon" href="images/icon1.png" type="image/x-icon"
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/uni.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

</head>
<body>
<header>
        <h1 align='center'>Abitga</h1>
        <h2 align='center'> Допомога абітуріентам по всій Україні!</h2>
        </header>





<p class ="choice">
Ви вибрали :
		
<?php
//$uni = $_POST["list"];

$uni = htmlspecialchars_decode($_POST["uni"]);
echo "$uni<br>";

?>
</p>


<?php
$connection = mysqli_connect('localhost','id17191817_lerazip', '{K?GEMB_|bN0%!Q]','id17191817_unicersities');

	
if($connection == false)
{
	echo 'Couldn`t connect <br>';
	echo mysqli_connect_error();
	exit();
}

$result = mysqli_query($connection, "SELECT * FROM `uni` WHERE `university` = '$uni'");
 
$r1 = mysqli_fetch_assoc($result);
//print_r($r1); //delete it later
?>
<p class = "category">
Код університета(інституту):
<?php
echo $r1['id'];
?>
</p>
<p class = "category">
Місезнаходження:
<?php
echo $r1['City'];
?>
</p>

































<?php
mysqli_close($connection);
?>








</body>
</html>