<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>

<div class="success-wrapper text-center py-5">
  <img src="<?= base_url('assets/icons/success.gif') ?>" width="110">

  <h2 class="mt-4 text-success">Your Order is Confirmed!</h2>
  <p class="text-muted mt-2">Thank you for your purchase. Below is your order summary.</p>

  <div class="order-box mt-4 p-4" style="max-width:600px;margin:auto;border:1px solid #ddd;border-radius:10px;">
    <h4 class="mb-3">Order Summary</h4>

    <div id="orderItems"></div>

    <h5 class="mt-3">
      Total: <span id="orderTotal"></span>
    </h5>
  </div>

  <a href="<?= base_url('products') ?>" class="btn-shhopping mt-4">Continue Shopping</a>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {

    let cart = JSON.parse(localStorage.getItem("myCart")) || [];

    const itemsDiv = document.getElementById("orderItems");
    const totalDiv = document.getElementById("orderTotal");

    if (cart.length === 0) {
      itemsDiv.innerHTML = "<p>No items found!</p>";
      return;
    }

    let html = "";
    let grandTotal = 0;

    cart.forEach(item => {
      let sub = item.qty * item.price;
      grandTotal += sub;

      html += `
            <div class="d-flex justify-content-between border-bottom py-2">
                <span>${item.name} × ${item.qty}</span>
                <span>AED ${sub}</span>
            </div>
        `;
    });

    itemsDiv.innerHTML = html;
    totalDiv.innerText = "AED " + grandTotal;

    // Empty cart after showing order
    localStorage.removeItem("myCart");
  });
</script>

<?php include('includes/footer-link.php') ?>
<?php include('includes/footer.php') ?>