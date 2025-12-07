<?php
include_once("modelo/ProdutoDAO_class.php");

class ListarProduto {
    public function __construct(){
        $dao = new ProdutoDAO();
        $lista = $dao->listar();
        include_once("visao/listaProdutos.php");
    }
}
?>