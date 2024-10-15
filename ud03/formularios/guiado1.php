<?php
/** 
 * autor: José María Mayén Pérez
 */

$aGrupos = array("1ºDAw","2ºDAW","1ºASIR","2ºASIR");
$lProcesaFormulario = false;

if(isset($_POST["enviar"])) {
    $lProcesaFormulario = true;
    if($lProcesaFormulario){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        
        echo"Nombre: $nombre";
        echo"Apellidos: $apellidos";
        echo"Email: $email";    
    }else{


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesa1.php" method="post">
        <input type="text" name="nombre" id=""><br/>
        <input type="text" name="apellidos" id=""><br/>
        <input type="text" name="email" id=""><br/>
        <select name="grupos" id="">
            <?php
                /**foreach($aGrupos as $key => $value)
                    echo '<option name="grupos" value="' .  $key  . '"> ' .  $value  . '</option> ';
                */
            ?>
            

           
        </select>
        <br/>
        <input type="submit" name="enviar">  
    </form>

</body>
</html>
<?php
}
?>