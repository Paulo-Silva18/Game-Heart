<?php
include_once("modelo/ProdutoDAO_class.php");

class ComprarProduto {
    public function __construct(){
        
        // Se confirmou a compra (clicou no botão final)
        if(isset($_POST["confirmar"])){
            $id = $_POST["id"];
            
            $dao = new ProdutoDAO();
            $dao->marcarComoVendido($id);
            
            $status = "Compra realizada com sucesso! A doação foi registrada.";
            
            // Volta para a lista atualizada
            $lista = $dao->listar();
            include_once("visao/listaProdutos.php");
            
        } 
        // Se apenas clicou em "Comprar" na listagem (exibir resumo)
        else if(isset($_GET["id"])){
            $id = $_GET["id"];
            $dao = new ProdutoDAO();
            $produto = $dao->buscarPorId($id);
            
            // Calculando a doação (ex: 15% do valor)
            $porcentagem_doacao = 0.15; 
            $valor_doacao = $produto->getPreco() * $porcentagem_doacao;
            
            include_once("visao/checkout.php");
        }
    }
}
?>