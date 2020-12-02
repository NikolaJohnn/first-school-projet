<!-- main part where is all kind of products -->
        
<main id="main">
            <?php
                $category=$_GET['kategorija'];

                    $query="SELECT * FROM specification WHERE category='{$category}'";
                    $result=$db->query($query);
                    echo "<p class='number'><a href='../index.php'>Početna strana</a> / Prikazano je <b>".$db->num_rows($result)."</b> proizvoda</p><br>"; 
                    echo "<h2>$category</h2>";
                    echo  "<div class='wrapper'>";
                    while($row=$db->fetch_object($result)) 
                    {
                        
                            echo "<div class='product'>";
                            echo "<img src='../pics/$row->specification_id,v.jpg' alt=''>";
                            echo "<p>$row->products_brand $row->products_model</p>";
                            echo "<p class='price'>$row->price RSD</p>";
                            echo "<p class='viewMore'><a href='productinfo.php?kategorija=$category&sifraProizvoda=$row->specification_id'>Saznajte više&nbsp;&raquo;</a></p>";
                            echo "</div>";
                        
                    } 
                    echo "</div>";
            ?>
</main>
