<?php
	include_once("modelo/ContatoDAO_class.php");
	
	class AlterarContato{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Contato();
				$c->setId($_POST["id"]);
				$c->setNome_Produto($_POST["nome_produto"]);
				$c->setDescricao($_POST["descricao"]);
				$c->setPreco($_POST["preco"]);
				$c->setImagem_Url("123");
				
				$dao = new ContatoDAO();
				$dao->alterar($c);
				
				$status = "Alteração do Contato " . $c->getNome_Produto() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaContato.php");
				
			} else{
			
				$dao = new ContatoDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraContato.php");	
			
			}
		}
	}

?>
