<?php
    if(!isset($_SESSION['us'])){
        echo '<script>alert("You must login to access cart");</script>';
        echo '<meta http-equiv="Refresh" content="0;URL=?page=login">';
    }
    else
    {
?>
<!--Section: Block Content-->
<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">

          <h5 class="mb-4">Cart (<span>2</span> items)</h5>

          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid" width="200px" heigth="200px"
                  src="product-imgs/GWF11_01.png" alt="Sample">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Clothes</h5>
                    <p class="mb-3 text-muted text-uppercase small">Bridal Outfit</p>
                    <p class="mb-2 text-muted text-uppercase small">Color:  Black White Pink</p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                      (Note, 1 piece)
                    </small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                  </div>
                  <p class="mb-0"><span><strong id="summary">$10</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
            <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid" width="200px" height="200px"
                  src="product-imgs/KenDoll1.jpg" alt="Sample">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Ken Dolls</h5>
                    <p class="mb-3 text-muted text-uppercase small">Sculpted Blonde Hair</p>
                    <p class="mb-2 text-muted text-uppercase small">Color: Pink Blue </p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                  </div>
                  <p class="mb-0"><span><strong>$10</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
            items to your cart does not mean booking them.</p>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Expected shipping delivery</h5>

          <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">We accept</h5>

          <img class="mr-2" width="45px"
          src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
            alt="Visa">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
            alt="American Express">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span>$20</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong>$25</strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block">go to checkout</button>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Add a discount code (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->
<body class="skin-light">
  <!--Main Navigation-->
  <header>
    <!-- Navbar -->

<?php
    }
  ?>