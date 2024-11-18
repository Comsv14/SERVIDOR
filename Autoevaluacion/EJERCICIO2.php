

<?php
session_start();
$_SESSION['resul']=0;
$bin = [rand(0,1), rand(0,1), rand(0,1), rand(0,1)];
$potencias =[8,4,2,1];

for ($i=0; $i < 4 ; $i++) { 
    if($bin[$i]== 1){
        $_SESSION['resul']=$_SESSION['resul'] + $potencias[$i];
    }
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
    <h1> Adivina el numero decimal</h1>
    <h2> El numero en BINARIO es: </h2>
    <?php
    for ($i=0; $i <4 ; $i++) { 
    if($bin[$i]== 1){
        switch ($potencias[$i]) {
            case '1':
                echo '<img src="Uno.jpg">';
                break;
                case '2':
                    echo '<img src="dos.JPG">';
                    break;
                    case '4':
                        echo '<img src="cuatro.JPG">';
                        break;
                        case '8':
                            echo '<img src="ocho.JPG">';
                            break;
            
            default:
                break;
        }
    } else {
        echo '<img src="blanco.JPG"';
    }
    }
    ?>
    <form action=EJERCICIO21.php" method="post">
        <label for="nombre">Numero decimal: </label>
        <input type="text" id="numdecimal" name="numdecimal" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
    
</body>
</html>