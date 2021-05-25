<!--introducing the init file used to connect to the db-->
<?php
  require_once 'core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/headerfull.php';

 $sql="SELECT * FROM products WHERE featured = 1";
$featured=$db->query($sql);
 ?>
 <!--End of introducing the init file used to connect to the db-->



<!--its important to note that since we are using bootstrap the screen/viewport is divided into 12 gridsystem/collumns/sections or windows-->
<!--Main content of featured products-->

<!--To remove the spaces and center the products-->
<div class="col-md-2"></div>


<!--creating the collums-->
 <div class="col-md-8">
<!--defining the row-->
  <div class="row">
    <h2 class="text-center">FEATURED PRODUCTS</h2>
    <div class="col-md-3">
      <h4>Levis</h4>
        <img src="images/trousers.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$24.99</s></p>
        <p class="price">Our Price: $19.99</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-1">Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>official shirt</h4>
        <img src="images/official shirt.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$17.99</s></p>
        <p class="price">Our Price: $16.99</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-2">Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>shoes</h4>
        <img src="images/shoes.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$32.59</s></p>
        <p class="price">Our Price: $30.71</p>
        <!--creating a button-->
        <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-3" height=20px width=10px >Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>sports trousers</h4>
        <img src="images/sports trousers.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$27.51</s></p>
        <p class="price">Our Price: $26.90</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-4" height=20px width=10px >Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>watch</h4>
        <img src="images/watch.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$44.79</s></p>
        <p class="price">Our Price: $42.32</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-5" height=20px width=10px >Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>casual shirt</h4>
        <img src="images/casual shirt.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$21.67</s></p>
        <p class="price">Our Price: $20.11</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-6" height=20px width=10px >Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>Accessories</h4>
        <img src="images/Accessories.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$67.99</s></p>
        <p class="price">Our Price: $66.09</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-7" height=20px width=10px >Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

    <div class="col-md-3">
      <h4>sport-shoes</h4 id=xx>
        <img src="images/sport-shoes.jpg" alt="Tousers on sale" id="images"/>
        <!--specifying the price of the product-->
        <p class="list-price text-danger">List Price:<s>$39.69</s></p>
        <p class="price">Our Price: $35.29</p>
        <!--creating a button-->
          <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#details-8" height=20px width=10px >Details</a><!--creating a button the button as a modal and giving it a target-->
    </div>

<!--rows closing tags-->
  </div>
<!--inserting a paragraph-->
<!--end of inserting a paragraph-->

<!--collumns closing tags-->
</div>

<!--Details modal-->


<?php include 'details-modal-Levis.php';

      include 'includes/footer.php';
?>
<!--End of Details modal--><!--After this individual modal files are created-->

  </body>
  </html>
