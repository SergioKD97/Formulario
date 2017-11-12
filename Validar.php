<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php        

        if(isset($_POST["registro"])){
            
            $arrayUserPass = array($_POST["usuario"],$_POST["password"]);
            header("Location:Index.php?registrado=true&arrayUserPass1=$arrayUserPass[0]&arrayUserPass2=$arrayUserPass[1]    ");
            }
            
        if(isset($_POST["login"])){
            if(  ($_POST["usuario"] == $_GET["arrayUser"]) and ($_POST["password"] == $_GET["arrayPass"])   ){
                header("Location:Index.php?logBien=true");
            }else{
                header("Location:Index.php?logMal=true");
                
            }
        }
        
        ?>
        
        
        
    </body>
</html>
