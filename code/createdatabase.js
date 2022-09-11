var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "Kji1357924680"
});
con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    con.query("CREATE DATABASE tentodatabase", function (err, result) {
      if (err) throw err;
      console.log("Database created");
    });
  });