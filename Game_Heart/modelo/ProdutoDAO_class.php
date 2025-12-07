<?php
include_once("ConnectionFactory_class.php");
include_once("Produto_class.php");

class ProdutoDAO {
    public $con = null;

    public function __construct(){
        $conF = new ConnectionFactory();
        $this->con = $conF->getConnection();
    }

    public function cadastrar($prod){
        try{
            $stmt = $this->con->prepare(
                "INSERT INTO produtos(nome_produto, descricao, preco, imagem_url)
                 VALUES (:nome, :desc, :preco, :img)"
            );
            $stmt->bindValue(":nome", $prod->getNome_Produto());
            $stmt->bindValue(":desc", $prod->getDescricao());
            $stmt->bindValue(":preco", $prod->getPreco());
            $stmt->bindValue(":img", $prod->getImagem_Url());
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro: " . $ex->getMessage();
        }
    }

    // Busca um produto específico pelo ID
    public function buscarPorId($id){
        try{
            $stmt = $this->con->prepare("SELECT * FROM produtos WHERE id = :id");
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($linha){
                $p = new Produto();
                $p->setId($linha["id"]);
                $p->setNome_Produto($linha["nome_produto"]);
                $p->setDescricao($linha["descricao"]);
                $p->setPreco($linha["preco"]);
                $p->setImagem_Url($linha["imagem_url"]);
                return $p;
            }
            return null;
        } catch(PDOException $ex){
            echo "Erro: " . $ex->getMessage();
        }
    }

    // Muda o status do produto para 'vendido'
    public function marcarComoVendido($id){
        try{
            $stmt = $this->con->prepare("UPDATE produtos SET status = 'vendido' WHERE id = :id");
            $stmt->bindValue(":id", $id);
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro: " . $ex->getMessage();
        }
    }
    
    // ATUALIZE TAMBÉM O MÉTODO LISTAR PARA SÓ MOSTRAR DISPONÍVEIS
    public function listar(){
        try{
            // Adicionei WHERE status = 'disponivel'
            $dados = $this->con->query("SELECT * FROM produtos WHERE status = 'disponivel' ORDER BY id DESC");
            $lista = array();
            foreach($dados as $linha){
                $p = new Produto();
                $p->setId($linha["id"]);
                $p->setNome_Produto($linha["nome_produto"]);
                $p->setDescricao($linha["descricao"]);
                $p->setPreco($linha["preco"]);
                $p->setImagem_Url($linha["imagem_url"]);
                $lista[] = $p;
            }
            return $lista;
        } catch(PDOException $ex){
            echo "Erro: " . $ex->getMessage();
        }
    }
}
?>