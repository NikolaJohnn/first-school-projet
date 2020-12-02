<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
$db=new Baza();
$db->connect();
$answer="";
if(!login())
{
	echo "Nemate pravo pristupa ovoj stranici<br>Vratite se na početnu!!<br>";
	echo "<a href='../index.php'>Početna</a>";
	exit();
}
if($_SESSION['users_status']!="Administrator" AND $_SESSION['users_status']!="Menadžer" AND $_SESSION['users_status']!="Prodavac")
{
    echo "Nemate pravo pristupa ovoj stranici<br>Vratite se na početnu!!<br>";
    echo "<a href='../index.php'>Početna</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/icons/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="../jscript/jquery-3.5.0.js"></script>
	<script src="../jscript/product_control.js"></script>
    <script src="../jscript/_search.js"></script>
    <title>BorisTech | Proizvodi</title>
</head>
<body>
    
    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->

    <!-- navigation of categories and navigation for login-->
        <?php
            include("navigation.php");
        ?>
          
    <!-- end of navigation of categories and navigation for login-->

    <!-- main of users -->
    
    <!-- end of main of users -->
    <div id="users">
		<div class="wrapper">
		<h1>UPRAVLJANJE PROIZVODIMA</h1>
		</div>
	</div>
    <!--end central1-->
    <!--forms-->
	<div id="servis">
		<div class="wrapper">
        <h2>Proizvodi</h2>
			<p>Izaberite proizvod za izmenu</p>
            <div id="korisnici"></div>
            
        <hr>
        <form action="#" method="POST" id="product_control_form" enctype="multipart/form-data" name="product_control_form">
            <input type="text" name="specification_id" id="specification_id" placeholder="ID proizvoda" disabled><br><br>
            <input type="text" name="category" id="category" placeholder="Unesite kategoriju"> *Ovo polje je obavezno<br><br>
            <input type="text" name="products_brand" id="products_brand" placeholder="Unesite brand proizvoda"> *Ovo polje je obavezno<br><br>
            <input type="text" name="products_model" id="products_model" placeholder="Unesite model proizvoda"> *Ovo polje je obavezno<br><br>
            <input type="text" name="price" id="price" placeholder="Unesite cenu proizvoda"> *Ovo polje je obavezno<br><br>
            <input type="text" name="dimension" id="dimension" placeholder="Unesite dimenzije proizvoda ŠxV"><br><br>
            <input type="text" name="weight" id="weight" placeholder="Unesite težinu proizvoda"><br><br>
            <input type="text" name="display" id="display" placeholder="Unesite vrstu displeja proizvoda"><br><br>
            <input type="text" name="resolution" id="resolution" placeholder="Unesite rezoluciju ekrana"><br><br>
            <input type="text" name="procesor" id="procesor" placeholder="Unesite procesor"><br><br>
            <input type="text" name="camera" id="camera" placeholder="Unesite vrstu kamere u px"><br><br>
            <input type="text" name="memory" id="memory" placeholder="Unesite veličinu interne memorije proizvoda"><br><br>
            <input type="text" name="ram_memory" id="ram_memory" placeholder="Unesite RAM memoriju proizvoda"><br><br>
            <input type="text" name="color" id="color" placeholder="Unesite boju"><br><br>
            <input type="text" name="system" id="system" placeholder="Unesite sistem koji proizvod koristi"><br><br>
            <input type="text" name="wifi" id="wifi" placeholder="Unesite WIFI sa DA ili NE"><br><br>
            <input type="text" name="usb" id="usb" placeholder="Unesite USB sa DA ili NE"><br><br>
            <input type="text" name="hdmi" id="hdmi" placeholder="Unesite HDMI sa DA ili NE"><br><br>
            <input type="text" name="chipset" id="chipset" placeholder="Unesite grafičku karticu"><br><br>
            <input type="text" name="keyboard" id="keyboard" placeholder="Unesite vrstu tastatute proizvoda"><br><br>
            <input type="text" name="power" id="power" placeholder="Unesite jačinu baterije ili napajanja"><br><br>
            <input type="text" name="motherboard" id="motherboard" placeholder="Unesite matičnu ploču"><br><br>
            <input type="text" name="other" id="other" placeholder="Ostale osobine"><br><br>
            <input type="file" name="mainImg" id="mainImg" > (Glavna slika)<br><br>
            <input type="file" name="otherImg" id="otherImg"> (Sporedna slika)<br><br>
            
        </form>
            
            <button id="clean">Očistite polja</button> <button id="record">Snimi proizvod</button> <button id="delete">Obriši proizvod</button><br><br>
        
    <div id="answer"></div>
        </div>
	</div>
    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->
          
</body>
</html>