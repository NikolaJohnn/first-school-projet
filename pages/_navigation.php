<!-- navigation of categories and navigation for login-->

        <!-- navigation of categories-->
        <div id="navigation"> 
            <div class="wrapper">
                <div id="asideNav">
                    <p id="menu"><i class="fas fa-bars"></i> &nbsp;Kategorije proizvoda</p>
                    <ul class="category">
                        <li id="tv"><a href="pages/products?kategorija=Televizori"><i class="fas fa-tv"></i> &nbsp;Televizori</a>
                            <ul class="tv">
                            <?php
                                $upit="SELECT * FROM  television";
                                $rez=$db->query($upit);
                                while($red=$db->fetch_object($rez))
                                    echo "<li><a href='pages/products_brand.php?kategorija=Televizori&brand=$red->television_brand'>$red->television_brand</a></li>";
                            ?>
                            </ul>
                        </li>
                        <li id="mobile"><a href="pages/products?kategorija=Telefoni">&nbsp;<i class="fas fa-mobile-alt"></i> &nbsp;&nbsp;Mobilni telefoni</a>
                            <ul class="mobile">
                            <?php
                                $upit="SELECT * FROM cellPhone";
                                $rez=$db->query($upit);
                                while($red=$db->fetch_object($rez))
                                    echo "<li><a href='pages/products_brand.php?kategorija=Telefoni&brand=$red->cellPhone_brand'>$red->cellPhone_brand</a></li>";
                            ?>
                            </ul>
                        </li>
                        <li id="laptop"><a href="pages/products?kategorija=Laptopovi"><i class="fas fa-laptop"></i> &nbsp;Laptop računari</a>
                            <ul class="laptop">
                            <?php
                                $upit="SELECT * FROM laptops";
                                $rez=$db->query($upit);
                                while($red=$db->fetch_object($rez))
                                    echo "<li><a href='pages/products_brand.php?kategorija=Laptopovi&brand=$red->laptops_brand'>$red->laptops_brand</a></li>";
                            ?>
                            </ul>
                        </li>
                        <li id="photo"><a href="pages/products?kategorija=Foto-Kamere"><i class="fas fa-video"></i> &nbsp;foto-aparati i kamere</a>
                            <ul class="photo">
                            <?php
                                $upit="SELECT * FROM photoCamera";
                                $rez=$db->query($upit);
                                while($red=$db->fetch_object($rez))
                                    echo "<li><a href='pages/products_brand.php?kategorija=Foto-Kamere&brand=$red->photoCamera_brand'>$red->photoCamera_brand</a></li>";
                            ?>
                            </ul>
                        </li>
                        <li id="audio"><a href="pages/products?kategorija=Audio"><i class="fas fa-volume-up"></i></i> &nbsp;Audio</a>
                            <ul class="audio">
                            <?php
                                $upit="SELECT * FROM audio";
                                $rez=$db->query($upit);
                                while($red=$db->fetch_object($rez))
                                    echo "<li><a href='pages/products_brand.php?kategorija=Audio&brand=$red->audio_brand'>$red->audio_brand</a></li>";
                            ?>
                            </ul>
                        </li>
                    </ul>
                </div>
        <!--end of navigation of categories-->

        <!-- navigation for login-->
                <div id="headerNav">
                        <ul>
                            <li><a href="pages/action.php">Akcije</a></li>
                            <li><a href="pages/delivery_info.php">Dostava</a></li>
                            <?php
                            if (login())
                			{
                                $sql="SELECT * FROM basket WHERE accepted=1 AND users_id='{$_SESSION['users_id']}'";
                                $res=$db->query($sql);
                                $rouw=$db->fetch_object($res);
                                if($_SESSION['users_status']=="" )
                                {
                                echo "<li><a href='#'>{$_SESSION['users_name']} <i class='fas fa-shopping-cart'></i> ".$db->num_rows($res)."</a>";
                                }
                                else
                    			echo "<li><a href='#'>{$_SESSION['users_name']} ({$_SESSION['users_status']} ".$db->num_rows($res).")</a>";
                                echo "<ul>";
								if($_SESSION['users_status']=="Administrator")
								{
									echo "<li><a href='pages/users.php'>Korisnici</a></li>";
									echo "<li><a href='pages/comments.php'>Komentari</a></li>";
                                    echo "<li><a href='pages/product_control.php'>Proizvodi</a></li>";
                                    echo "<li><a href='pages/logs.php'>Logovi</a></li>";
									echo "<li><a href='pages/basket.php'>Korpa ( ".$db->num_rows($res)." )</a></li>";
								}
                                elseif($_SESSION['users_status']=="Menadžer")
								{
                                    echo "<li><a href='pages/comments.php'>Komentari</a></li>";
                                    echo "<li><a href='pages/product_control.php'>Proizvodi</a></li>";
                                    echo "<li><a href='pages/basket.php'>Korpa( ".$db->num_rows($res)." )</a></li>";
                                }
                                elseif($_SESSION['users_status']=="Prodavac")
								{
                                    echo "<li><a href='pages/product_control.php'>Proizvodi</a></li>";
                                    echo "<li><a href='pages/basket.php'>Korpa( ".$db->num_rows($res)." )</a></li>";
								}
                                else
                                echo "<li><a href='pages/basket.php'>Korpa( ".$db->num_rows($res)." )</a></li>";
								echo "<li><a href='pages/login.php?odjava'>Odjavite se</a></li>";
								echo "</ul>";
								echo "</li>";
                            }
                			else
                    		echo "<li><a href='pages/logIn.php'>Prijava</a></li>";
                	?>
                        </ul>
                </div>
        <!-- end of navigation for login-->
            </div>
        </div>   
    <!-- end of navigation of categories and navigation for login-->