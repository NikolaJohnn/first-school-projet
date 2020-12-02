<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
$db=new Baza();
$db->connect();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/icons/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="../jscript/jquery-3.5.0.js"></script>
    <script src="../jscript/_search.js"></script>
	<script src="../jscript/slideshow.js"></script>
    <title>BorisTech | Kontakt</title>
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

    <!-- main of onlineShopTerms -->
    <div id="onlineShopTerms">
        <div class="wrapper">
            <div id="text">
            <h3>Call Centar</h3>
            <p><b>Telefon:</b> 069/538 24 77 (važi za pozive iz svih mreža)</p><br>
            <p><b>Email adresa:</b></p><br>
            <ul>
                <li><b>Fizička lica:</b>prodaja@boristech.rs</li>
                <li><b>Pravna lica:</b>corporate@boristech.rs</li>
            </ul><br>
            <p><b>Radno vreme Call Centra:</b> ponedeljak - petak od 8 do 20h; subota od 9 do 16h; nedelja neradni dan</p><br>
            <p>Putem Call Centra BorisTech možete da:</p><br>
            <ul>
                <li>izvršite naručivanje robe</li>
                <li>informišete se o načinima plaćanja, radnom vremenu i uslovima isporuke</li>
                <li>dobijete ostale informacije u vezi kupovine u BorisTech</li>
            </ul>
            <h3>Ponude</h3>
            <p>Ukoliko ste zainteresovani za poslovnu saradnju sa nama ili nudite određenu robu ili usluge, molimo Vas kontaktirajte nas na sledeći email: <b>ponude@boristech.rs</b> </p>
            <h3>Zaposlenje</h3>
            <p>Ukoliko želite da se pridružite timu BorisTech prijavite se za posao na email <b>posao@boristech.rs</b></p>
            </div>
        </div>
    </div>
    <!-- end of main of onlineShopTerms -->

    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>