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
    <script src="../jscript/jquery-3.5.0.js"></script>
    <script src="../jscript/slideshow.js"></script>
	<script src="../jscript/productinfo.js"></script>
    <script src="../jscript/_search.js"></script>
    <title>BorisTech | Proizvod</title>
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
            $id=$_GET['sifraProizvoda'];
            $function=$_GET['funkcija'];
            if(!login())
            {
                echo "<div class='imgChangeOne'";
                echo "<p><span style='font-size: 18px; color: red; font-weigth: 900;'>Morate biti ulogovani da biste mogli da poručujete!</span></p>";
                echo "</div>";
            }
            else
            {
                $upit="SELECT * FROM users, specification WHERE users_id='{$_SESSION['users_id']}' AND specification_id='{$id}'";
                $rez=$db->query($upit);
                $red=$db->fetch_object($rez);
                $users_id=$_SESSION['users_id'];
                $users_name=$red->users_name;
                $users_lastname=$red->users_lastname;
                $users_email=$red->users_email;
                $users_addres=$red->users_addres;
                $users_phone=$red->users_phone;
                $brand=$red->products_brand;
                $model=$red->products_model;
                if($function=="basket")
                {
                    $insert="INSERT INTO basket (users_id, users_name, users_lastname, users_email, users_addres, users_phone, products_brand, products_model ) VALUES ('{$users_id}', '{$users_name}', '{$users_lastname}', '{$red->users_email}', '{$users_addres}', '{$users_phone}', '{$brand}','{$model}') ";
                    $db->query($insert);
                    Log::upisiLog("../logs/korpa.txt", "{$_SESSION['users_name']} čiji je ID  {$_SESSION['users_id']} je dodao u korpu proizvod {$brand} {$model}");
                }   
            }
            
            
        }
        ?>

    <!-- navigation of categories and navigation for login-->
        <?php
            include("navigation.php");
        ?>
          
    <!-- end of navigation of categories and navigation for login-->

    <!-- main of productinfo-->
        <div id="productInfo">
            <?php
                $id=$_GET['sifraProizvoda']; 
                $category=$_GET['kategorija'];

                $query="SELECT * FROM specification WHERE category='{$category}' AND specification_id='{$id}'";
                $result=$db->query($query);
                $row=$db->fetch_object($result); 
                echo  "<div class='wrapper'>";
                    echo "<p><span><a href='../index.php'>Početna strana</a>&nbsp; / &nbsp;<a href='products.php?kategorija=$category'>$category</a></p>";
                    echo "<div class='info'>";
                    
                    
                         echo "<div class='infoImg'>";
                                echo "<img class='info_Img' src='../pics/$row->specification_id,v.jpg' alt='#'>";
                            echo "</div>";

                            echo "<div class='infotext'>";

                                echo "<h2>$row->products_brand $row->products_model</h2>";
                                echo "<p><b>Šifra: $id</b></p>";
                                echo "<ul>";
                                    echo "<li>Dimenzije (ŠxV): $row->dimension</li>";
                                    echo "<li>Boja: $row->color</li>";
                                    echo "<li>Težina: $row->weight</li>";
                                echo "</ul>";
                            echo "<h1>$row->price RSD</h1>";
                            echo "<p class='delivery'>+ besplatna dostava</p>";
                            echo "<div class='order'><a href='productinfo.php?kategorija=$category&sifraProizvoda=$row->specification_id&funkcija=basket'><i class='fas fa-shopping-cart'></i> Dodaj u korpu</a></div>";
                            echo "</div>";
                    
                    echo "</div>";

                    //small picture that changing main on click(jquery)
                   echo "<div class='imgChange'>";

                        echo  "<div class='imgChangeOne'>";
                            echo "<img class='imgChange_One' src='../pics/$row->specification_id,v.jpg' alt='#'>";
                        echo "</div>";

                        echo "<div class='imgChangeTwo'>";
                            echo "<img class='imgChange_Two' src='../pics/$row->specification_id,m.jpg' alt='#'>";
                        echo "</div>";
                        

                    echo "</div>";
            ?>
        </div>
    <!-- end of main of productinfo -->

    <!-- Specification and comments-->
    <div id="specCommentsOnClick">
        <div class="wrapper">
            <div class="spec"><p>Specifikacije</p></div>
           <?php 
                $sql="SELECT * FROM comments WHERE specification_specification_id='{$id}' AND aproved=2";
                $res=$db->query($sql);
                $rouw=$db->fetch_object($result);
                echo "<div class='comment'><p>Komentari (".$db->num_rows($res).")</p></div>";
            ?>
        </div>
    </div>
    <div id="SpecComments">
        <div class="wrapper">
                
            <div class="specInfo">
                   <?php
                    
                    include("../php/_productinfo.php");
                    
                    ?>
                    
            </div>
            <div class="commentsInfo">
                <!-- form for insert comments for products -->
                <form action="#"  method="post">
                    <p>Unesite Vaše ime*</p>
                    <input type="text" name="users_name">
                    <p>Unesite komentar* ( Maksimalno 200 karaktera )</p>
                    <textarea name="comment" id="comment" cols="100" rows="4"></textarea><br>
                    <button name="button" id="button">Pošalji</button>
                </form><br>
                <p>*Napomena- Komentar će postati vidljiv nakon što ga odobri Administrator.</p>
                <!-- sql query for inserting comments  -->
            <?php
            if(isset($_POST['users_name']) and isset($_POST['comment']))
            {
                $users_name=$_POST['users_name'];
                $comment=$_POST['comment'];
                if($users_name!="" and $comment!="")
                {
                    $ask="INSERT INTO comments (specification_specification_id, comment, users_name) VALUES ('{$id}','{$comment}','{$users_name}')";
                    $db->query($ask);
                    Log::upisiLog("../logs/komentari.txt", "{$users_name} je postavio sledeći komentar: {$comment}");
                }
                else $message="Svi podaci su obavezni!!!!";
            }
             ?>
                 <!-- sql query for inserting comments from form -->

                <!-- sql query for comments that is equal of product ID and aproved from Administrator on web page-->
                    <?php
                        $query="SELECT * FROM comments WHERE specification_specification_id='{$id}' AND aproved=2 ORDER BY comment_time DESC";
                        $result=$db->query($query);
                        while($row=$db->fetch_object($result))
                        {
                            echo "<div class='commentsView'>";
                            echo "<p><b>$row->users_name</b> - $row->comment_time</p> ";
                            echo "<p>$row->comment</p>";
                            echo "</div>";
                        }
                    ?>
                 <!--end of sql query for comments -->   
            </div>
        </div>
     </div>      
    
    <!-- end of Specification and comments-->

    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>