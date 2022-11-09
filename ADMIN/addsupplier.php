
    <?php  
    include 'includes/sidebar.php';
    include 'includes/header.php';
    ?>

    <?php  

    if (isset($_POST['addsupplier'])) {
        
        $supplierid = $_POST['id'];
        $suppliername = $_POST['sname'];
        $productname = $_POST['pname'];
        $productprice = $_POST['price'];
        $manufacturer = $_POST['manufacturer'];
        $description = $_POST['description'];

        $check = $conn->query("SELECT supplier_id  from suppliers_tbl WHERE supplier_id ='$supplierid' OR manufacturer='$manufacturer'");
        if($check->num_rows > 0){
            echo "<script> window.alert('Supplier already exists') </script>";
        }
        else{
            $sql = $conn->prepare("INSERT INTO suppliers_tbl(supplier_id ,supplier_name,product_name,product_price,manufacturer,description) VALUES(?,?,?,?,?,?)");
            $sql->bind_param("ssssss",$supplierid,$suppliername,$productname,$productprice,$manufacturer,$description,);
            if($sql->execute() === true){
                echo "<script> window.alert('Supplier Added') </script>";
            }
        else{
            echo "<script> window.alert('Failed Something went wrong') </script>";
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
                                    <h1 class="h4 text-gray-900 mb-4">Add Supplier</h1>
                                </div>
                                <form class="user" method="POST" action="">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="id" name="id"
                                                placeholder="Supplier ID">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="sname" name="sname"
                                                placeholder="Supplier Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="pname" name="pname"
                                            placeholder="Product Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="price" name="price"
                                                placeholder="Product Price">
                                        </div>
                                    </div>    

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3">
                                                <input type="text" class="form-control form-control-user" id="manufacturer" name="manufacturer"
                                                    placeholder="Manufacturer">
                                            </div>
                                            <div class="form-group">
                                              <textarea name="description" class="form-control" id="description" cols="30" rows="4" placeholder="Type item description"></textarea>
                                            </div>
                                        </div>
                                    
                                    <button type="submit" name="addsupplier" class="btn btn-primary btn-user btn-block">
                                        Add Supplier
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