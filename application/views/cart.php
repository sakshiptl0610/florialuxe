<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>

<div>
  <div class="top-header body-content">
    <div class="main-container d-flex justify-content-between align-items-center">
      <h2 class="page-title font-canegroni">CART</h2>
      <div class="breadcrumb font-nexalight">Home / Cart</div>
    </div>
  </div>

  <div class="container py-5 cart-page">

    <!-- =======================
         CART TABLE (Dynamic)
    ======================== -->
    <div class="row mb-5 align-items-start" id="cartPage"></div>

    <!-- Coupon + Update Cart (optional link) -->
    <div class="row mt-4">
      <div class="col-lg-3 d-flex align-items-end">
        <a href="<?php echo base_url('products'); ?>">
          <button class="cart-btn">Continue shopping</button>
        </a>
      </div>
    </div>

    <!-- =======================
         CART TOTALS (Dynamic)
    ======================== -->
    <div class="cart-totals-block mt-5">
      <h2 class="totals-title">Cart totals</h2>

      <table class="cart-totals-table">
        <tr class="totals-row">
          <th>Subtotal</th>
          <td id="cartSubtotalDisplay" class="dirham">
            <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" class="dirham">0
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>

        <tr class="totals-row align-top">
          <th>Shipping</th>
          <td>
            <label><input type="radio" name="shipping" class="ship-opt" value="20" checked> Flat rate</label><br>
            <label class="mt-2"><input type="radio" name="shipping" class="ship-opt" value="0"> Free shipping</label><br>
            <label class="mt-2"><input type="radio" name="shipping" class="ship-opt" value="0"> Local pickup</label>

            <p class="mt-3 shipping-to">
              Shipping to <b>njhbg, n, lkjn, 234456, Ireland.</b><br>
              <a href="#">Change address</a>
            </p>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>

        <tr class="totals-row">
          <th>Total</th>
          <td id="cartTotalDisplay" class="dirham">
            <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" class="dirham">0
          </td>
        </tr>
      </table>

      <a href="<?php echo base_url('checkout'); ?>">
        <button class="checkout-btn mt-4">Proceed to checkout</button>
      </a>
    </div>
  </div>
 <script>
    document.addEventListener("DOMContentLoaded", () => {

      const cartIcon = '<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg';
      let cart = JSON.parse(localStorage.getItem("myCart")) || [];

      const cartPage = document.getElementById("cartPage");
      const subtotalDisplay = document.getElementById("cartSubtotalDisplay");
      const totalDisplay = document.getElementById("cartTotalDisplay");
      const shipRadios = document.querySelectorAll(".ship-opt");

      function renderCart() {

        if (!cart || cart.length === 0) {
          cartPage.innerHTML = `<h3 class="text-center mt-5">Your cart is empty</h3>`;
          paintTotals(0, getShipping());
          return;
        }

        let html = '';

        html += `<div class="col-lg-6">
              <h2 class="cart-title ps-4">Product</h2>`;
        cart.forEach((item, index) => {
          html += `
        <div class="d-flex align-items-center cart-item mt-4">
          <span class="remove-btn" data-index="${index}">×</span>
          <img src="${item.img}" class="cart-img">
          <span class="product-name">${item.name}</span>
        </div>`;
        });
        html += `</div>`;

        html += `<div class="col-lg-2 text-start">
              <h2 class="cart-title">Price</h2>`;
        cart.forEach(item => {
          html += `
        <div class="price-item">
          <img src="${cartIcon}" class="dirham">${item.price}
        </div>`;
        });
        html += `</div>`;

        html += `<div class="col-lg-3">
              <h2 class="cart-title">Quantity</h2>`;
        cart.forEach((item, index) => {
          html += `
        <div class="qty-box qty-box-w mt-4 single-product" data-index="${index}">
          <span class="qty-label">Quantity</span>
          <div class="qty-number"><span class="qtyValue">${item.qty}</span></div>
          <div class="qty-btns">
            <div class="qty-up" data-index="${index}"><i class="fa-solid fa-chevron-up"></i></div>
            <div class="qty-down" data-index="${index}"><i class="fa-solid fa-chevron-down"></i></div>
          </div>
        </div>`;
        });
        html += `</div>`;

        html += `<div class="col-lg-1">
              <h2 class="cart-title">Subtotal</h2>`;
        cart.forEach(item => {
          html += `
        <div class="price-item">
          <img src="${cartIcon}" class="dirham">
          <span class="subtotalValue">${item.qty * item.price}</span>
        </div>`;
        });
        html += `</div>`;

        cartPage.innerHTML = html;

        bindQtyButtons();
        bindRemoveButtons();
        recalcTotals();
      }

      function bindQtyButtons() {
        document.querySelectorAll(".qty-up").forEach(btn => {
          btn.addEventListener("click", () => {
            let i = +btn.dataset.index;
            cart[i].qty++;
            saveCart();
            updateQtyRow(i);
            recalcTotals();
          });
        });

        document.querySelectorAll(".qty-down").forEach(btn => {
          btn.addEventListener("click", () => {
            let i = +btn.dataset.index;
            if (cart[i].qty > 1) {
              cart[i].qty--;
              saveCart();
              updateQtyRow(i);
              recalcTotals();
            }
          });
        });
      }

      function updateQtyRow(i) {
        document.querySelector(`.single-product[data-index="${i}"] .qtyValue`).innerText = cart[i].qty;
        document.querySelectorAll(".subtotalValue")[i].innerText = cart[i].qty * cart[i].price;
      }

      function bindRemoveButtons() {
        document.querySelectorAll(".remove-btn").forEach(btn => {
          btn.addEventListener("click", () => {
            let i = +btn.dataset.index;
            cart.splice(i, 1);
            saveCart();
            renderCart();
          });
        });
      }

      function recalcTotals() {
        let subtotal = cart.reduce((sum, item) => sum + (item.qty * item.price), 0);
        let shipping = getShipping();
        paintTotals(subtotal, shipping);
      }

      function paintTotals(subtotal, shipping) {
        subtotalDisplay.innerHTML = `<img src="${cartIcon}"> ${subtotal}`;
        totalDisplay.innerHTML = `<img src="${cartIcon}"> ${subtotal + shipping}`;
      }

      function getShipping() {
        let s = 0;
        shipRadios.forEach(r => {
          if (r.checked) s = parseFloat(r.value);
        });
        return s;
      }

      function saveCart() {
        localStorage.setItem("myCart", JSON.stringify(cart));
      }

      shipRadios.forEach(r => r.addEventListener("change", recalcTotals));
      renderCart();

    });
  </script>


  <?php include('includes/footer-link.php') ?>
  <?php include('includes/footer.php') ?>