<?php include "static/header.php" ?>
<div class="products-container">
<?php 
$sql1 = $conn->query("SELECT DISTINCT category FROM menuitems_tbl ");
if($sql1->num_rows > 0){
    while($rs = $sql1->fetch_assoc()){
        
        ?>
        <div class="breakfast">
        <h2 class="text-center"><?php echo $cat = $rs['category'] ?></h2>
        <p class="text-center" id="quote">
            Welcome to Ruby's Cafe delicious universe. Everything from our Big on Breakfast, Perfected Drinks, Decadent to your Generous Big Meals Right here at your fingertips. ORDER NOW.
        </p>
        <div class="row">
        <?php 
        $sql = $conn->query("SELECT * FROM menuitems_tbl where category='$cat'");
        if($sql->num_rows > 0){
            while($row = $sql->fetch_assoc()){
                
                ?>
                <div class="col-md-3">
                <div class="m-img" style="background-image: url('<?php echo $IMG_URL; ?><?php echo $row['image'] ?>');"></div>
                <h3 class="text-center item"><?php echo $row['item'] ?></h3>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add to Order</a>
                </div>
                <?php  
            }
        } 
        ?>
        </div>
        
        </div>
        <?php  
    }
} 
?>


</div>
<?php include "static/footer.php" ?>
