<?php
$salt="lmQQBq5MqhyN";
$status="";
if(isset($_POST['record']))
{
    $name=$_POST['users_name'];
    $lastname=$_POST['users_lastname'];
    $email=$_POST['users_email'];
    $password=$_POST['users_password'].$salt;
    $confirm_password=$_POST['confirm_password'].$salt;
    $addres=$_POST['users_addres'];
    $phone=$_POST['users_phone'];
    if($name!="" and $lastname!="" and $email!="" and $password!="" and $confirm_password!="")
    {   
       if($password==$confirm_password)
        {
          $sql="INSERT INTO users (users_name, users_lastname, users_email, users_password, confirm_password, users_status, users_addres, users_phone) VALUES ('{$name}', '{$lastname}', '{$email}', '{$password}', '{$confirm_password}', '{$status}', '{$addres}','{$phone}') ";
            $db->query($sql);
            $message="Uspešno ste se registrovali. Želimo Vam srećnu i uspešnu kupovinu!";
            Log::upisiLog("../logs/korisnici.txt", "$name $lastname $email se uspešno registrovao kao novi korisnik");
        }
        else
            $message="Lozinka i ponovljena lozinka se ne poklapaju!!"; 
        
    }
    else
        $message="Niste uneli sve podatke!!";
}

?>
