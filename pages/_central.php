<!-- main part where is all kind of products -->
        
<main id="main">
        <h2>Izdvajamo iz ponude</h2>

        <!-- product over the middle IMG-->
        <div class="wrapper">
            <?php

                    $query="SELECT * FROM specification ORDER BY rand() LIMIT 15";
                    $result=$db->query($query);
                    while($row=$db->fetch_object($result)) 
                    {
                        
                            echo "<div class='product'>";
                            echo "<img src='pics/$row->specification_id,v.jpg' alt=''>";
                            echo "<p>$row->products_brand $row->products_model</p>";
                            echo "<p class='price'>$row->price RSD</p>";
                            echo "<p class='viewMore'><a href='pages/productinfo.php?kategorija=$row->category&sifraProizvoda=$row->specification_id'>Saznajte više&nbsp;&raquo;</a></p>";
                            echo "</div>";
                        
                    }
            ?>
            
            
        </div>
        <!-- product over the middle IMG-->

        <!--middle IMF -->
        <div class="wrapper">
            <div class="middleIMG">
                <img src="pics/72_14011.jpg" alt="">
            </div> 
        </div>
        <!--middle IMF -->

        <h2>Najprodavaniji proizvodi</h2>

        <!-- products under the middle IMG-->
        <div class="wrapper">
        <?php

        $query="SELECT * FROM specification ORDER BY rand() LIMIT 15";
        $result=$db->query($query);
        while($row=$db->fetch_object($result)) 
        {
    
        echo "<div class='product'>";
        echo "<img src='pics/$row->specification_id,v.jpg' alt=''>";
        echo "<p>$row->products_brand $row->products_model</p>";
        echo "<p class='price'>$row->price RSD</p>";
        echo "<p class='viewMore'><a href='pages/productinfo.php?kategorija=$row->category&sifraProizvoda=$row->specification_id'>Saznajte više&nbsp;&raquo;</a></p>";
        echo "</div>";
    
        }
        ?>
        <!--end of products under the middle IMG-->
    </main>

    <!-- end of main part where is all kind of products -->