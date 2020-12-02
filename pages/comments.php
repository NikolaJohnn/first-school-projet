<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
if(!login())
{
	echo "Nemate pravo pristupa ovoj stranici<br>Vratite se na početnu!!<br>";
	echo "<a href='../index.php'>Početna</a>";
	exit();
}
if($_SESSION['users_status']!="Administrator" AND $_SESSION['users_status']!="Menadžer")
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
    <script src="../jscript/slideshow.js"></script>
    <script src="../jscript/_search.js"></script>
    <title>BorisTech | Komentari</title>
</head>
<body>
    
    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->
    <?php
                if(isset($_GET['funkcija']) AND isset($_GET['idKomentara']))
                {
                    $funkcija=$_GET['funkcija'];
                    $id=$_GET['idKomentara'];
                    if($funkcija=="dozvoli")
                    {
                        $upit="UPDATE comments SET aproved=2 WHERE comments_id=$id";
                        $db->query($upit);
                        Log::upisiLog("../logs/odobravanja.txt", "{$_SESSION['users_name']} je dozvolio komentar broj $id");
                    } 
                    else
                    {
                        $upit="DELETE FROM comments WHERE comments_id=$id";
                        $db->query($upit);
                        Log::upisiLog("../logs/odobravanja.txt", "{$_SESSION['users_name']} je obrisao komentar broj $id");
                    }
                        
                    
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
            <h2>Komentari koji treba da se odobre / obrišu</h2>
            <?php
            $query="SELECT * FROM comments WHERE aproved=1 ORDER BY comment_time DESC";
            $result=$db->query($query);
            if($db->num_rows($result)!=0)
            {
                while($row=$db->fetch_object($result))
                {
                    echo "<div class='commentsView'>";
                        echo "<p><b>$row->users_name</b> - $row->comment_time</p> ";
                        echo "<p>$row->comment</p>";
                        echo "<a href='comments.php?funkcija=dozvoli&idKomentara=$row->comments_id'>odobri</a>  <a href='comments.php?funkcija=dozvoli&idKomentara=$row->comments_id'>obriši</a>";
                     echo "</div>";
                }
            }
            else
                echo "Nemate nijedan komentar za odobravanje";
                    
           ?>
           <hr>
           <h2>Odobreni komentari</h2>
           <?php
            $query="SELECT * FROM comments WHERE aproved=2  ORDER BY comment_time DESC";
            $result=$db->query($query);
               while($row=$db->fetch_object($result))
                {
                    echo "<div class='commentsView'>";
                        echo "<p><b>$row->users_name</b> - $row->comment_time</p> ";
                        echo "<p>$row->comment</p>";
                     echo "</div>";
                }
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