$(document).ready(function(){
    /* */
     prikazi();
     $("#clean").click(function(){
             ocistiSve();
     });
     
     $("#delete").click(function(){
        let specification_id=$("#specification_id").val();
        if(specification_id==""){
            $("#answer").html("Niste izabrali korisnika za brisanje!!");
            return false;
        }
        if(!confirm("Da li ste sigurni da zelite izbrisete proizvod")) return false;
        $.post("../php/_product_control.php?funkcija=delete", {specification_id:specification_id}, function(response){
            $("#answer").html(response);
            prikazi();
            ocistiSve();
        })
    })
 }); 
 function prikazi(){
     $("#korisnici").load("../php/_product_controlFill.php", function(response){
         //document.write(response);
         let odgovor=JSON.parse(response);
         $("#korisnici").html("");
         for(let i in odgovor)
             $("#korisnici").append("<div class='korisnik' data-specification_id='"+odgovor[i].specification_id+"' data-brand='"+odgovor[i].products_brand+"' data-model='"+odgovor[i].products_model+"' data-price='"+odgovor[i].price+"' data-dimension='"+odgovor[i].dimension+"' data-weight='"+odgovor[i].weight+"' data-display='"+odgovor[i].display+"' data-resolution='"+odgovor[i].resolution+"' data-procesor='"+odgovor[i].procesor+"' data-camera='"+odgovor[i].camera+"' data-memory='"+odgovor[i].memory+"' data-ram_memory='"+odgovor[i].ram_memory+"' data-color='"+odgovor[i].color+"' data-system='"+odgovor[i].system+"' data-wifi='"+odgovor[i].wifi+"' data-usb='"+odgovor[i].usb+"' data-hdmi='"+odgovor[i].hdmi+"' data-category='"+odgovor[i].category+"' data-chipset='"+odgovor[i].chipset+"' data-keyboard='"+odgovor[i].keyboard+"' data-power='"+odgovor[i].power+"' data-motherboard='"+odgovor[i].motherboard+"' data-other='"+odgovor[i].other+"'>" + odgovor[i].specification_id + ": " + odgovor[i].products_brand +" "+ odgovor[i].products_model +"</div>");
             $(".korisnik").click(function(){
                    $("#specification_id").val($(this).data("specification_id"));
                    $("#category").val($(this).data("category"));
                    $("#products_brand").val($(this).data("brand"));
                    $("#products_model").val($(this).data("model"));
                    $("#price").val($(this).data("price"));
                    $("#dimension").val($(this).data("dimension"));
                    $("#weight").val($(this).data("weight"));
                    $("#display").val($(this).data("display"));
                    $("#resolution").val($(this).data("resolution"));
                    $("#procesor").val($(this).data("procesor"));
                    $("#camera").val($(this).data("camera"));
                    $("#memory").val($(this).data("memory"));
                    $("#ram_memory").val($(this).data("ram_memory"));
                    $("#color").val($(this).data("color"));
                    $("#system").val($(this).data("system"));
                    $("#wifi").val($(this).data("wifi"));
                    $("#usb").val($(this).data("usb"));
                    $("#hdmi").val($(this).data("hdmi"));
                    $("#chipset").val($(this).data("chipset"));
                    $("#keyboard").val($(this).data("keyboard"));
                    $("#power").val($(this).data("power"));
                    $("#motherboard").val($(this).data("motherboard"));
                    $("#other").val($(this).data("other"));
                    $("#specification_id").attr("disabled", "disabled");
         });
         
     });
 }
 function ocistiSve(){
     $("input").val("");
     $("select").val("0");
}
$(function(){
    $("#record").click(function(){
        let status="insert";
      if($("#specification_id").val()!="")status="update";
            $.ajax({
            url: "../php/_product_control.php?funkcija="+status,
            type: "POST",
            data: new FormData(document.getElementById('product_control_form')),
            contentType:false,
            cache:false,
            processData:false,
            success: uspeh,
            error: greska,
            beforeSend: preSlanja, 
        })
    })
    
    $("#mainImg").change(function(){
        $("#answer").html("");
    })
})

function uspeh(response){
    $("#answer").html(response);
    prikazi();
}

function greska(xhr){
    $("#answer").html("Greška!!!<br>"+xhr.status+"<br>"+xhr.statusText);
}

function preSlanja(){
    if($("#specification_id").val()=="")
    {
        if($("#mainImg").val()=="" || $("#otherImg").val()=="")
        {
        $("#answer").html("Greška!!!<br>Niste uneli sve podatke");
        return false;
        }
    }
    
}

