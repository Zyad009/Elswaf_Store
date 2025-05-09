@extends('front.app')
@section("content")

{{-- =======================
====== your cart=======
======================= --}}

    <section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">

            {{-- ######### count cart ########## --}}
            <h5 class="mb-0">Cart - 3items</h5>
          </div>
          
          <div class="card-body">
          <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                  class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
              </div>
              <!--End  Image -->
              
              <!-- Data -->
              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <p><strong>Blue denim shirt</strong></p>
                <p>Color: blue</p>
                <p>Size: M</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm me-1 mb-2" data-mdb-tooltip-init
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
              <!-- End Data -->

              <!-- Quantity And Price -->
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-2 me-2"
                    style="height: 40px; padding: 2px 10px;"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div data-mdb-input-init class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-2 ms-2"
                    style="height: 40px; padding: 2px 10px;"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- End Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>$17.99</strong>
                </p>
                <!--End Price -->
              </div>
            </div>
          </div>
          <!-- End Single item -->

        </div>

        {{-- Shapping Infomations --}}
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
        {{-- End Shepping Infomations --}}

        {{-- Method Shepping Information--}}
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
            src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
            alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
            src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
            alt="PayPal acceptance mark" />
          </div>
        </div>
        {{-- End Method Shepping Information--}}
      </div>

      {{-- Summary --}}
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>$53.98</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>

            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
      {{-- End Summary --}}
    </div>
  </div>
</section>

@endsection