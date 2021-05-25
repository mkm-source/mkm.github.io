

<!-- basic modal -->
<div class="modal fade details-8" id="details-8" tabindex="-8" role="dialog" aria-labelledby="details-8" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="details-8">Shopping window</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- inserting the picture in the modal -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="center-block">
              <img src="images/sport-shoes.jpg" alt="sports shoes" class="details img-responsive"/>
            </div>
          </div>
          <!-- inserting contents in the modal -->
          <div class="col-sm-6">
           <h4>Details</h4>
            <p>The best sports shoes available</p>
          </hr>
          <p>Price: $35.29</p>
          <p>Brand: shoes</p>
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
      <!-- creating the footer for  modal -->
      <div class="modal-footer">
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
