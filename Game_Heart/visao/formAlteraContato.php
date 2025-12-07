<HTML>
	<HEAD>
		<TITLE> Alterar Produto </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H1> Alterar Produto </H1>
		
		<FORM action="contato.php?fun=alterar" method="POST">
			
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $cont->getId() . "'"; ?> />
			
			<LABEL for="nome_produto"> Nome do produto: </LABEL> 
			<INPUT type="text" id="nome_produto" name="nome_produto" 
			<?php echo "value='" . $cont->getNome_Produto() . "'"; ?> /> <br />
			
			<LABEL for="descricao"> Descrição: </LABEL> 
			<INPUT type="text" id="descricao" name="descricao" 
			<?php echo "value='" . $cont->getDescricao() . "'"; ?>/> <br />
			
			<LABEL for="preco"> Preço: </LABEL> 
			<INPUT type="text" id="preco" name="preco" 
			<?php echo "value='" . $cont->getPreco() . "'"; ?>/> <br />
			
			<INPUT type="submit" name="enviar" value="enviar" />
			
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>
		
	</BODY>

</HTML>