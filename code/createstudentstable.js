var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "Kji1357924680",
  database: "tentodatabase"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "CREATE TABLE students (Name VARCHAR(255) NOT NULL, Username VARCHAR(255) PRIMARY KEY NOT NULL, Email VARCHAR(255) NOT NULL, Password VARCHAR(255) NOT NULL, Level VARCHAR(255) NOT NULL)";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
  });
});