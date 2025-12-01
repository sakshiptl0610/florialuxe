<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>

<div class="top-header body-content">
  <div class="main-container d-flex justify-content-between align-items-center">
    <h2 class="page-title font-canegroni">CHECKOUT</h2>
    <div class="breadcrumb font-nexalight">Home / Checkout</div>
  </div>
</div>

<div class="checkout-container">

  <form action="<?= base_url('ordersuccess'); ?>" method="post" id="checkoutForm">

    <div class="row g-5">

      <!-- LEFT SIDE – BILLING DETAILS -->
      <div class="col-md-7">
        <h3 class="checkout-title">Billing details</h3>

        <div class="checkout-field">
          <label>First name *</label>
          <input type="text" name="fname" required>
        </div>

        <div class="checkout-field">
          <label>Last name *</label>
          <input type="text" name="lname" required>
        </div>

        <div class="checkout-field">
          <label>Company name (optional)</label>
          <input type="text" name="company">
        </div>

        <div class="checkout-field">
          <label>Country / Region *</label>
          <select name="country">

            <option>UAE</option>

          </select>
        </div>
        <div class="checkout-field">
          <label>State *</label>
          <select name="state">
            <option>Select your state</option>
            <option>Abu Dhabi</option>
            <option>Dubai</option>
            <option>Sharjah</option>
            <option>Ajman</option>
            <option>Umm AI Quwain</option>
            <option>Ras AI Khaimah</option>
            <option>Fujairah</option>
          </select>
        </div>

        <div class="checkout-field">
          <label>Street address *</label>
          <input type="text" name="address" placeholder="House number and street name" required>
        </div>

        <div class="checkout-field">
          <label>Town / City *</label>
          <input type="text" name="city" required>
        </div>


        <div class="checkout-field">
          <label>Whatsapp *</label>
          <input type="text" name="phone" required>
        </div>

        <div class="checkout-field">
          <label>Phone *</label>
          <input type="text" name="phone" required>
        </div>

        <div class="checkout-field">
          <label>Email address *</label>
          <input type="email" name="email" required>
        </div>
      </div>

      <!-- RIGHT SIDE -->
      <div class="col-md-5">
        <h3 class="checkout-title">
          <input type="checkbox"> Ship to a different address?
        </h3>

        <div class="checkout-field">
          <label>Order notes (optional)</label>
          <textarea class="textarea" name="notes" placeholder="Notes about your order"></textarea>
        </div>
      </div>

    </div>

    <!-- ORDER TOTAL + PAYMENT + SUBMIT -->
    <div class="checkout-summary mt-5">

      <h3 class="checkout-title">Your Order</h3>

      <table class="summary-table" id="checkoutOrderTable">
        <!-- JS will auto-fill with real cart items -->
      </table>
      <button type="submit" class="place-order-btn mt-4">Place order</button>

    </div>

    <!-- Hidden input for cart -->
    <input type="hidden" name="cartData" id="cartData">
  </form>
</div>


<script>
  // Load cart into order summary + hidden field
  document.addEventListener("DOMContentLoaded", () => {

    let cart = JSON.parse(localStorage.getItem("myCart")) || [];
    let table = document.getElementById("checkoutOrderTable");
    let hidden = document.getElementById("cartData");

    hidden.value = JSON.stringify(cart); // send to backend

    if (cart.length === 0) {
      table.innerHTML = "<tr><td colspan='2'>Cart is empty</td></tr>";
      return;
    }

    let html = `
    <tr>
      <th>Product</th><th>Subtotal</th>
    </tr>
  `;

    let total = 0;

    cart.forEach(item => {
      let sub = item.qty * item.price;
      total += sub;

      html += `
      <tr>
        <td>${item.name} × ${item.qty}</td>
        <td>AED ${sub}</td>
      </tr>
    `;
    });

    html += `
    <tr class="total">
      <td><strong>Total</strong></td>
      <td><strong>AED ${total}</strong></td>
    </tr>
  `;

    table.innerHTML = html;
  });
</script>

<?php include('includes/footer-link.php') ?>
<?php include('includes/footer.php') ?>