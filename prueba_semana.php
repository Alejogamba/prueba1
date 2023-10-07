<?php
$dia = "martes";

switch ($dia) {
    case "lunes":
        echo "Hoy es lunes, el comienzo de la semana laboral.";
        break;
    case "martes":
        echo "Hoy es martes, continuamos la semana.";
        break;
    case "miércoles":
        echo "Hoy es miércoles, mitad de semana.";
        break;
    case "jueves":
        echo "Hoy es jueves, casi llegamos al fin de semana.";
        break;
    case "viernes":
        echo "Hoy es viernes, el último día laboral.";
        break;
    case "sábado":
        echo "Hoy es sábado, día de descanso.";
        break;
    case "domingo":
        echo "Hoy es domingo, un buen día para relajarse.";
        break;
    default:
        echo "Ese no es un día válido.";
        break;
    }
    ?>
