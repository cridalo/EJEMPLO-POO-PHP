<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio php</title>
</head>
<body>
    <h1>POO EN PHP</h1>
    
    <div>
        <?php
            include 'Persona.php';
            include 'Deportista.php';
            include 'Futbolista.php';
            include 'Portero.php';
            echo '<hr>****Inicia la creación de objetos con parametros****';
            
            $obj1 = new Persona("Luis");
            $obj2 = new Deportista("Pedro", 25);
            $obj3 = new Futbolista("Miguel", 25, 12);
            //$obj4 = new Portero("Rene", 38, 1, 0);

            //echo "<hr>****Inicia la creación de objetos default****";
            //$obj5 = new Persona();
            //$obj6 = new Deportista();
            //$obj7 = new Futbolista();
            //$obj8 = new Portero();
            
        ?>
    </div>
</body> 
</html>