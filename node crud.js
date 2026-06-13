// const express = require("express");
// const mysql = require("mysql");
// const app = express();
// const port = 5000;
// const db = mysql.createConnection({
//     host: "localhost",
//     user: "root",
//     password: "",
//     database: "we_db"
// });

// app.use(express.json());

// db.connect((err) => {
//     if (err) {
//         console.log(err);
//     } else {
//         console.log("Database connected successfully");
//     }
// });

// app.get("/products", (req, res) => {
//     const sql = "SELECT * FROM products";
//     db.query(sql, (err, data) => {
//         if (err) {
//             return res.json(err);
//         } else {
//             return res.json(data);
//         }

//     });
// });

// app.get("/products/:id", (req, res) => {
//     const sql = "SELECT * FROM products WHERE id=?";
//     const id = req.params.id;
//     db.query(sql, [id], (err, data) => {
//         if (err) {
//             return res.json(err);
//         } else {
//             return res.json(data);
//         }
//     });
// });

// app.post("/products", (req, res) => {
//     const sql =
//         "INSERT INTO products(name, price, category) VALUES (?,?,?)";
//     const values = [
//         req.body.name,
//         req.body.price,
//         req.body.category
//     ];
//     db.query(sql, values, (err, data) => {
//         if (err) {
//             return res.json(err);
//         } else {
//             return res.json(data);
//         }
//     });
// });

// app.put("/products/:id", (req, res) => {
//     const sql =
//         "UPDATE products SET name=?, price=?, category=? WHERE id=?";
//     const id = req.params.id;
//     const values = [
//         req.body.name,
//         req.body.price,
//         req.body.category,
//         id
//     ];
//     db.query(sql, values, (err, data) => {
//         if (err) {
//             return res.json(err);
//         } else {
//             return res.json(data);
//         }
//     });
// });

// app.delete("/products/:id", (req, res) => {
//     const sql = "DELETE FROM products WHERE id=?";
//     const id = req.params.id;
//     db.query(sql, [id], (err, data) => {
//         if (err) {
//             return res.json(err);
//         } else {
//             return res.json(data);
//         }
//     });
// });

// app.listen(port, () => {
//     console.log(`Server running on port ${port}`);
// });

const express = require("express")
const app = express();
const port = 5000
const mysql = require("mysql")
const db = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "we_db"
});

console.log("MySQL Pool is ready 🚀");
app.use(express.json())


app.get("/products" , (req,res)=>{
    const sql = "SELECT * FROM products"
    db.query(sql , (err,data)=>{
        if(err){
            return res.json(err)
        }
        else
            return res.json(data)
    })
})

app.get("/products/:id" , (req,res)=>{
    const sql = "SELECT * FROM products where id =?"
    const id = req.params.id
    db.query(sql , [id], (err,data)=>{
        if(err){
            return res.json(err)
        }
        else
            return res.json(data)
    })
})

app.post("/products" , (req,res)=>{
    const sql = "INSERT INTO products(title, price) VALUES (?,?)"
    const value = [
        req.body.title , 
        req.body.price
    ]
    db.query(sql , value , (err,data)=>{
        if(err){
            return res.json(err)
        }
        else
            return res.json(data)
    })
})

app.put("/products/:id" , (req,res)=>{

    const sql = "UPDATE products SET title=?, price=? WHERE id=?"

    const id = req.params.id

    const value = [
        req.body.title,
        req.body.price,
        id
    ]

    db.query(sql , value , (err,data)=>{
        if(err){
            return res.json(err)
        }
        return res.json(data)
    })

})

app.delete("/products/:id" , (req,res)=>{
    const sql = "DELETE FROM products WHERE id=?"
    const id = req.params.id
    db.query(sql ,[id] , (err,data)=>{
        if(err){
            return res.json(err)
        }
        else
            return res.json(data)
    })
})

app.listen(port , ()=>{
    console.log("server running")
})