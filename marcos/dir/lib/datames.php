<?php
//Separa Dados da Data
$userdata	= explode("-", $videos->data);
$userhora	= explode(":", $videos->hora);

if($userdata[1]==1) {$userdatames = 'Janeiro';}else
if($userdata[1]==2) {$userdatames = 'Fevereiro';}else
if($userdata[1]==3) {$userdatames = 'Março';}else
if($userdata[1]==4) {$userdatames = 'Abril';}else
if($userdata[1]==5) {$userdatames = 'Maio';}else
if($userdata[1]==6) {$userdatames = 'Junho';}else
if($userdata[1]==7) {$userdatames = 'Julho';}else
if($userdata[1]==8) {$userdatames = 'Agosto';}else
if($userdata[1]==9) {$userdatames = 'Setembro';}else
if($userdata[1]==10){$userdatames = 'Outubro';}else
if($userdata[1]==11){$userdatames = 'Novembro';}else
if($userdata[1]==12){$userdatames = 'Dezembro';}
?>