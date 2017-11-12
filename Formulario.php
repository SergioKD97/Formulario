<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Datos Usuario</title>
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        
    <style type="text/css">
        #div1{margin:13% auto;width: 400px; text-align:left; background-color: aliceblue}
        
        
    </style>
    </head>
    
    
    <body>
        <?php
        
        if (isset($_GET["hip1"])){
            echo "venimos de la primera pagina";
            
        } elseif (isset($_GET["hip2"])) {
        header("Location:Index.php?accedido=true");
        }
        
        ?>
        
        
        
        <div id="div1">
            <table width="200" border="0" cellspacing="10" align="center">
                <form action="Index.php">
                    
                    <br><B><h1><center> FORMULARIO</center></h1></B>
                    <tr>
                        <td>Usuario: </td> <td><input name="usuario" type="text" value="ola"></td>
                    </tr>
                    <tr>
                        <td>E-mail: </td> <td><input name="e-mail" type="email" value="sergi-boalo@hotmail.com"></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td> <td><input name="password" type="password" value="asdewsrf"></td>
                    </tr> 
                    <tr>
                        <td>Teléfono: </td> <td><input name="telefono" type="number" value="91287"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" name="Borrar"></td>
                        <td><input style="float: right" type="submit" name="enviar" value="enviar"></td>
                    </tr>
                    
                </form>
            </table>    
        </div>
        
    </body>
</html>
