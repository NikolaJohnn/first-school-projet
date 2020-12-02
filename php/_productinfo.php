<?php
if($category=="Telefoni")
//if category is cellPhone than show this specification
{
    echo  "<table border='1'>
                            <tr>
                                <th><b>Model</b></th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th><b>Dimenzije</b></th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th><b>Težina</b></th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th><b>Boja</b></th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th><b>Operativni sistem</b></th>
                                <td> $row->system</td>
                            </tr>
                            <tr>
                                <th><b>Procesor</b></th>
                                <td> $row->procesor</td>
                            </tr>
                            <tr>
                                <th><b>Kamera</b></th>
                                <td> $row->camera</td>
                            </tr>
                            <tr>
                                <th><b>Ekran</b></th>
                                <td> $row->display</td>
                            </tr> 
                            <tr>
                                <th><b>Rezolucija</b></th>
                                <td> $row->resolution</td>
                            </tr>
                            <tr>
                                <th><b>Interna memorija</b></th>
                                <td> $row->memory</td>
                            </tr>
                            <tr>
                                <th><b>Radna memorija</b></th>
                                <td> $row->ram_memory</td>
                            </tr>
                            <tr>
                                <th><b>Baterija</b></th>
                                <td> $row->power</td>
                            </tr>
                            <tr>
                                <th><b>USB</b></th>
                                <td> $row->usb</td>
                            </tr>
                            <tr>
                                <th><b>WiFi</b></th>
                                <td> $row->wifi</td>
                            </tr>";   
                    echo   "</table>";
}
//end of  cellPhone  specification

elseif($category=="Audio")
//if category is Audio than show this specification
{
    echo  "<table border='1'>
                            <tr>
                                <th><b>Model</b></th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th><b>Dimenzije</b></th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th><b>Težina</b></th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th><b>Boja</b></th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th><b>Tip sistema</b></th>
                                <td> $row->system</td>
                            </tr>
                            <tr>
                                <th><b>Ekran</b></th>
                                <td> $row->display</td>
                            </tr>
                            <tr>
                                <th><b>USB</b></th>
                                <td> $row->usb</td>
                            </tr>
                            <tr>
                                <th><b>WiFi</b></th>
                                <td> $row->wifi</td>
                            </tr>
                            <tr>
                                <th><b>Ostalo</b></th>
                                <td> $row->other</td>
                            </tr>";   
                    echo   "</table>";
}
//end of claptopsellPhone specification

elseif($category=="Laptopovi")
//if category is laptops than show this specification
{
    echo  "<table border='1'>
                            <tr>
                                <th><b>Model</b></th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th><b>Dimenzije</b></th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th><b>Težina</b></th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th><b>Boja</b></th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th><b>Operativni sistem</b></th>
                                <td> $row->system</td>
                            </tr>
                            <tr>
                                <th><b>Procesor</b></th>
                                <td> $row->procesor</td>
                            </tr>
                            <tr>
                                <th><b>Ekran</b></th>
                                <td> $row->display</td>
                            </tr>
                            <tr>
                                <th><b>Rezolucija</b></th>
                                <td> $row->resolution</td>
                            </tr>
                            <tr>
                                <th><b>Grafička karta</b></th>
                                <td> $row->chipset</td>
                            </tr>
                            <tr>
                                <th><b>Interna memorija</b></th>
                                <td> $row->memory</td>
                            </tr>
                            <tr>
                                <th><b>Radna memorija</b></th>
                                <td> $row->ram_memory</td>
                            </tr>
                            <tr>
                                <th><b>Baterija</b></th>
                                <td> $row->power</td>
                            </tr>
                            <tr>
                                <th><b>HDMI</b></th>
                                <td> $row->hdmi</td>
                            </tr>
                            <tr>
                                <th><b>USB</b></th>
                                <td> $row->usb</td>
                            </tr>
                            <tr>
                                <th><b>WiFi</b></th>
                                <td> $row->wifi</td>
                            </tr>
                            <tr>
                                <th><b>Ostalo</b></th>
                                <td> $row->other</td>
                            </tr>";   
    echo   "</table>";
}
//end laptops  specification

elseif($category=="Foto-Kamere")
//if category is photoCamera than show this specification
{
    echo  "<table border='1'>
                            <tr>
                                <th><b>Model</b></th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th><b>Dimenzije</b></th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th><b>Težina</b></th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th><b>Boja</b></th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th><b>Kamera</b></th>
                                <td> $row->camera</td>
                            </tr>
                            <tr>
                                <th><b>Interna memorija</b></th>
                                <td> $row->memory</td>
                            </tr>
                            <tr>
                                <th><b>HDMI</b></th>
                                <td> $row->hdmi</td>
                            </tr>
                            <tr>
                                <th><b>USB</b></th>
                                <td> $row->usb</td>
                            </tr>";   
    echo   "</table>";
}
//end of photoCamera  specification
else{
    //if category is television than show this specification
    echo  "<table border='1'>
                <tr>
                    <th><b>Model</b></th>
                    <td> $row->products_model</td>
                </tr>
                <tr>
                    <th><b>Dimenzije</b></th>
                    <td> $row->dimension</td>
                </tr>
                <tr>
                    <th><b>Težina</b></th>
                    <td> $row->weight</td>
                </tr>
                <tr>
                    <th><b>Boja</b></th>
                    <td> $row->color</td>
                </tr>
                <tr>
                    <th><b>Operativni sistem</b></th>
                    <td> $row->system</td>
                </tr>
                <tr>
                    <th><b>Ekran</b></th>
                    <td> $row->display</td>
                </tr>
                <tr>
                    <th><b>Rezolucija</b></th>
                    <td> $row->resolution</td>
                </tr>
                <tr>
                    <th><b>Interna memorija</b></th>
                    <td> $row->memory</td>
                </tr>
                <tr>
                    <th><b>Baterija</b></th>
                    <td> $row->power</td>
                </tr>
                <tr>
                    <th><b>HDMI</b></th>
                    <td> $row->hdmi</td>
                </tr>
                <tr>
                    <th><b>USB</b></th>
                    <td> $row->usb</td>
                </tr>
                <tr>
                    <th><b>WiFi</b></th>
                    <td> $row->wifi</td>
                </tr>
                <tr>
                    <th><b>Ostalo</b></th>
                    <td> $row->other</td>
                </tr>";   
echo   "</table>";
}
?>