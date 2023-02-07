<?php

$contra_entrar="1234";
$usu_entrar="Juan";

$el_usuario=isset($_GET['usu']) ? $_GET['usu'] : $_POST['usu'];
$la_contra=isset($_GET['contra']) ? $_GET['contra'] : $_POST['contra'];

if ($el_usuario==$usu_entrar && $la_contra==$contra_entrar) {
  echo 'autorizado';
} else {
  echo 'fallo';
}



?>