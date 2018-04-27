const express = require('express');
const app = express();
const mysql = require('mysql');


/*app.get('/' , (req,res)=> {


});*/

app.get('/', (req, res) => {

    console.log("Console log : API is running");
    console.log("new requset with route : [/]");


    res.send('hello this is default route API <br> ' +
        'Use this : ' +
        '<ul>' +
        '<li>/photo/{id}</li>'+
         '<li>/all</li>' +
         '<ul>'
    );



});

//get list of users
app.get('/users' , (req,res)=> {
    console.log("users route request...");

    res.json({
        anObject: { item1: "item1val", item2: "item2val" },
        anArray: ["item1", "item2"],
        another: "item"
    });

});


//get user by id
app.get('/user/:id' , (req,res)=>{
    console.log("user route request with id" + req.params.id);



    res.end();
});



app.listen(3000, () => console.log('Server running on port 3000'));