// import express dan routing
import express from "express";
import router from "./routes/api.js";

// Membuat object express
const app = express();

// Menggunakan middleware
app.use(express.json());
app.use(express.urlencoded());
app.get("/", (req, res) => {
    res.send("Hello Express")
})
// Menggunakan routing (router)
app.use(router);

// Mendefinisikan port.
app.listen(3000);
