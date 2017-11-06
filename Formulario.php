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
        } else {
            header("Location:Index.php?accedido=true");
        }
        
        ?>
        
        
        
        <div id="div1">
            <table width="200" border="0" cellspacing="10" align="center">
                <form action="muestraFormulario.php" method="POST">
                    
                    <br><B><h1><center> FORMULARIO</center></h1></B>
                    <tr>
                    <td>Nombre: </td> <td><input  style="alignment-adjust: central" name="nombre" type="text"></td>
                    </tr>
                    <tr>
                        <td>Apellidos: </td> <td><input name="telefono" type="text"></td>
                    </tr>
                    <tr>
                        <td>E-mail: </td> <td><input name="e-mail" type="email"></td>
                    </tr>
                    <tr>
                        <td>Teléfono: </td> <td><input name="telefono" type="number"></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td> <td><input name="password" type="password"></td>
                    </tr>                 
                    <tr>
                        <td><input class="btn btn-success" type="reset" name="Borrar"></td><td><input style="margin-left: 70%" type="submit" name="enviar" value="Enviar"></td>
                    </tr>
                    
                </form>
            </table>    
        </div>
        
    </body>
</html>
