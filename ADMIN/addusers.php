    <?php  
    include 'includes/sidebar.php';
    include 'includes/header.php';
    ?>

    <?php  

    if (isset($_POST['registerbtn'])) {

        $names = $_POST['names'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $cpass = md5($_POST['cpass']);

        $check = $conn->query("SELECT id from users_tbl WHERE contact='$contact' OR email='$email'");
        if($check->num_rows > 0){
            echo "<script> window.alert('User exists') </script>";
        }
        else{
            $sql = $conn->prepare("INSERT INTO users_tbl(names,contact,email,username,password) VALUES(?,?,?,?,?)");
            $sql->bind_param("sssss",$names,$contact,$email,$username,$password);
            if($sql->execute() === true){
                echo "<script> window.alert('Account created successfully') </script>";
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
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="POST" action="">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="names" name="names"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control form-control-user" id="contact" name="contact"
                                                placeholder="Enter Phone number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" id="email" name="email"
                                            placeholder="Email Address">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="username" name="username"
                                                placeholder="Enter username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="cpass" name="cpass" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <button type="submit" name="registerbtn" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    
                                
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="#">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.php">Already have an account? Login!</a>
                                </div>
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