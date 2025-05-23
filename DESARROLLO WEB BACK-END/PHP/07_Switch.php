// SWITCH // 
<?php
// Definimos una variable con el día de la semana
$dia = "lunes";

// Usamos switch para tomar decisiones según el valor de la variable
switch ($dia) {
    case "lunes":
        echo "Hoy es lunes. Comienza la semana.";
        break;
    case "martes":
        echo "Hoy es martes. Segundo día laboral.";
        break;
    case "miércoles":
        echo "Hoy es miércoles. Mitad de semana.";
        break;
    case "jueves":
        echo "Hoy es jueves. ¡Ya queda poco!";
        break;
    case "viernes":
        echo "Hoy es viernes. Casi es fin de semana.";
        break;
    case "sábado":
    case "domingo":
        echo "Es fin de semana. ¡A descansar!";
        break;
    default:
        echo "Día no válido.";
        break;
}

/*
  ▪️ Switch: estructura de control que evalúa una expresión
     y ejecuta bloques de código dependiendo del valor.

  ▪️ Case: define cada posible valor que puede tomar la variable.

  ▪️ Break: evita que continúe evaluando otros casos tras una coincidencia.

  ▪️ Default: se ejecuta si ningún caso coincide con el valor evaluado.
*/
?>
