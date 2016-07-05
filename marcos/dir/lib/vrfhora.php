<?php
$vrfhora = Date("H");
if($vrfhora>=18){echo"Boa noite, ";}else
if($vrfhora>=6){echo"Bom dia, ";}else
if($vrfhora<6){echo"Boa noite, ";}
?>