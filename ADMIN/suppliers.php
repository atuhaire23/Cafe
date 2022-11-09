<?php  
include 'includes/sidebar.php';
include 'includes/header.php';
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Suppliers List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Supplier ID</th>
                                            <th>Supplier Name</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Description</th>
                                            <th>Manufacturer</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $sql = $conn->query("SELECT * FROM suppliers_tbl");
                                            if($sql->num_rows > 0){
                                                while($row = $sql->fetch_assoc()){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $row['supplier_id'] ?></td>
                                            <td><?php echo $row['supplier_name'] ?></td>
                                            <td><?php echo $row['product_name'] ?></td>
                                            <td><?php echo $row['product_price'] ?></td>
                                            <td><?php echo $row['description'] ?></td>
                                            <td><?php echo $row['manufacturer'] ?></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                      <?php 
                                                }
                                            }
                                      
                                      
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php  include 'includes/footer.php';  ?>