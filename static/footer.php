
 <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Item Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
      <?php 
        $sql2 = $conn->query("SELECT * FROM menuitems_tbl LIMIT 1");
        if($sql2->num_rows > 0){
            while($data = $sql2->fetch_assoc()){
                
                ?>
                <div class="col-md-12">
                <div class="m-img" style="background-image: url('<?php echo $IMG_URL; ?><?php echo $data['image'] ?>');"></div>
                <h3 class="item">Item: <?php echo $data['item'] ?></h3>
                <h3 class="item">Price: <?php echo $data['price'] ?></h3>
                <h3 class="item">Details: <?php echo $data['description'] ?></h3>
                </div>
                <?php  
            }
        } 
        ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="data justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>LOCATION</h3>
                        <ul>
                            <li><a href="#">Plot 36, Bombo Rd</a></li>
                            <li><a href="#">Wandegeya Opp. MAK Eastern Gate</a></li>
                            <li><a href="#">Plot 56, Acacia Avenue</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>OUR MENU</h3>
                        <ul>
                            <li><a href="#">Breakfast</a></li>
                            <li><a href="#">Desserts</a></li>
                            <li><a href="#">Espresso</a></li>
                            <li><a href="#">Dinner</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>CONTACT US</h3>
                        <ul>
                            <li><a href="#">info@rubyscafe.co.ug</a></li>
                            <li><a href="#">+256730987653</a></li>
                            <li><a href="#">+256414617653</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Ruby's Cafe © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>

</body>
</html> 
