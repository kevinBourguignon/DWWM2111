//import d'express
// const { request, response } = require('express');
const express = require('express');
const bodyParser = require('body-parser')

//application express
const app = express();

// body parser (analyse le contenu du corps des requête)
app.use(bodyParser.urlencoded())
//app.use(bodyParser.)

app.use((req, res, next) =>{
    let method = req.method;
    let path = req.originalUrl;
    console.log(`${method} ${path}`);
    next()
});

// gestion des fichiers statiques
app.use('/public', express.static(__dirname + '/public'))

// import des routes (voir le fichier routes/index.js)
const router = require('./routes');

// association des routes
app.use('/', router)

app.listen(80, () => {
    console.log("Serveur prêt (http://localhost)")
});
