<?php  
    include 'includes/sidebar.php';
    include 'includes/header.php';
    ?>

    <?php  

    if (isset($_POST['addinvent'])) {

        $productnumber = $_POST['pnumber'];
        $productname = $_POST['pname'];
        $inventoryordered = $_POST['iordered'];
        $inventoryshipped = $_POST['ishipped'];
        $inventoryreceived = $_POST['ireceived'];
        $unitprice = $_POST['uprice'];

        $check = $conn->query("SELECT pnumber from inventory_tbl WHERE product_name='$productname' OR unit_price ='$unitprice'");
        if($check->num_rows > 0){
            echo "<script> window.alert('Inventory already exists') </script>";
        }
        else{
            $sql = $conn->prepare("INSERT INTO inventory_tbl (product_number ,product_name,inventory_ordered,inventory_shipped,inventory_received,unit_price) VALUES(?,?,?,?,?,?)");
            $sql->bind_param("ssssss",$productnumber,$productname,$inventoryordered,$inventoryshipped,$inventoryreceived,$unitprice);
            if($sql->execute() === true){
                echo "<script> window.alert('Inventory Item Added') </script>";
            }
        else{
            echo "<script> window.alert('Something went wrong') </script>";
    }
    }   
    }
    ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Inventory</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" id="pnumber" name="pnumber"
                                            placeholder="Product Number">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="pname" name="pname"
                                            placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" id="iordered" name="iordered"
                                        placeholder="Inventory Ordered">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="ishipped" name="ishipped"
                                            placeholder="Inventory Shipped">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="ireceived" name="ireceived" placeholder="Inventory Received">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="uprice" name="uprice" placeholder="Unit Price">
                                    </div>
                                </div>
                                
                                <button type="submit" name="addinvent" class="btn btn-primary btn-user btn-block">
                                    Add Inventory
                                </button>
                                
                            
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php  include 'includes/footer.php';  ?>