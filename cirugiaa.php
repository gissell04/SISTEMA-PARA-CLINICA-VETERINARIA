<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    
 <form method ="post" autocomplete="off">
    <img src="img/logo.svg" alt="">
 
    <div class="input-group">

      <div class="input-container"> 
         
      <input type="Paciente  " name= "Paciente"   placeholder="Nombre del Paciente">
    
</div> 
 


<div class="input-container"> 
         
      <input type="Especie" name="Especie" placeholder="Especie">
    
</div> 

<div class="input-container"> 
         
      <input type="raza" name="raza" placeholder="Raza">
    
</div> 


<div class="input-container"> 
         
      <input type="sexo" name="sexo" placeholder="sexo">
    
</div>

<div class="input-container"> 
         
      <input type="pre-quirurgico" name="pre-quirurgico" placeholder="pre-quirurgico">
    
</div>
</div> 


    </form>


    <?php
include ("send.php")
?>

</body>
</html>