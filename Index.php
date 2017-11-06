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

    <style type="text/css">
        #div1{margin:13% auto;width: 330px; text-align:left; background-color: aliceblue}
        
        
    </style>
    </head>
    <body>
        
        
        <div id="div1">
            
            <table border="0" style="padding: 30px; width: 100%" >
                <form action="muestraFormulario.php" method="POST">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center"> Introduzca sus Datos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Usuario: </td> <td colspan="2"><input  style="alignment-adjust: central" name="Usuario" type="text"></td>
                    </tr>
                    <tr>
                        <td>Password: </td> <td colspan="2"><input  style="alignment-adjust: central" name="Password" type="text"></td>
                    </tr>
                    <tr>
                        <td><a href="Formulario.php?hip1=true"> Registrarse </a> </td>
                        <td style="float: right"><a href="Formulario.php?hip2=true"> Login </a></td>
                    </tr>
                </tbody>
                </form>
            </table>
            
            
            
        </div>
       
        
        <?php
        
        if (isset($_GET["accedido"])){
            echo 'venimos de la pagina "validar.php"';
        } else {
            echo "entramos por primera vez";
        }
        ?>
        
        
    </body>
</html>
