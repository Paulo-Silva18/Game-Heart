<?php
    // Roteador Principal
    if(isset($_GET["fun"])){
        $fun = $_GET["fun"];

        if($fun == "cadastrar"){
            include_once("controle/CadastrarProduto_class.php");
            $pag = new CadastrarProduto();
        } 
        // ADICIONE ESTE BLOCO NOVO
        elseif($fun == "comprar"){
            include_once("controle/ComprarProduto_class.php");
            $pag = new ComprarProduto();
        }
        // -------------------------
        else {
            include_once("controle/ListarProduto_class.php");
            $pag = new ListarProduto();
        }
    } else {
        include_once("controle/ListarProduto_class.php");
        $pag = new ListarProduto();
    }
?>