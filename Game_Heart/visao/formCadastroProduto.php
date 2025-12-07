<?php include_once("visao/topo.php"); ?>

<section class="container form-section">
    <h1>Cadastrar Novo Item</h1>
    
    <form action="index.php?fun=cadastrar" method="POST" enctype="multipart/form-data" class="item-form">
        
        <div class="form-group">
            <label for="nome_produto">Nome do Item (Skin/Arma):</label> 
            <input type="text" id="nome_produto" name="nome_produto" required />
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição Detalhada:</label> 
            <textarea id="descricao" name="descricao" rows="4" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço (R$):</label> 
            <input type="number" step="0.01" id="preco" name="preco" required />
        </div>
        
        <div class="form-group">
            <label for="imagem">Imagem do Item:</label>
            <input type="file" id="imagem" name="imagem" required />
        </div>

        <div class="form-group">
            <input type="submit" name="enviar" value="Salvar Item" class="submit-button" />
        </div>
        
    </form>
    
    <div style="text-align:center; margin-top:10px;">
        <a href="index.php" style="color:white;">Cancelar e Voltar</a>
    </div>

</section>

<?php include_once("visao/rodape.html"); ?>