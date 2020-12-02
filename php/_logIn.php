<?php
if(isset($_POST['korime']) and isset($_POST['lozinka']))
{
    $salt="lmQQBq5MqhyN";
    $korime=$_POST['korime'];
    $lozinka=$_POST['lozinka'].$salt;
    if($korime!="" and $lozinka!="")
    {
        if(validanString($korime) and validanString($lozinka))
        {
            $upit="SELECT * FROM users WHERE users_email='{$korime}'";
            $rez=$db->query($upit);
            if($db->num_rows($rez)>0)
            {
                $red=$db->fetch_object($rez);
                if($lozinka==$red->users_password)
                {
                    napraviSesiju($red);
                    Log::upisiLog("../logs/logovanja.txt", "{$_SESSION['users_name']} se uspešno ulogovao");
                    header("location: ../index.php");
					
                }
				else
				{
                    $poruka="Nije dobra lozinka za korisnika <b>$korime</b>";
                    Log::upisiLog("../logs/logovanja.txt", "Pogrešna lozinka {$korime} - otkucana lozinka je {$lozinka}, poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
					
				} 
            }
			else
			{
                $poruka="Ne postoji korisnik sa korisničkim imenom <b>$korime</b>";
                Log::upisiLog("../logs/logovanja.txt", "Pogrešno korisničko ime {$korime} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
			
			} 
        }
		else
		{
            $poruka="Korisničko ime ili lozinka sadrže nedozvoljene karaktere";
            Log::upisiLog("../logs/logovanja.txt", "Nedozvoljeni karakteri od strane {$korime} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
		} 
    }
    else $poruka="Svi podaci su obavezni";
}
?>