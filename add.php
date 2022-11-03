<?php 

include('config/db_connect.php');

$item = $quantity = $price = '';
$errors = array('item'=>'', 'quantity'=>'', 'price'=>'');

if(isset($_POST['submit'])){

    //item name
    if(empty($_POST['item'])){
        $errors['item'] = 'name item is required <br />';
    } else {
        $item = $_POST['item'];
        //if(preg_match('/^[a-zA-Z\s]+$/', $item)){
           echo htmlspecialchars($_POST['item']);
    }
     
     //item quantity
     if(empty($_POST['quantity'])){
        $errors['quantity'] =  'enter item quantity <br />';
    } else {
       $price = $_POST['quantity'];
       echo htmlspecialchars($_POST['quantity']);
       }
    

    //item price
    if(empty($_POST['price'])){
        $errors['price'] =  'enter item price <br />';
    } else {
       $price = $_POST['price'];
       echo htmlspecialchars($_POST['price']);
       }
    if(array_filter($errors)){
       // echo 'error in the form';
    }else {
        
        $item = mysqli_real_escape_string($connect, $_POST['item']);
        $quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
        $price = mysqli_real_escape_string($connect, $_POST['price']);
        
        //insert into sql
        $sql = "INSERT INTO grocery (item,quantity,price) VALUES('$item', '$quantity', '$price')";

        //save to sql
        if(mysqli_query($connect, $sql)){
            header('Location: index.php');
        } else {
            echo 'querry error' . mysqli_error($connect);
        }


        
    }
}

?>


<!DOCTYPE html>
<html>
    
    <?php  include('template/header.php'); ?>    

    <section class="container">
        <h4 class="center">Add Grocery</h4>
        <form action="add.php" class="white" method="POST">
            <label class="white-text">Item:</label>
            <input type="text" name="item" class=""value="<?php echo $item ?>">
            <div class="red-text"><?php echo $errors['item']?></div>
            <label class="white-text">Quantity(kg/L/pc):</label>
            <input type="text" name="quantity" value="<?php echo $quantity ?>">
            <div class="red-text"><?php echo $errors['quantity']?></div>
            <label class="white-text">Price(php):</label>
            <input type="text" name="price" value="<?php echo $price ?>">
            <div class="red-text"><?php echo $errors['price']?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php  include('template/footer.php'); ?>    
    

</html>