<?php 

//connect to db
$connect = mysqli_connect('localhost', 'root' , '' , 'groceries_list');

//check connection
if(!$connect){
    echo 'Connection Error:' . mysqli_connect_error(); 
}

?>