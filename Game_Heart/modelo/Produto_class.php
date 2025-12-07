<?php
class Produto {
    private $id;
    private $nome_produto;
    private $descricao;
    private $preco;
    private $imagem_url;

    public function getId(){ return $this->id; }
    public function setId($id){ $this->id = $id; }

    public function getNome_Produto(){ return $this->nome_produto; }
    public function setNome_Produto($nome){ $this->nome_produto = $nome; }

    public function getDescricao(){ return $this->descricao; }
    public function setDescricao($desc){ $this->descricao = $desc; }

    public function getPreco(){ return $this->preco; }
    public function setPreco($preco){ $this->preco = $preco; }

    public function getImagem_Url(){ return $this->imagem_url; }
    public function setImagem_Url($img){ $this->imagem_url = $img; }
}
?>