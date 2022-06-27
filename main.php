<?php
    
    echo("\n   Promedio de notas de Alunmos \n");

    $cantidadNotas = 0; // Contador
    $hombre = []; // Se inicializa los array
    $mujer = []; // Se inicializa los array

    while ($cantidadNotas <= 4) {
        echo("\n Quiere ingresar la nota de un Hombre (H) o una Mujer (M) \n");
        $genero = readline("Genero: "); // Se captura el Genero

        if ($genero == "H" || $genero == "h"){
            echo("\n Ingrese la nota del estudiante \n");
            $nota = readline("Nota: "); // S ecaptura la nota
            array_push($hombre, $nota);
        }elseif($genero == "M" || $genero == "m"){
            echo("\n Ingrese la nota de la estudiante \n");
            $nota = readline("Nota: ");
            array_push($mujer, $nota);
        }else{
            echo "El caracter ingresado no es correcto";
        }

        $cantidadNotas++;
    }

    $sumaNotasHombres = array_sum($hombre); // Se calcula el total de la suma del array
    $totalNumArratHombres = count($hombre); // Se cuentan cuantos numeros tiene el array
    $promedioHombres = $sumaNotasHombres / $totalNumArratHombres; // Se calcula el promedio dividiendo

    $sumaNotasMujeres = array_sum($mujer); // Se calcula el total de la suma del array
    $totalNumArratMujeres = count($mujer); // Se cuentan cuantos numeros tiene el array
    $promedioMujeres = $sumaNotasMujeres / $totalNumArratMujeres; // Se calcula el promedio dividiendo

    
    if($promedioHombres > $promedioMujeres){
        echo "\n Los Hombre tuvieron mejor promedio. \n";
        echo "Hombres: " . $promedioHombres . "\n";
        echo "Mujeres: " . $promedioMujeres . "\n";
    }elseif($promedioHombres < $promedioMujeres){
        echo "\n Las Mujeres tuvieron un mejor promedio. \n";
        echo "Hombres: " . $promedioHombres . "\n";
        echo "Mujeres: " . $promedioMujeres . "\n";
    }else{
        echo "Hombre y Mujeres tuvieron el mismo promedio. \n";
        echo "Hombres: " . $promedioHombres . "\n";
        echo "Mujeres: " . $promedioMujeres . "\n";
    }
    

    // foreach($hombre as $nota){
    //     echo "Hombres" . $nota . "\n";
    // }

    // foreach($mujer as $nota){
    //     echo "Mujeres" . $nota . "\n";
    // }