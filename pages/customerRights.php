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
    <title>BorisTech | Prava potrošača</title>
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
            <h1>Prava potrošača prilikom kupovine preko interneta</h1>
            <p>Obaveštavamo vas da se prema Zakonu о zaštiti potrošača („Sl. glasnik RS“, br. 62/2014 i 6/2016 – dr. zakon), u daljem tekstu: Zakon, kupovina preko naše prodajne internet stranice www.boristech.rs smatra prodajom na daljinu.
            U slučaju prodaje na daljinu prodavac je dužan da u pisanoj formi, na mail koji je ostavljen prilikom kupovine, kupcu dostavi:</p><br>
            <ul>
                <li>obrazac za odustanak</li>
                <li>obaveštenje o prodavcu, pravu potrošača na odustanak od ugovora i dužnosti prodavca i kupca u slučaju realizacije prava na odustanak</li>
                <li>primerak ugovora o prodaji potpisanog od strane prodavca.</li>
            </ul><br>
            <p>U slučaju kupovine na daljinu prodavac nije dužan da kupcu izda fiskalni račun, a u skladu sa članom 2. stav 1. tačka 1) Uredbe o određivanju delatnosti kod čijeg obavljanja ne postoji obaveza evidentiranja prometa preko fiskalne kase („Službeni glasnik RS“, br. 61/10, 101/10, 94/11, 83/12, 59/13, 100/14), već sva prava potrošač može ostvariti na osnovu ugovora o prodaji na daljinu.
            Zakon za slučaj prodaje na daljinu ustanovljava pravo kupca, koji se smatra potrošačem (fizičko lice koje proizvod kupuje radi namirenja svojih individualnih potreba, a ne radi obavljanja profesionalne delatnosti), da odustane od ugovora u roku od 14 dana od dana kada mu je proizvod predat u državinu, odnosno u državinu lica koga je kupac odredio, a nije prevoznik. Prilikom odustanka kupac može, ali ne mora da navede razloge zbog kojih odustaje. Izjava o odustanku od ugovora proizvodi pravno dejstvo od dana kada je poslata trgovcu. <b>Izjava o odustanku mora biti svojeručno potpisana.</b>
            Kupac je dužan da proizvod vrati bez odlaganja, a najkasnije u roku od 14 dana od dana kada je poslao obrazac za odustanak. Po isteku roka od 14 dana od dana kada je poslao odustanak, proizvod se više ne može vratiti. <b>Troškove povraćaja robe kao i organizaciju transporta iste u slučaju odustanka snosi kupac.</b>
            Moguće je vratiti samo proizvode koji su neoštećeni i, po mogućnosti, u originalnoj ambalaži, sa svim dodacima i propratnom dokumentacijom (garantni list, uputstva, itd.).
            Po prijemu proizvoda, utvrdiće se da li je proizvod ispravan i neoštećen. Kupac odgovara za neispravnost ili oštećenje proizvoda koji su rezultat neadekvatnog rukovanja proizvodom, tj. kupac je isključivo odgovoran za umanjenu vrednost proizvoda koja nastane kao posledica rukovanja robom na način koji nije adekvatan, odnosno prevazilazi ono što je neophodno da bi se ustanovili njegova priroda, karakteristike i funkcionalnost. Ukoliko se utvrdi da je nastupila neispravnost ili oštećenje proizvoda krivicom kupca, odbiće se vraćanje cene i proizvod će mu biti vraćen na njegov trošak.
            Prodavac je u slučaju zakonitog odustanka od ugovora dužan da kupcu bez odlaganja vrati iznos koji je kupac platio po osnovu ugovora, a najkasnije u roku od 14 dana od dana kada je primio obrazac za odustanak. Prodavac može da odloži povraćaj sredstava dok ne dobije robu koja se vraća, ili dok kupac ne dostavi dokaz da je poslao robu Prodavcu u zavisnosti od toga šta nastupa prvo.
            Zakon o zaštiti potrošača isključuje pravo kupca da vrati proizvod u određenim situacijama. Imajući u vidu asortiman robe u našoj ponudi, od tih slučajeva tri mogu da budu relevantna:</p><br>
            <ul>
                <li>isporuka zapečaćenih audio, video zapisa ili računarskog softvera, koji su otpečaćeni nakon isporuke;</li>
                <li>isporuka robe proizvedene prema posebnim zahtevima potrošača ili jasno personalizovane i</li>
                <li>isporuka robe koja je podložna pogoršanju kvaliteta ili ima kratak rok trajanja.</li>
            </ul>
            
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