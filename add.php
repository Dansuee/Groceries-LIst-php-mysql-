<?php 


if(isset($_POST['submit'])){

    //item name
    if(empty($_POST['item'])){
        echo 'name item is required <br />';
    } else {
        $item = $_POST['item'];
        //if(preg_match('/^[a-zA-Z\s]+$/', $item)){
            echo htmlspecialchars($_POST['item']);
    }
     
    //item price
    if(empty($_POST['price'])){
        echo 'enter item price <br />';
    } else {
       $price = $_POST['price'];
       echo htmlspecialchars($_POST['price']);
       }
    
}

?>


<!DOCTYPE html>
<html>
    
    <?php  include('template/header.php'); ?>    

    <section class="container grey-text">
        <h4 class="center">Add a Groceries</h4>
        <form action="add.php" class="white" method="POST">
            <label>Item:</label>
            <input type="text" name="item">
            <label>Price:</label>
            <input type="text" name="price">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php  include('template/footer.php'); ?>    
    

</html>