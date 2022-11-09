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
                            <h6 class="m-0 font-weight-bold text-primary">Customers List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>City</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $sql = $conn->query("SELECT * FROM customers_tbl");
                                            if($sql->num_rows > 0){
                                                while($row = $sql->fetch_assoc()){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['first_name'] ?></td>
                                            <td><?php echo $row['last_name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone_number'] ?></td>
                                            <td><?php echo $row['city'] ?></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-primary">edit</a>
                                                <button class="btn btn-sm btn-danger">delete</button>
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