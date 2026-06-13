const express = require("express")
const app = express();
const port = 5000


app.get("/" , (req , res) => {
    res.send(` <h1> Home page </h1>  `)
})


app.get("/about" , (req , res) => {
    res.send(`
        <h1>about us</h1> 
        <p> Satya Nadella. Satya Nadella is Chairman and Chief Executive Officer of Microsoft. Before being named CEO in February 2014, 
        Nadella held leadership roles in both enterprise and consumer businesses across the company. </p>  `
    )
})

app.get("/contact" , (req , res) => {
    res.send(`
        <h1>Contact Us</h1>
        <p>Email: contact@innovateweb.com</p>
        <p>Phone: +20 100 000 0000</p>
    `
    )
})

app.get("/products" , (req , res) => {
    res.send(`
        <h1>Our Products</h1>
        <ul>
            <li>Website Development</li>
            <li>Mobile Apps</li>
            <li>UI/UX Design</li>
        </ul>
    `
    )
})


app.listen(port , ()=>{
    console.log("server ruuning")
})