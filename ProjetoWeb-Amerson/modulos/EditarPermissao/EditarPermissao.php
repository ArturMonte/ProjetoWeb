<?php
$idgrupo = $_GET[‘idgrupo’];
$modulos = Modulo::listar();
If($modulos){
foreach($modulos as $modulo) {
echo “<h3>” . $modulo->getDescricao().“</h3>”;
}
}

    foreach($modulos as $modulo) {
$permissoes= Permissao::listar();
if($permissoes){
foreach($permissoes as $permissao) {
$verifica = Operacao::verificaPermissao($idgrupo, $modulo->getDiretorio(), $acao->getAcao());
?>
<input <?php if($verifica){ echo 'checked disabled';}?> type="checkbox" name='listaPermissao[]‘ value=''>
<?php echo $acao->getDescricao()?>
<?php
}
}
}
?>