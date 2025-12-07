<?php include_once("visao/topo.php"); ?>

<section class="hero">
    <div class="hero-content">
        <h2>Seu jogo faz a diferença.</h2>
        <p>Compre itens incríveis e ajude causas sociais.</p>
    </div>
</section>

<section id="marketplace" class="container">
    <h3>Itens Disponíveis</h3>
    
    <?php if(isset($status)) { echo "<h4 style='color:var(--primary-color); text-align:center;'>$status</h4>"; } ?>

    <div class="item-grid">
        <?php
        if(!empty($lista)){
            foreach($lista as $p){
        ?>
            <div class='item-card'>
                <img src='visao/img/<?php echo $p->getImagem_Url(); ?>' alt='Imagem do Produto'>
                <div class='item-info'>
                    <h4><?php echo $p->getNome_Produto(); ?></h4>
                    <p class='price'>R$ <?php echo number_format($p->getPreco(), 2, ',', '.'); ?></p>
                    <a href="index.php?fun=comprar&id=<?php echo $p->getId(); ?>" class="buy-button" style="text-decoration:none; display:inline-block;">Comprar</a>
                </div>
            </div>
        <?php
            }
        } else {
            echo "<p style='color:white; text-align:center;'>Nenhum item cadastrado ainda.</p>";
        }
        ?>
    </div>
</section>

<section id="causas" class="container">
    <h3>Transformando o Mundo Real</h3>
    <p>Conheça as causas sociais que apoiamos.</p>
</section>

<?php include_once("visao/rodape.html"); ?>