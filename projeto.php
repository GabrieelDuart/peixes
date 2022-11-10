<?php

include ("formulario.php");

if($_POST != ""){


    $Ph = $_POST ["ph"];
    $Temp = $_POST ["temperatura"];

$grupo_peixes = [
    1 => [
        'Peixe' => 'Acará-Bandeira',
        'Ph_inicial' => 6,
        'Ph_final' => 7,
        'Temp_inicial' => 24,
        'Temp_final' => 28
    ],
    2 => [
        'Peixe' => 'Acará-Disco',
        'Ph_inicial' => 6.6,
        'Ph_final' => 7,
        'Temp_inicial' => 24,
        'Temp_final' => 28,
    ],
    3 => [
        'Peixe' => 'Abelhinha',
        'Ph_inicial' => 7,
        'Ph_final' => 8,
        'Temp_inicial' => 20,
        'Temp_final' => 26
        ]
];

# dados #



# ----  #

foreach ($grupo_peixes as $id => $id_peixe) {
    if($Ph >= $id_peixe['Ph_inicial'] && $Ph <= $id_peixe['Ph_final'] && $Temp >= $id_peixe['Temp_inicial'] && $Temp <= $id_peixe['Temp_final'] ){
        $resultado =  $id_peixe['Peixe'];
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $resultado ?>
</body>
</html> 
<?php
}

?>

