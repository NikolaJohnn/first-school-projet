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
	<script src="../jscript/slideshow.js"></script>
    <script src="../jscript/_search.js"></script>
    <title>BorisTech | Načini plaćanja</title>
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
            <h1>Načini plaćanja</h1>
            
            <h3>INTERNET KUPOVINA</h3>
            <p><b>1. Plaćanje platnom karticom putem Interneta</b></p>
            <p>Porudžbinu možete platiti putem Interneta platnim karticama VISA, Maestro, MasterCard ili DinaCard koje podržavaju plaćanje preko Interneta.
            Proverite kod banke koja je karticu izdala da li Vaša kartica podržava plaćanje preko Interneta.</p><br>
            <p><b>2. Plaćanje pouzećem</b></p>
            <p>Kod plaćanja pouzećem porudžbinu plaćate prilikom isporuke i tada je moguće platiti:
            -Gotovinom
            -Čekovima mogućnost plaćanja na 12 rata bez kamate (prva rata ide odmah, a ostale narednih 11 meseci).</p><br>
            <p><b>3. Plaćanje preko računa</b></p>
            <p>Svoju porudžbinu možete platiti direktnom uplatom na račun BorisTech, uz obavezno navođenje odgovarajućeg poziva na broj koji se generiše prilikom naručivanja. Plaćanje možete izvršiti standardnom uplatnicom u bilo kojoj pošti ili banci, ili putem Interneta ako imate Internet pristup svom računu (web banking).</p>
           
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