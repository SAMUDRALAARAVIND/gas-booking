const express = require('express');
const app = express();

app.use(["/customer", "/customer/signup","/delivery", "/delivery/signup"], express.static("JS_Files"));

app.get("/", (req, res) => {
    res.send("This is our home page");
})

app.get("/customer", (req, res) => {
    res.sendFile(__dirname + "/customer/login.html");
})

app.get("/customer/signup", (req, res) => {
    res.sendFile(__dirname + "/customer/registration.html");
})

app.get("/delivery", (req, res) => {
    res.sendFile(__dirname + "/delivery/login.html");
})

app.get("/delivery/signup", (req, res) => {
    res.sendFile(__dirname + "/delivery/registration.html");
})




app.listen(3000);