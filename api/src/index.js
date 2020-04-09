const express = require("express");
const mysql = require("mysql");

const app = express();

const connection = mysql.createConnection({
    host: '172.17.0.2',
    user: 'root',
    password: 'root',
    database: 'programadorabordo'
});

connection.connect();

app.listen(9001, '0.0.0.0', ()=>{
    console.log('Listening on port 9001');
});

app.get("/products", (req,res)=>{
    connection.query('SELECT * FROM products', (error, results) => {
        if (error) {
            throw error
        };

        res.send(results.map( item => ({name: item.name, price: item.price})));
    });
});

