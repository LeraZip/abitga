<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<html lang="uk">
    <title>Abitga</title>
	<script src="scripts/script.js"></script>
	<link rel ="icon" href="images/icon1.png" type="image/x-icon">
    <meta charset="UTF-8">
    
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

</head>
<style>







.nav:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s;
}

.nav:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s;
}


</style>
<body>
    <header>
        <h1 align='center'>Abitga</h1>
        <h2 align='center'> Допомога абітуріентам по всій Україні!</h2>
        </header>

                    
            <main>
                <img src="images/graduation.png">
                <p class="one" align='center'>ТРОХИ ПРО САЙТ І МЕНЕ</p>
                <p class="about" align='adjust' >Я такий самий абітуріет як і ви, який шукав усю необхідну інформацію всюди по інтернету. Я хочу допомогти вам усім та додати вам часу у цей непростий час. Тут буде інформація про необхідні предмети, коефіціенти та вірогідність вступити у омріяний заклад, якщо такий є.</br> </br>
                Уся неточна або знайдена не в офіційних джерелах інформація буде мати знак: &#9746;</p>

				
				<form method="post" action="univerlist.php">
				<button class="nav" align = "left" type="submit" name = "list">СПИСОК ВНЗ</button>
				</form>
				
				
				
				<form method="post" action="popit.php">
				<button class="nav" align = "right" type="submit" name = "list">JUST CHILL</button>
				</form>
				
				

			<?php 
			?>
				
				
				
				
				
			</main>
			
            <footer>
				<p class="find"> Find me on social medias </p>
				<a href = "https://www.instagram.com/lera_zip/"> 
				<img class = "inst" src="images/instagram-brands.svg">
				</a>
				<a href = "https://www.facebook.com/lera.zip.5/"> 
				<img class = "face" src="images/facebook-brands.svg">
				</a>
				<p class = "thx"> With help of Sonya Solowey:</p>
				<a href = "https://www.instagram.com/_sonya_solowey_/"> 
				<img class = "insts" src="images/instagram-brands.svg">
				</a>
            </footer>
</body>
</html>