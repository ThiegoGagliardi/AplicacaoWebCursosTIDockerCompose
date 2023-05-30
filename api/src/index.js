const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
  host: 'mysql-cursos-container',  
  user: 'root',
  password: 'ADM_1234',
  database: 'cursosti'
});

connection.connect();

app.get('/cursos', function(req, res) {
  connection.query('SELECT * FROM cursos', function (error, results) {

    if (error) { 
      res.send('{"nome":"testeCurso","preco":"0"}');
    };

    res.send(results.map(item => ({ nome: item.nome, preco: item.preco })));
  });
});


app.listen(9001, '0.0.0.0', function() {
  console.log('Listening on port 9001');
})