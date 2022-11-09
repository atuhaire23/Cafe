<?php  
include 'includes/sidebar.php';
include 'includes/header.php';
$statusMsg = '';
?>
<?php
if (isset($_POST['addmenubtn']) && !empty($_FILES["file"]["name"])) {
    
    $item = $_POST['item'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    // File upload path
    $targetDir = "menuitems/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
    
    $check = $conn->query("SELECT item from menuitems_tbl WHERE item ='$item' AND price='$price'");
    if($check->num_rows > 0){
        $statusMsg = "Item Already exists.";
    }
    else{
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $sql = $conn->prepare("INSERT INTO menuitems_tbl(item,category,price,image,description) VALUES(?,?,?,?,?)");
                $sql->bind_param("sssss",$item,$category,$price,$fileName,$description);
                if($sql->execute() === true){
                    $statusMsg = "Item added successfully.";
                }
                else{
                    $statusMsg = "Something went wrong.";
                } 
            }
            else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
        else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }   
}
// Display status message

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
<?php if($statusMsg != '')  {?>
    <div class="row">
    <div class="col-md-12">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong> <?php echo $statusMsg;  ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    </div>
    <?php  }  ?>
    <!-- Nested Row within Card Body -->
    <div class="row">
    <div class="col-lg-12">
    <div class="p-5">
    <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Add Menu Items</h1>
    </div>
    <form class="user" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <input type="text" class="form-control" id="item" name="item" placeholder="item">
    </div>
    <div class="col-sm-6">
    <select class="form-control" id="category" name="category">
    <option value="" selected> Category </option>
    <option value="breakfast">Breakfast</option>   
    <option value="lunch">Lunch</option>   
    <option value="dinner">Dinner</option>   
    </select>
    </div>
    </div>
    
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <input type="number" class="form-control" name="price" id="price" placeholder="enter price">
    </div>
    <div class="col-sm-6">
    <input type="file" name="file" class="form-control" id="file">
    </div>
    </div>
    <div class="form-group">
    <textarea name="description" class="form-control" id="description" cols="30" rows="4" placeholder="Type item description"></textarea>
    </div>
    <button type="submit" name="addmenubtn" class="btn btn-primary btn-user btn-block">
    Add Item
    </button>
    
    </a>
    </form>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    <!-- End of Main Content -->
    
    
    
    <?php  include 'includes/footer.php';  ?>