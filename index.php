<?php 

//connect to db
$connect = mysqli_connect('localhost', 'root' , '' , 'groceries_list');

//check connection
if(!$connect){
    echo 'Connection Error:' . mysqli_connect_error(); 
}

//query for get all groceries list
$sql = 'SELECT item, quantity, price FROM grocery';

//get result from db
$result = mysqli_query($connect, $sql);

//fetch result rows as array
$groceries = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($connect);

print_r($groceries);
?>


<!DOCTYPE html>
<html>
    
    <?php  include('template/header.php'); ?>    
    <?php  include('template/footer.php'); ?>    
    

</html>