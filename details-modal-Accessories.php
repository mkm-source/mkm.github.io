

<!-- basic modal -->
<div class="modal fade details-7" id="details-7" tabindex="-7" role="dialog" aria-labelledby="details-7" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="details-7">Shopping window</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="center-block">
              <img src="images/Accessories.jpg" alt="Accessories" class="details img-responsive"/>
            </div>
          </div>
          <div class="col-sm-6">
           <h4>Details</h4>
            <p>Buy this Accessories at the cheapest prices available</p>
          </hr>
          <p>Price: $66.09</p>
          <p>Brand: Accessories</p>
          <!-- creating the size and quantity form-->
                    <form action="add_cart.php" method="post">
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="quantity" id="quantity-label">quantity:</label>
                          <input type="text" class="form-control" id="quantity" name="quantity"/>

                      </div></br></br></br></br><!-- use of breaks to separate the quantity and size fields-->
                      <div class="form-group">
                        <label for="size">size:</label>
                        <select name="size" id="size" class="form-control">
                          <option value=""></option>
                          <option value="28">28</option>
                          <option value="32">32</option>
                          <option value="36">36</option>
                        </select>
                    </div>
                    </div>
                  </form>
          <!-- End of creating the size and quantity form-->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
