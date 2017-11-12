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
        #error{color: red; };
        
        
    </style>
    </head>
    <body>
        
         <?php
//            $claseUsuario = "";
//            $clasePass = "";
//            $msgUsuario = "";
//            $msgPass = "";
//            $usuario = "";
//            $password = "";
//                    
//            if($_POST){
//            $usuario = $_POST['usuario'];
//            $password = $_POST['password'];
//            
////            var_dump($usuario);
////            var_dump($password);
//         
//            if($usuario == ""){
//                $msgUsuario = "*Falta ingresar el usuario";
//                $claseUsuario = "error";
//            }
//            if($password == ""){
//                $msgPass = "*Falta ingresar la contraseña";
//                $clasePass = "error";
//            } 
//        }
         
//                if(isset($_POST['registro'])){
//                    $usuario = $_POST['usuario'];
//                    $password = $_POST['password'];
//                    
//                }
         
        if(!isset($_GET["registrado"])){
         $arrayUserPass = array("","");
        }
        
            if(isset($_GET["registrado"])){

                $arrayUserPass[0] = $_GET["arrayUserPass1"];
                $arrayPass = $_GET["arrayUserPass2"];
                $arrayUserPass[1] = $arrayPass;

                echo 'USUARIO REGISTRADO CON EXITO';
            }
        
        if(isset($_GET["logBien"])){
            echo 'LOGEADO CON EXITO';
            
        }
        if(isset($_GET["logMal"])){
            echo 'ERROR LOGIN';
            
        }
        
        ?>
        
        <div id="div1">
            
            <table border="0" style="padding: 15px; width: 100%">
                <form action="Validar.php?arrayUser=<?php echo $arrayUserPass[0]?>&arrayPass=<?php echo $arrayUserPass[1]?> " method="post">
                    <thead>
                    <tr style="height: 30px;">
                        <th colspan="2" style="text-align: center; float: top"> Introduzca sus Datos<br><br></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Usuario: </td> <td><input name="usuario" type="text" style="width: 100%;" value="Paco"  ></td>
                    </tr>
                    <tr>
                        <td>Password: </td> <td><input name="password" type="password" style="width: 100%" value="1234" ></td>
                    </tr>
                    <tr>
                        <td><br><input type="submit" name="registro" value="Registrarse"></td>
                        <td style="float: right"><br><input type="submit" name="login" value="Login" style="margin: -5px"></td>
                    </tr>

                </tbody>
                </form>
            </table>
        </div>
        

        
        <?php
        
        
        
        

        
       
        ?>
        
    </body>
</html>


