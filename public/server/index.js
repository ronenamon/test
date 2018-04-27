const express = require('express');
const app = express();
const morgan = require('morgan');




app.use(morgan('short'));




//Router
const router = require('./routes/user.js');
app.use(router);




app.get('/', (req, res) => {

    console.log("Console log : API is running");
    console.log("new requset with route : [/]");


    res.send('hello this is default route API <br> ' +
        'Use this : ' +
        '<ul>' +
        '<li>/user/{id}</li>'+
         '<li>/users</li>' +
         '<ul>'
    );
});

app.listen(3000, () => console.log('Server running on port 3000'));