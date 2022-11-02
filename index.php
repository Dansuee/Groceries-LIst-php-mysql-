<?php 

//connect to db
$connect = mysqli_connect('localhost', 'root' , '' , 'groceries_list');

//check connection
if(!$connect){
    echo 'Connection Error:' . mysqli_connect_error(); 
}

//query for get all groceries list
$sql = 'SELECT item, quantity, price FROM grocery ORDER BY create_at';

//get result from db
$result = mysqli_query($connect, $sql);

//fetch result rows as array
$groceries = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($connect);

?>


<!DOCTYPE html>
<html>
    
    <?php  include('template/header.php'); ?>    

    <h4 class="center">Groceries</h4>
    
    <div class="container">
        <div class="row">
            <?php foreach($groceries as $grocery) {?>
                
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6>name: <?php echo htmlspecialchars($grocery['item']); ?></h6>
                            <div>quantity: <?php echo htmlspecialchars($grocery['quantity']);?></div>
                            <div>price: <?php echo htmlspecialchars($grocery['price']);?>php</div>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>    

        </div>
    </div>

    <?php  include('template/footer.php'); ?>    
    

</html>