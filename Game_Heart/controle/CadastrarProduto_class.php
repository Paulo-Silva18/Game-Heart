<?php
include_once("modelo/ProdutoDAO_class.php");

class CadastrarProduto {
    public function __construct(){
        if(isset($_POST["enviar"])){
            
            $p = new Produto();
            $p->setNome_Produto($_POST["nome_produto"]);
            $p->setDescricao($_POST["descricao"]);
            $p->setPreco($_POST["preco"]);

            // Lógica de Upload de Imagem
            if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
                $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
                $novo_nome = md5(time()) . "." . $extensao;
                $diretorio = "visao/img/"; // Pasta onde salva
                
                move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome);
                $p->setImagem_Url($novo_nome);
            } else {
                $p->setImagem_Url("placeholder.png"); // Imagem padrão se falhar
            }

            $dao = new ProdutoDAO();
            $dao->cadastrar($p);

            $status = "Item cadastrado com sucesso!";
            
            // Redireciona para listagem
            $dao = new ProdutoDAO();
            $lista = $dao->listar();
            include_once("visao/listaProdutos.php");

        } else {
            include_once("visao/formCadastroProduto.php");
        }
    }
}
?>