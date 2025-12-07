<?php
class ConnectionFactory{
    public $con = null;
    public $dbType = "mysql";
    public $host = "localhost";
    public $user = "treinador";
    public $senha = "SUA_SENHA_AQUI"; // Verifique se sua senha é essa mesmo
    public $db = "game_heart";
    public $persistente = false;

    public function getConnection(){
        try{
            $this->con = new PDO(
                $this->dbType.":host=".$this->host.";dbname=".$this->db,
                $this->user,
                $this->senha,
                array(PDO::ATTR_PERSISTENT => $this->persistente, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            return $this->con;
        } catch(PDOException $ex){
            echo "Erro: " . $ex->getMessage();
        }
    }
}
?>