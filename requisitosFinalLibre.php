<?php

// Ejercicio 1 - Unidad 6.

/**
 * Punto --> a
 * @param int $zona
 * @param string $estadoCivil
 * @return int
 */

function bono ($zona, $estadoCivil) {
    $sueldo = 0;
    if ($zona == 1) {
        $sueldo = 60000;
    }
    elseif ($zona == 2) {
        $sueldo = 32000;
    }
    elseif ($zona == 3) {
        $sueldo = 45000;
    }
    else {
        $sueldo = 38000;
    }
    // Incremento 
    if ($estadoCivil == "c") {
        $incremento = (5 * $sueldo) / 100;
        $sueldo = $sueldo + $incremento;
    }
    return $sueldo;
}

// Programa Principal
// Punto --> b

$totalBonos = 0;
$casados = 0;
$porcentaje = 0; 
echo "Ingrese cantidad de empleados que posee la petrolera: ";
$nEmpleados = trim(fgets(STDIN));
if ($nEmpleados != 0) {
    for ($i=0; $i < $nEmpleados ; $i++) { 
        echo "Ingrese zona: ";
        $zone = trim(fgets(STDIN));
        echo "Ingrese estado civil: ";
        $estadocivil = trim(fgets(STDIN));
        $estadocivil = strtolower($estadocivil);
        $bono = bono($zone, $estadocivil);
        // Punto --> i
        $totalBonos = $totalBonos + $bono;
        // Punto --> ii
        if ($estadocivil == "c") {
            $casados++;
            $porcentaje = ($casados * 100) / $nEmpleados;
        }
    }
    echo "Total de sueldos en bonos: $$totalBonos.\n";
    echo "Porcentaje de casados: %$porcentaje.\n";
}
else {
    echo "No se registraron empleados.";
}

// Ejercicio 2 - Arrays.

/**
 * Punto --> a
 * @return array
 */

 function pets () {
    $pets[0] = array (
        "name" => "Gonzo",
        "age" => 9,
        "type" => "perro" 
    );
    $pets[1] = array (
        "name" => "Peggy",
        "age" => 3,
        "type" => "cerdo" 
    );
    $pets[2] = array (
        "name" => "Harry",
        "age" => 4,
        "type" => "hamster" 
    );
    return $pets;
 }

 /**
  * Punto --> b
  * @param array $pets
  */

  function showPets ($pets) {
    foreach ($pets as $key => $value) {
        $name = $pets[$key]["name"];
        $type = $pets[$key]["type"];
        $age = $pets[$key]["age"];
        $key = $key + 1;
        echo "Mascota $key --> $name: $type de $age años.\n";
    }
  }

  /** 
   * Punto --> c
   * @param array $pets
   * @param int $edad
   */

    function primerMenor($pets, $edad) {
        foreach ($pets as $pet) {
            if ($pet["age"] < $edad) {
                return $pet;
            }
        }
        return -1;
    }

  // Punto --> d

  echo "Bienvenida/o a Pets Veterinaria.\n";
  echo "Nuestras mascotas son: \n";
  $dataPets = pets();
  showPets($dataPets);
  echo "Ingrese edad para encontrar mascota menor: ";
  $old = trim(fgets(STDIN));
  $menorMascota = primerMenor($dataPets, $old);
  if ($menorMascota != -1) {
    echo "Datos de mascota menor a la edad ingresada: \n";
    $namePet = $menorMascota["name"];
    $agePet = $menorMascota["age"];
    $typePet = $menorMascota["type"];
    echo "Nombre: $namePet.\n";
    echo "Edad: $agePet.\n";
    echo "Tipo: $typePet.\n";
  }
  else {
    echo "No se encontro mascota menor a la edad ingresada.";
  }

?>
