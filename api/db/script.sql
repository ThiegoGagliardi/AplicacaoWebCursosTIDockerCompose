CREATE DATABASE IF NOT EXISTS cursosti;

USE cursosti;

CREATE TABLE IF NOT EXISTS cursos(
  id INT(11) AUTO_INCREMENT,
  nome varchar(255),
  preco DECIMAL(10,2),
  PRIMARY KEY(id));

  INSERT INTO cursos (nome, preco) values ("Java",1000.00);
  INSERT INTO cursos (nome, preco) values ("Kotlin",1050.00);
