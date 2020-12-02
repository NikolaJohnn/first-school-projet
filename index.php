<?php
session_start();
require_once("php/function.php");
require_once("php/classBase.php");
$db=new Baza();
$db->connect();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icons/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="jscript/jquery-3.5.0.js"></script>
    <script src="jscript/slideshow.js"></script>
    <script src="jscript/search.js"></script>
    <title>Početna | BorisTech</title>
</head>
<body>

    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("pages/_header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->

    <!-- navigation of categories and navigation for login-->
        <?php
            include("pages/_navigation.php");
        ?>
          
    <!-- end of navigation of categories and navigation for login-->

    <!-- slideshow banner-->
        <?php
            include("pages/_slideshow.php");
        ?>
    <!-- end of slideshow banner-->

    <!-- main part where is all kind of products -->
        <?php
            include("pages/_central.php");
        ?>
    <!-- end of main part where is all kind of products -->

    <!--footer-->
        <?php
            include("pages/_footer.php");
        ?>
	<!--end footer-->
          
</body>
</html>