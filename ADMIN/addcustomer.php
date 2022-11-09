<?php  
    include 'includes/sidebar.php';
    include 'includes/header.php';
    ?>

    <?php  

    if (isset($_POST['addcustomer'])) {

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $check = $conn->query("SELECT id from customers_tbl WHERE first_name='$firstname' OR email='$email'");
        if($check->num_rows > 0){
            echo "<script> window.alert('Customer Already Exists') </script>";
        }
        else{
            $sql = $conn->prepare("INSERT INTO customers_tbl (first_name,last_name,email,phone_number,city) VALUES(?,?,?,?,?)");
            $sql->bind_param("sssss",$firstname,$lastname,$email,$phone,$city);
            if($sql->execute() === true){
                echo "<script> window.alert('Customer Added') </script>";
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
                                <h1 class="h4 text-gray-900 mb-4">Add Customer</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="fname" name="fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="lname" name="lname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="numb" class="form-control form-control-user" id="phone" name="phone"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="city" name="city" placeholder="City Name">
                                    </div>
                                    
                                </div>
                                <button type="submit" name="addcustomer" class="btn btn-primary btn-user btn-block">
                                    Add Customer
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