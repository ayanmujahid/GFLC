<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>

<section class="collection-banner text-center">
    <h2>YOUR SHOPPING CART</h2>
    <p>Home / Shampoo</p>
</section>

<section class="cart-section">
  <div class="cart-container">

    <!-- LEFT SIDE - PRODUCTS -->
    <div class="cart-products">

      <h2>Products</h2>

      <!-- Product 1 -->
      <div class="cart-item">
        <div class="remove-btn">×</div>

        <div class="cart-item-inner">
          <img src="assets/images/na-mp-1.webp" alt="Oil">

          <div class="cart-details">
            <h3>Natural Cold Pressed Oil And Reduces Wrinkles</h3>
            <p class="price">$180.50</p>
            <p class="variant">200ml, Natural</p>

            <div class="quantity-box">
              <button>-</button>
              <span>1</span>
              <button>+</button>
            </div>

            <p class="total">
              Total: <span class="bold">$180.50</span>
              <span class="old-price">$190.00</span>
            </p>

            <p class="offer">5% offer - $9.50</p>
          </div>
        </div>
      </div>


      <!-- Product 2 -->
      <div class="cart-item">
        <div class="remove-btn">×</div>

        <div class="cart-item-inner">
          <img src="assets/images/na-mp-2.webp" alt="Shampoo">

          <div class="cart-details">
            <h3>Moisture Filling Shampoo For Dry And Dehydrated</h3>
            <p class="price">$166.25</p>
            <p class="variant">Natural, 250ml</p>

            <div class="quantity-box">
              <button>-</button>
              <span>1</span>
              <button>+</button>
            </div>

            <p class="total">
              Total: <span class="bold">$166.25</span>
              <span class="old-price">$175.00</span>
            </p>

            <p class="offer">5% offer - $8.75</p>
          </div>
        </div>
      </div>

    </div>


    <!-- RIGHT SIDE - ORDER SUMMARY -->
    <div class="order-summary">

      <h2>Order Summary</h2>

      <p class="subtotal">Subtotal : $707.75</p>
      <p class="saving">You're saving : $37.25</p>

      <button class="note-btn">Add a note to your order</button>

      <p class="shipping-text">
        Shipping, taxes, and discounts will be calculated at checkout.
      </p>

      <button class="checkout-btn">Checkout</button>

      <button class="shipping-btn">
        Get shipping estimates ▼
      </button>

      <input type="text" placeholder="Enter Discount Code" class="discount-input">
      <button class="apply-btn">Apply</button>

    </div>

  </div>
</section>









<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>