<?php
session_start();
require_once("classLog.php");
$db=mysqli_connect("localhost","root", "boris2020", "boristech");
if(mysqli_connect_error())
{
    echo "GRESKA!!!!<br>".mysqli_connect_error();
    exit;
}
mysqli_query($db, "SET NAMES UTF8");
$funkcija=$_GET['funkcija'];
if($funkcija=="update")
{
    $specification_id=$_POST['specification_id'];
    $category=$_POST['category'];
    $products_brand=$_POST['products_brand'];
    $products_model=$_POST['products_model'];
    $price=$_POST['price'];
    $dimension=$_POST['dimension'];
    $weight=$_POST['weight'];
    $display=$_POST['display'];
    $resolution=$_POST['resolution'];
    $procesor=$_POST['procesor'];
    $camera=$_POST['camera'];
    $memory=$_POST['memory'];
    $ram_memory=$_POST['ram_memory'];
    $color=$_POST['color'];
    $system=$_POST['system'];
    $wifi=$_POST['wifi'];
    $usb=$_POST['usb'];
    $hdmi=$_POST['hdmi'];
    $chipset=$_POST['chipset'];
    $keyboard=$_POST['keyboard'];
    $power=$_POST['power'];
    $motherboard=$_POST['motherboard'];
    $other=$_POST['other'];
    if($products_brand=="" or $products_model=="" or $category=="")
    {
        echo "Niste uneli sve podatke!!";
        exit;
    }
    $sql="UPDATE specification SET category='{$category}', products_brand='{$products_brand}', products_model='{$products_model}', price='{$price}', dimension='{$dimension}', weight='{$weight}', display='{$display}', resolution='{$resolution}', procesor='{$procesor}', camera='{$camera}', memory='{$memory}', ram_memory='{$ram_memory}', color='{$color}', system='{$system}', wifi='{$wifi}', usb='{$usb}', hdmi='{$hdmi}', chipset='{$chipset}', keyboard='{$keyboard}', power='{$power}', motherboard='{$motherboard}', other='{$other}' WHERE specification_id='{$specification_id}' ";
    mysqli_query($db, $sql);
    if(mysqli_error($db))
    {
        echo "GRESKA!!!!<br>".mysqli_error($db);
    }
    else
    {
        
        echo "Izmenjeno proizvoda: ".mysqli_affected_rows($db);
        Log::upisiLog("../logs/proizvodi.txt", "{$_SESSION['users_name']} je uradio izmene na proizvodu {$products_brand} {$products_model}");
        exit;
    }   
}
if($funkcija=="insert"){
    $category=$_POST['category'];
    $products_brand=$_POST['products_brand'];
    $products_model=$_POST['products_model'];
    $price=$_POST['price'];
    $dimension=$_POST['dimension'];
    $weight=$_POST['weight'];
    $display=$_POST['display'];
    $resolution=$_POST['resolution'];
    $procesor=$_POST['procesor'];
    $camera=$_POST['camera'];
    $memory=$_POST['memory'];
    $ram_memory=$_POST['ram_memory'];
    $color=$_POST['color'];
    $system=$_POST['system'];
    $wifi=$_POST['wifi'];
    $usb=$_POST['usb'];
    $hdmi=$_POST['hdmi'];
    $chipset=$_POST['chipset'];
    $keyboard=$_POST['keyboard'];
    $power=$_POST['power'];
    $motherboard=$_POST['motherboard'];
    $other=$_POST['other'];
    if($products_brand=="" or $products_model=="" or $category=="")
    {   
        echo "Niste uneli sve podatke!!";
        exit;
    }
    
    $sql="INSERT INTO specification (category, products_brand, products_model, price, dimension, weight, display, resolution, procesor, camera, memory, ram_memory, color, system, wifi, usb, hdmi, chipset, keyboard, power, motherboard, other) VALUES ('{$category}', '{$products_brand}', '{$products_model}', '{$price}', '{$dimension}', '{$weight}','{$display}','{$resolution}', '{$procesor}','{$camera}', '{$memory}', '{$ram_memory}', '{$color}', '{$system}', '{$wifi}', '{$usb}', '{$hdmi}', '{$chipset}', '{$keyboard}', '{$power}', '{$motherboard}', '{$other}') ";
    mysqli_query($db, $sql);
    if(mysqli_error($db))
    {
        echo "GRESKA!!!!<br>".mysqli_error($db);
    }
    else
    {
            $imeSlike=mysqli_insert_id($db);
            //print_r($_FILES);
            move_uploaded_file($_FILES['mainImg']['tmp_name'],"../pics/$imeSlike,v.jpg");
            move_uploaded_file($_FILES['otherImg']['tmp_name'],"../pics/$imeSlike,m.jpg");
            echo "Dodato proizvoda: ".mysqli_affected_rows($db);
            Log::upisiLog("../logs/proizvodi.txt", "{$_SESSION['users_name']} je dodao novi proizvod {$products_brand} {$products_model}");
        

    }
        
           
}
if($funkcija=="delete")
{
    $specification_id=$_POST['specification_id'];
    if($specification_id=="")
    {
        echo "Niste izabrali proizvod za brisanje!!!";
        exit;
    }
    if($_SESSION['users_status']=="Administrator")
    {
    $sql="DELETE FROM specification WHERE specification_id={$specification_id}";
        mysqli_query($db, $sql);
            if(mysqli_error($db))
            {
                echo "GRESKA!!!!<br>".mysqli_error($db);
            }
            else
            {
                echo "Obrisano proizvoda: ".mysqli_affected_rows($db);
                Log::upisiLog("../logs/proizvodi.txt", "{$_SESSION['users_name']} je obrisao proizvod sa ID {$specification_id}");
            }
    }
    else
    {
        echo "Nemate dozvolu za brisanje proizvoda. Brisanje proizvoda je jedino dozvoljeno Administratoru!.";
        Log::upisiLog("../logs/proizvodi.txt", "{$_SESSION['users_name']} je pokušao da obriše proizvod sa ID {$specification_id}");
    }
        
    
	
}
?>