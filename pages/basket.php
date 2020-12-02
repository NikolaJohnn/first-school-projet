<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
$message="";
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/icons/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.js"></script>
    <script src="../jscript/jquery-3.5.0.js"></script>
    <script src="../jscript/slideshow.js"></script>
    <script src="../jscript/_search.js"></script>
    <title>BorisTech | Korpa</title>
</head>
<body>
    
    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->
    <?php
                if(isset($_GET['funkcija']))
                {
                    $function=$_GET['funkcija'];
                    $sql="UPDATE basket SET accepted=2 WHERE accepted=1 AND users_id='{$_SESSION['users_id']}'";
                    $db->query($sql);
                    Log::upisiLog("../logs/kupovine.txt", "{$_SESSION['users_name']} je uspešno izvršio kupovinu");
                }
                elseif(isset($_GET['id'])) 
                { 
                    $id=$_GET['id'];
                    $sql="DELETE FROM basket WHERE accepted=1 AND basket_id='{$id}'";
                    $db->query($sql);
                    Log::upisiLog("../logs/kupovine.txt", "{$_SESSION['users_name']} je obrisao proizvod iz kupovine");
                }
    ?>

    <!-- navigation of categories and navigation for login-->
        <?php
            include("navigation.php");
        ?>
          
    <!-- end of navigation of categories and navigation for login-->

    <!-- main of onlineShopTerms -->
    <div id="basket_page">
        <div class="wrapper">
            <h2>Korpa</h2>
            <?php
            $query="SELECT * FROM orders WHERE accepted=1 AND users_id='{$_SESSION['users_id']}'";
            $result=$db->query($query);
            echo "<div id='basket'>";
            if($db->num_rows($result)!=0)
            {
               echo "<div class='table'>";
               echo  "<table border='1'>";
               echo "<tr>";   
                    echo "<th>Slika proizvoda</th>";
                    echo "<th>Kategorija</th>";
                    echo "<th>Proizvod</th>";
                    echo "<th>Vreme kupovine</th>"; 
                    echo "<th>Cena</th>";
                    echo "<th></th>";
                echo "</tr>";
                    
               while($row=$db->fetch_object($result))
                {  
                    echo "<tr>";    
                       echo "<td><img src='../pics/$row->specification_id,v.jpg'></td>";
                       echo "<td>$row->category</td>"; 
                       echo "<td>$row->products_brand $row->products_model</td>"; 
                       echo "<td>$row->shop_time</td>"; 
                       echo "<td>$row->price</td>";
                       echo "<td><a href='basket.php?id=$rouw->basket_id'>Ukloni</a></td>";
                       echo "</tr>";         
                            
                        
                 
                } 
                    
                echo "</table>";

                    $sql="SELECT SUM(price) AS sum FROM orders WHERE users_id='{$_SESSION['users_id']}' AND accepted=1";
                    $res=$db->query($sql);
                    $red=$db->fetch_object($res);
                    echo "<h3>Ukupna cena porudžbine: <b>".$red->sum." RSD</b></h3>";
                    echo "<p><a href='basket.php?funkcija=poruci'>Poručite</a></p>";
                echo "</div>";
                
                $sql="SELECT * FROM users WHERE  users_id='{$_SESSION['users_id']}'";
                $res=$db->query($sql);
                $rouw=$db->fetch_object($res);
                echo "<div class='basket'>";
                    echo "<h3>Podaci za dostavu</h3>";
                    echo "<b>Ime:</b> ".$rouw->users_name."<br>";
                    echo "<b>Prezime:</b> ".$rouw->users_lastname."<br>";
                    echo "<b>E-mail:</b> ".$rouw->users_email."<br>";
                    echo "<b>Adresa:</b> ".$rouw->users_addres."<br>";
                    echo "<b>Telefon:</b> ".$rouw->users_phone."<br>";
                    echo "</div>";
            }
            else
                echo "Nemate nijedan proizvod u korpi!!";
            echo "</div>";

            
            

                
           ?>
           <hr>
           <h2>Kupljeni proizvodi</h2>
           <?php
            $query="SELECT * FROM orders WHERE accepted=2 AND users_id='{$_SESSION['users_id']}' ORDER BY shop_time DESC";
            $result=$db->query($query);
            echo "<div id='basket'>";
               while($row=$db->fetch_object($result))
                {
                    echo "<div class='ordered'>";
                        echo "<div class='orderedImg'><img src='../pics/$row->specification_id,v.jpg'></div><br>";
                        echo "<b>Datum porudžbine:</b> ".$row->shop_time."<br>";
                        echo "<b>Broj porudžbine:</b> ".$row->basket_id."<br>";
                        echo "<b>Cena:</b> ".$row->price."<br>";
                        echo "<b>Proizvod:</b> ".$row->products_brand." ".$row->products_model."<br>";
                    echo "</div>";
                }
            echo "</div>";
           ?>
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