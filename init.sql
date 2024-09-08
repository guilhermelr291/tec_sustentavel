
CREATE TABLE IF NOT EXISTS produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);

INSERT INTO produto (nome, valor) VALUES ('Cadeira', 99);
INSERT INTO produto (nome, valor) VALUES ('Mouse', 50);
INSERT INTO produto (nome, valor) VALUES ('Teclado', 50);
INSERT INTO produto (nome, valor) VALUES ('Violao', 449);
