#Desafio de Projeto - Docker DIO
## Aplicação Web
- Criar uma aplicação WEB usando Docker e Docker Compose, utilizado node, mysql e php
 
##Como rodar
Acesse a pasta ./api no terminal e execute:
```
npm install
```

### Construindo as imagens

Acesse a pasta raíz do projeto e construa cada imagem (MySQL, Node API e PHP):
```
docker-compose up -d 
```

### Agora faça o restore do banco:
```
docker exec -i mysql-cursos-container mysql -uroot -pADM_1234  -e "CREATE DATABASE IF NOT EXISTS cursosti;" 
```
```
docker exec -i mysql-cursos-container mysql -uroot -pADM_1234 cursosti -e "CREATE TABLE IF NOT EXISTS cursos( id INT(11) AUTO_INCREMENT,   nome varchar(255),   preco DECIMAL(10,2),   PRIMARY KEY(id));" 
```
```
docker exec -i mysql-cursos-container mysql -uroot -pADM_1234 cursosti -e "INSERT INTO cursos (nome, preco) values ('Java',1000.00);" 
```
```
docker exec -i mysql-cursos-container mysql -uroot -pADM_1234 cursosti -e "INSERT INTO cursos (nome, preco) values ('Kotlin',1050.00);" 
```
