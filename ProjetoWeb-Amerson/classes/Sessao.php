<?php

session_start();

$_SESSION['Nome de Usuário']='Artur Monte';
$_SESSION['Nome do Login']='AMV_01';

print_r($_SESSION);

echo $_SESSION['Nome do Login'];




?>