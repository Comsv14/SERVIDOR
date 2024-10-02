<?php
$mascotas = array(
$perro =array ('Mastin' => "Yunito",
                'Salchicha' => "Fuet",
                'Chiguagua' => "Sarnoso"
                
),
$gatos = array(
    'Persa' => "Vapeh",
    'Comun' => "Felix",
    'Siames' => "Mesi"
)
);
    foreach($mascotas as $animal => $tipo){
        echo $animal . " : <br>";
        foreach ($tipo as $raza => $nombre){
            echo $raza. ": " . $nombre. " <br>";
        }
        
    }
    


?>