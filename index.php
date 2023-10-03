<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
     

    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    
<form method ="post" autocomplete="off">
     <img src="img/logo.svg" alt="">
     
     
    <div class="input-group">

        <div class="input-container"> 
            <input type="text" name="name" placeholder="Nombre ">
            
    </div> 

    <div class="input-container"> 
        <input type="Direccion  " name= "direccion"   placeholder="Direccion">
        

    </div>

    <div class="input-container"> 
        <input type="Paciente  " name= "Paciente"   placeholder="Paciente">
        

    </div>
    <div class="input-container"> 
        <input type="Edad " name= "edad"   placeholder="Edad">
        

    </div>

    <div class="input-container"> 
        <input type="Especie  " name= "Especie"   placeholder="Especie">
        

    </div>

    <div class="input-container"> 
        <input type="Peso " name= "Peso"   placeholder="Peso">
        

    </div>
    <input name="send" type="submit" class="btn" value="Enviar">
</div>
</form>

<?php
include ("send.php")
?>

</body>
</html>