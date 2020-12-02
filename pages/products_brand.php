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

    <!-- main products-->
    <main id="main">
            <?php
                $category=$_GET['kategorija'];
                $brand=$_GET['brand']; 
                    
                $query="SELECT * FROM specification WHERE category='{$category}' AND products_brand='{$brand}'";
                    $result=$db->query($query);
                    echo "<p class='brand'><a href='../index.php'>Početna strana</a> / <a href='products.php?kategorija=$category'>$category</a> / $brand</p>"; 
                    echo "<h2>$category</h2>";
                    echo  "<div class='wrapper'>";
                    while($row=$db->fetch_object($result)) 
                    {
                        
                            echo "<div class='product'>";
                            echo "<img src='../pics/$row->specification_id,v.jpg' alt=''>";
                            echo "<p>$row->products_brand $row->products_model</p>";
                            echo "<p class='price'>$row->price RSD</p>";
                            echo "<p class='viewMore'><a href='productinfo.php?kategorija=$category&sifraProizvoda=$row->specification_id'>Saznajte više&nbsp;&raquo;</a></p>";
                            echo "</div>";
                        
                    } 
                    echo "</div>";
            ?>
</main>
    <!-- main products-->

    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>