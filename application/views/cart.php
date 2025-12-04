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

    <!-- SCROLLABLE TABLE -->
    <div class="cart-table-wrapper">
      <table class="cart-table table align-middle" id="cartPage"></table>
    </div>

    <!-- Continue Shopping -->
    <div class="row mt-4">
      <div class="col-lg-3 d-flex align-items-end">
        <a href="<?php echo base_url('products'); ?>">
          <button class="cart-btn">Continue shopping</button>
        </a>
      </div>
    </div>

    <!-- CART TOTALS -->
    <div class="cart-totals-block mt-5">
      <h2 class="totals-title">Cart totals</h2>

      <table class="cart-totals-table">
        <tr class="totals-row">
          <th>Subtotal</th>
          <td id="cartSubtotalDisplay" class="dirham">
            <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg">0
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
            <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg">0
          </td>
        </tr>
      </table>

      <a href="<?php echo base_url('checkout'); ?>">
        <button class="checkout-btn mt-4">Proceed to checkout</button>
      </a>
    </div>

  </div>


  <style>
    .cart-table-wrapper {
      width: 100%;
      overflow-x: auto;
      white-space: nowrap;
    }
  </style>


  <script>
    document.addEventListener("DOMContentLoaded", () => {

      const cartIcon = '<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg';
      let cart = JSON.parse(localStorage.getItem("myCart")) || [];

      const cartPage = document.getElementById("cartPage");
      const subtotalDisplay = document.getElementById("cartSubtotalDisplay");
      const totalDisplay = document.getElementById("cartTotalDisplay");
      const shipRadios = document.querySelectorAll(".ship-opt");

      function renderCart() {

        if (!cart.length) {
          cartPage.innerHTML = `<tr><td colspan="4" class="text-center py-5">Your cart is empty</td></tr>`;
          paintTotals(0, getShipping());
          return;
        }

        let html = `
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
    `;

        cart.forEach((item, index) => {
          html += `
        <tr>
          <td>
            <span class="remove-btn" data-index="${index}">×</span>
            <img src="${item.img}" class="cart-img">
            ${item.name}
          </td>

          <td><img src="${cartIcon}" style="width:12px;"> ${item.price}</td>

         
         
           <td>

              <div class="qty-box">
                <span class="qty-label">Quantity</span>

                <div class="qty-number">
                  <span id="qtyValue">${item.qty}</span>
               
</div>
                <div class="qty-btns">
                  <div class="qty-up" data-index="${index}"><i class="fa-solid fa-chevron-up"></i></div>
                  <div class="qty-down" data-index="${index}"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                 
              </div>


            </td>
           
         

          <td>
            <img src="${cartIcon}" style="width:12px;">
            <span class="subtotalValue">${item.qty * item.price}</span>
          </td>
        </tr>
      `;
        });

        html += `</tbody>`;
        cartPage.innerHTML = html;

        bindQtyButtons();
        bindRemoveButtons();
        recalcTotals();
      }

      function bindQtyButtons() {
        document.querySelectorAll(".qty-up").forEach(btn => {
          btn.addEventListener("click", () => {
            let i = btn.dataset.index;
            cart[i].qty++;
            saveCart();
            renderCart();
          });
        });

        document.querySelectorAll(".qty-down").forEach(btn => {
          btn.addEventListener("click", () => {
            let i = btn.dataset.index;
            if (cart[i].qty > 1) {
              cart[i].qty--;
              saveCart();
              renderCart();
            }
          });
        });
      }

      function bindRemoveButtons() {
        document.querySelectorAll(".remove-btn").forEach(btn => {
          btn.addEventListener("click", () => {
            cart.splice(btn.dataset.index, 1);
            saveCart();
            renderCart();
          });
        });
      }

      function recalcTotals() {
        let subtotal = cart.reduce((t, i) => t + (i.qty * i.price), 0);
        let shipping = getShipping();
        paintTotals(subtotal, shipping);
      }

      function paintTotals(subtotal, shipping) {
        subtotalDisplay.innerHTML = `<img src="${cartIcon}"> ${subtotal}`;
        totalDisplay.innerHTML = `<img src="${cartIcon}"> ${subtotal + shipping}`;
      }

      function getShipping() {
        let ship = 0;
        shipRadios.forEach(r => r.checked ? ship = +r.value : null);
        return ship;
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