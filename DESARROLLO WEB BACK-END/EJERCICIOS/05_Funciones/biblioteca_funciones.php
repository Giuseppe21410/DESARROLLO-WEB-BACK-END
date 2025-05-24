<?php
// Calcular porcentaje:
function porcentaje($cantidad,$porcentaje){
    return (float) $cantidad*$porcentaje/100;
}

// Calcular si es par o impar:
function par_impar($cantidad){
    if ($cantidad %2== 0){
        return "Par";
    }else{
        return "Impar";
    }
}
// Calcular factorial:
function factorial($cantidad){
   $numero_inicial=1;
   for ($i= 1; $i<=$cantidad; $i++){
    $numero_inicial*=$i;
   }
   return $numero_inicial;
}

// Aproximación decimal: 
function aproximar($cantidad,$decimal){
    return round($cantidad, $decimal);
}

?>