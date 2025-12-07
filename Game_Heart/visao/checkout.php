<?php include_once("visao/topo.php"); ?>

<section class="container form-section">
    <h1>Resumo do Pedido</h1>
    
    <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 30px;">
        <img src="visao/img/<?php echo $produto->getImagem_Url(); ?>" 
             alt="Imagem" 
             style="width: 150px; height: 150px; object-fit: cover; border-radius: 10px; border: 2px solid var(--secondary-color);">
        
        <div>
            <h2 style="color: white;"><?php echo $produto->getNome_Produto(); ?></h2>
            <p style="color: #ccc;"><?php echo $produto->getDescricao(); ?></p>
        </div>
    </div>

    <div style="background-color: #2c2c2c; padding: 20px; border-radius: 10px; border: 1px dashed var(--primary-color);">
        <h3 style="color: var(--primary-color); margin-bottom: 15px;">Transparência Social</h3>
        
        <p style="color: white; font-size: 1.1rem; display: flex; justify-content: space-between;">
            <span>Valor do Item:</span>
            <span>R$ <?php echo number_format($produto->getPreco(), 2, ',', '.'); ?></span>
        </p>
        
        <p style="color: var(--primary-color); font-size: 1.1rem; display: flex; justify-content: space-between; font-weight: bold;">
            <span>Doação para Causa (15%):</span>
            <span>R$ <?php echo number_format($valor_doacao, 2, ',', '.'); ?></span>
        </p>
        
        <hr style="border-color: #444; margin: 15px 0;">
        
        <p style="color: white; font-size: 1.5rem; text-align: right; font-weight: bold;">
            Total a Pagar: R$ <?php echo number_format($produto->getPreco(), 2, ',', '.'); ?>
        </p>
    </div>

    <form action="index.php?fun=comprar" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto->getId(); ?>">
        
        <input type="submit" name="confirmar" value="Confirmar Compra e Doar" class="submit-button">
        
        <div style="text-align:center; margin-top:15px;">
            <a href="index.php" style="color: #888; text-decoration: none;">Cancelar</a>
        </div>
    </form>

</section>

<?php include_once("visao/rodape.html"); ?>