<?php

include('config/db_connect.php');

if(isset($_POST['delete'])){
    $delete_id = mysqli_real_escape_string($connect, $_POST['delete_id']);
    $sql = "DELETE FROM grocery WHERE id = $delete_id";

    if(mysqli_query($connect, $sql)){
        header('Location: index.php');
    } else {
        echo 'query error' . mysqli_error($connect);
    }
}


if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM grocery WHERE id = $id";

    $result = mysqli_query($connect, $sql);

    $grocery = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($connect);
}

?>


<!DOCTYPE html>
<html>

<?php  include('template/header.php'); ?>    

<div class="container center">
    <?php if($grocery): ?>
                
                <p>Name:</p>
        <h5><?php echo htmlspecialchars($grocery['item']);?></h5>
                <p>Quantity:</p>
        <h5><?php  echo htmlspecialchars($grocery['quantity']);?></h5> 
                <p>Price:</p>
        <h5><?php  echo htmlspecialchars($grocery['price']);?>php</h5> 
                <small>Added on:</small>
        <h6><?php echo date($grocery['create_at']); ?></h6>

        <!-- DELETE FORM -->
        <form action="details.php" method="POST">
            <input type="hidden" name="delete_id" value="<?php echo $grocery['id']?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

     <?php else: ?>       
        <h5>No such grocery exist!</h5>
     <?php endif; ?>   
</div>

<?php  include('template/footer.php'); ?>  

</html>