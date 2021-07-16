<!DOCTYPE html>
<html>
<head>
	<html lang="uk">
    <title>Abitga</title>
	<link rel ="icon" href="images/icon1.png" type="image/x-icon"
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/univerlist.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <h1 align='center'>Abitga</h1>
        <h2 align='center'> Допомога абітуріентам по всій Україні!</h2>
        </header>

                    
            <main>
			<form name="test" method="post" action="uni.php">
			<h3><b>Назва ВНЗ(АБРЕВІАТУРА):</b>
			<ul class="textbox">
				<input name = "uni" type="text">
				</ul></h3>
				<ul class="choose">
				<input type="submit" value="ОБРАТИ">
				</ul>
				</form>
				
				<p class = "listname">СПИСОК ВНЗ</p>
				<p style="float: left; background-color:powderblue;" class = "columns"> АБРЕВІАТУРА</p>
				<p style="float: right;background-color:#E5D9F2;" class = "columns"> ПОВНА НАЗВА</p>
				<p> </br> <p>
				<p> </br> <p>
				<p> </br> <p>

				<?php
				$connection = mysqli_connect('localhost','id17191817_lerazip', '{K?GEMB_|bN0%!Q]','id17191817_unicersities');
if($connection == false)
{
	echo 'Couldn`t connect <br>';
	echo mysqli_connect_error();
	exit();
}
//$result = mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` = 3");
$result = mysqli_query($connection, "SELECT `University` FROM `uni`");
$result1 = mysqli_query($connection, "SELECT `Fool_name` FROM `uni`");
$record1 = mysqli_fetch_assoc($result1);
$r = mysqli_fetch_assoc($result);
while(($record = mysqli_fetch_assoc($result)) && ($record1 = mysqli_fetch_assoc($result1)) )
{?>
	<p style="float: left; background-color:powderblue;" class = "abreviations1">
	<?php
	echo $record['University'];
	?>

	</p>

	<p style="float: right; background-color:pink;" class = "abreviations2">

	<?php
	echo $record1['Fool_name'];
	?>
	<p> </br> <p>
				</p>

<?php } ?>

				<form method="post" action="index.php">
				<ul class="nav">
				<p><input type="submit" name = "list" value="ГОЛОВНА СТОРІНКА"></p>
				</ul>
				</form>




				

				
				
				
				
				
				
				
				
	</main>
	</body>
	</html>