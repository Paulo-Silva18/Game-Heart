CREATE DATABASE game_heart;
USE game_heart;

CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    imagem_url VARCHAR(255)
);

ALTER TABLE produtos ADD COLUMN status VARCHAR(20) DEFAULT 'disponivel';
