<?php

//diferencia entre dos fechas
$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-10');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a días').'<br>';

//suma o resta fechas
$fecha = date('Y-m-j');
$nuevafecha = strtotime ( '-30 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
 
echo $nuevafecha;

?>
