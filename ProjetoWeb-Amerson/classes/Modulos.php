<?php
if($modulo){
if(file_exists(“modulos/”.$modulo.”/”.$acao.”.php”)){
$permissao = verificaPermissao($_SESSION[‘id_grupo’], $modulo, $acao);
if($permissao ){
include(“modulos/”.$modulo.”/”.$acao.”.php”);
} else{
echo “Você não tem permissão para acessar este modulo”;
}
}
}else{
echo “Página Solicitada não Existe”;
}
?>