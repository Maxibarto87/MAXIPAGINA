<?php require_once("../../templates/header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./contacto.css">
    <title>Contacto</title>
</head>
<body>
    <br>
<div class="card">
    
        <div class="card-header">
            Contacto
        </div>
        <div class="card-body">
            <form action="" method="post">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Ingrese su Nombre">
            <br>
            
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="Apellido" id="Apellido" aria-describedby="helpId" placeholder="Ingrese su Apellido">
            <br>
            
            <label for="textarea" class="form-label">Comentario</label>
            <textarea class="form-control" name="textarea" id="textarea" aria-describedby="helpId" placeholder="Ingrese su texto"></textarea>
            <br>
            
            <button type="submit" name="enviar" id="enviar" class="btn btn-primary">Enviar</button>       
            <a class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
            </form>
        </div>
        
    </div>
   
</body>
</html>

<?php require_once("../../templates/footer.php") ?>