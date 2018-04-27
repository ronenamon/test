
const express = require('express');
const mysql = require('mysql');
const router = express.Router();



//connection DB
const pool = mysql.createPool({
        connectionLimit: 10 ,
        host: 'localhost',
        user: 'root',
        password: '123456789',
        database: 'ronen'
});
function getConncetion(){
    return pool;
}



//get list of users
router.get('/users' , (req,res)=> {
    console.log("users route request...");

    const connection = getConncetion();

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
router.get('/user/:id' , (req,res)=> {
    console.log("user route request with id = " + req.params.id);

    const connection = getConncetion();


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




module.exports = router;
