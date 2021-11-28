import {Request, Response} from "express";
import path from "path";


const express = require("express")
const app = express();
const PORT = 3000;

app.use(express.static("public"))
app.use(require('serve-favicon')(path.join(__dirname, 'public', 'turtle.svg')))

app.set("view engine", "ejs")

app.get("/", (req: Request, res: Response) => {
    return res.render("index")
})
app.get("/software", (req: Request, res: Response) => {
    return res.render("applikace")
})
app.get("/novinky", (req: Request, res: Response) => {
    return res.render("novinky")
})



app.listen(PORT, () => {
    console.log("localhost:"+PORT)
})
