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
        '<li>/user/{id}</li>'+
         '<li>/users</li>' +
         '<ul>'
    );
});

//get list of users
app.get('/users' , (req,res)=> {
    console.log("users route request...");

    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '123456789',
        database: 'ronen'
    });


    const queryString = "SELECT * FROM user_tbl";


    connection.query(queryString ,(err , rows, fields)=>{
        if (err){
            console.log("Faild to query for users " + err);
            res.sendStatus(500);
            return;
        }
        console.log("user fetched successfully");
        //map

        const users = rows.map((row)=>{
            return {
                firstName : row.first_name,
                lastName  : row.last_name
            }
        });
        res.json(users);
    });

});


//get user by id
app.get('/user/:id' , (req,res)=> {
    console.log("user route request with id" + req.params.id);

    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '123456789',
        database: 'ronen'
    });


    const userId = req.params.id;
    const queryString = "SELECT * FROM user_tbl WHERE id = ?";


    connection.query(queryString ,[userId] ,(err , rows, fields)=>{
        if (err){
            console.log("Faild to query for users " + err);
            res.sendStatus(500);
            return;
        }
        console.log("user fetched successfully");
        //map

        const users = rows.map((row)=>{
           return {
               firstName : row.first_name,
               lastName  : row.last_name
               }
        });
        res.json(users);
    });


    //res.end();
});



app.listen(3000, () => console.log('Server running on port 3000'));