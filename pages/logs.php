<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
$db=new Baza();
$db->connect();
$poruka="";
if(!login())
{
	echo "Nemate pravo pristupa ovoj stranici<br>Vratite se na početnu!!<br>";
	echo "<a href='../index.php'>Početna</a>";
	exit();
}
if($_SESSION['users_status']!="Administrator")
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
    <title>BorisTech | Logovi</title>
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
    <!-- logIn and registration forms-->
    <div id="users">
		<div class="wrapper">
		<h1>LOGOVI</h1>
		</div>
	</div>
    <!--end central1-->

    <!--forms-->
    <div id="logs">
		<div class="wrapper">
			<div class="logs">
            <form action="logs.php" method="post" >
                <select name="logovi" id="logovi">
                    <option value="0">--Izaberite log fajl--</option>
                    <option value="korisnici.txt">Korisnici</option>
                    <option value="kupovine.txt">Kupovine</option>
                    <option value="logovanja.txt">Logovanja</option>
                    <option value="proizvodi.txt">Proizvodi</option>
                    <option value="komentari.txt">Komentari</option>
                    <option value="korpa.txt">Korpa</option>
                    <option value="odobravanja.txt">Odobravanja</option>
                </select><br><br>
                <button name="dugme">Prikaži</button>
            </form>
                <br><br>
        <?php
			if(isset($_POST['logovi']) and $_POST['logovi']!="0")
			{
				$imeFajla="../logs/".$_POST['logovi'];
				if(file_exists($imeFajla))
				{
					$prikaz=file_get_contents($imeFajla);
					$prikaz=str_replace("\r\n", "<br>", $prikaz);
					echo $prikaz;
				}
				else echo "Ne postoji datoteka koju ste izabrali";
            }
		?>
            </div>
        </div>
	</div>
     
    <!--footer-->
    <?php
            include("footer.php");
        ?>
	<!--end footer-->
    
</body>
</html>