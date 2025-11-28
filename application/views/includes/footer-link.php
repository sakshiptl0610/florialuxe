<script src="<?= base_url() ?>https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script type="module">
  import {
    createIcons,
    Instagram,
    Facebook,
    Whatsapp
  } from 'https://cdn.jsdelivr.net/npm/lucide@latest';

  createIcons({
    icons: {
      Instagram,
      Facebook,
      Whatsapp
    }
  });
</script>

<!--  MENU SCRIPT -->
<script>
  document.addEventListener("DOMContentLoaded", function() {

    /* FIRST HEADER ELEMENTS */
    const firstHamburger = document.getElementById("hamburgerFirst");
    const firstMenu = document.getElementById("mobileMenuFirst");
    const closeFirst = document.getElementById("closeFirst");

    /* SCROLL HEADER ELEMENTS */
    const scrollHamburger = document.getElementById("hamburgerScroll");
    const scrollMenu = document.getElementById("mobileMenu");
    const closeScroll = document.getElementById("closeScroll");
    const scrollHeader = document.getElementById("scrollHeader");


    /* ------------------------
          SCROLL HEADER SHOW
    -------------------------*/
    window.addEventListener("scroll", function() {
      if (window.scrollY > 150) {
        scrollHeader.classList.add("scrolled");
      } else {
        scrollHeader.classList.remove("scrolled");
      }
    });


    /* ------------------------
          FIRST HEADER MENU
    -------------------------*/
    if (firstHamburger) {
      firstHamburger.addEventListener("click", () => {
        firstMenu.classList.add("active");
      });
    }

    if (closeFirst) {
      closeFirst.addEventListener("click", () => {
        firstMenu.classList.remove("active");
      });
    }


    /* ------------------------
          SCROLL HEADER MENU
    -------------------------*/
    if (scrollHamburger) {
      scrollHamburger.addEventListener("click", () => {
        scrollMenu.classList.add("active");
      });
    }

    if (closeScroll) {
      closeScroll.addEventListener("click", () => {
        scrollMenu.classList.remove("active");
      });
    }

  });
</script>
<!-- =======================mainheader js====================== -->
<script>
  document.addEventListener("DOMContentLoaded", function() {

    const menu2 = document.getElementById("mobileMenuSecond");
    const open2 = document.getElementById("hamburgerSecond");
    const close2 = document.getElementById("menuCloseSecond");

    if (open2) {
      open2.addEventListener("click", () => {
        menu2.classList.add("active");
      });
    }

    if (close2) {
      close2.addEventListener("click", () => {
        menu2.classList.remove("active");
      });
    }

  });
</script>


<!-- ============products page filter================ -->
<script>
  // Selectors
  const products = document.querySelectorAll(".product");
  const topFilters = document.querySelectorAll(".filter-bar li[data-filter]");
  const dropdownBtn = document.querySelector(".dropdown-btn");
  const dropdownFilters = document.querySelectorAll(".extra-dropdown p");
  const dropdownBox = document.querySelector(".extra-dropdown");

  // FILTER FUNCTION
  function applyFilter(filter) {
    products.forEach(item => {
      if (filter === "all" || item.classList.contains(filter)) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  }

  // TOP FILTER CLICK
  topFilters.forEach(btn => {
    btn.addEventListener("click", () => {

      document.querySelector(".filter-bar li.active")?.classList.remove("active");
      btn.classList.add("active");

      applyFilter(btn.dataset.filter);
    });
  });

  // DROPDOWN TOGGLE
  dropdownBtn.addEventListener("click", () => {
    dropdownBox.style.display =
      dropdownBox.style.display === "block" ? "none" : "block";
  });

  // DROPDOWN FILTER CLICK
  dropdownFilters.forEach(opt => {
    opt.addEventListener("click", () => {

      applyFilter(opt.dataset.filter);

      dropdownBox.style.display = "none";

      document.querySelector(".filter-bar li.active")?.classList.remove("active");
    });
  });

  // CLICK OUTSIDE TO CLOSE DROPDOWN
  document.addEventListener("click", function(e) {

    const isDropdown = e.target.closest(".extra-dropdown");
    const isButton = e.target.closest(".dropdown-btn");

    // if clicked outside both dropdown and button
    if (!isDropdown && !isButton) {
      dropdownBox.style.display = "none";
    }

  });
</script>
<!-- ====================checkout js====================== -->
<script>
  document.addEventListener("DOMContentLoaded", function() {

    const toggle = document.querySelector(".coupon-toggle");
    const box = document.querySelector(".coupon-input-box");

    toggle.addEventListener("click", function(e) {
      e.preventDefault();
      e.stopPropagation(); // stop bubbling
      box.classList.toggle("open");
    });

    // Close on click outside
    document.addEventListener("click", function(e) {
      if (!box.contains(e.target) && !toggle.contains(e.target)) {
        box.classList.remove("open");
      }
    });

  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {

    const originalSelect = document.querySelector("#countrySelect");

    // WRAP SELECT
    const wrapper = document.createElement("div");
    wrapper.classList.add("custom-select-wrapper");
    originalSelect.parentNode.insertBefore(wrapper, originalSelect);
    wrapper.appendChild(originalSelect);
    originalSelect.style.display = "none";

    // Display selected
    const display = document.createElement("div");
    display.classList.add("custom-select-display");
    display.textContent = originalSelect.options[0].textContent;
    wrapper.appendChild(display);

    // PANEL
    const panel = document.createElement("div");
    panel.classList.add("custom-select-panel");
    wrapper.appendChild(panel);

    // Search box
    const searchBox = document.createElement("input");
    searchBox.classList.add("custom-select-search");
    searchBox.placeholder = "Search...";
    panel.appendChild(searchBox);

    // Options list
    const list = document.createElement("div");
    list.classList.add("custom-select-list");
    panel.appendChild(list);

    Array.from(originalSelect.options).forEach(opt => {
      const item = document.createElement("div");
      item.textContent = opt.textContent;
      list.appendChild(item);

      item.addEventListener("click", function() {
        display.textContent = this.textContent;
        originalSelect.value = this.textContent;
        panel.style.display = "none";
      });
    });

    // OPEN / CLOSE
    display.addEventListener("click", function(e) {
      e.stopPropagation();
      panel.style.display = (panel.style.display === "block") ? "none" : "block";
    });

    // CLOSE ON OUTSIDE CLICK
    document.addEventListener("click", function() {
      panel.style.display = "none";
    });

    // SEARCH FILTER
    searchBox.addEventListener("keyup", function() {
      const filter = this.value.toLowerCase();
      Array.from(list.children).forEach(item => {
        item.style.display = item.textContent.toLowerCase().includes(filter) ? "block" : "none";
      });
    });
  });
</script>


<script>
  document.addEventListener("DOMContentLoaded", function() {

    const options = document.querySelectorAll(".pay-option input");

    options.forEach(opt => {
      opt.addEventListener("change", function() {

        // close all
        document.querySelectorAll(".pay-option")
          .forEach(item => item.classList.remove("active"));

        // open selected
        this.parentElement.classList.add("active");

      });
    });

    // OPEN DEFAULT SELECTED
    document.querySelector(".pay-option input:checked")
      .parentElement.classList.add("active");

  });
</script>
<script>
  // Zoom factor ko yahan control karein (1.8, 2, 2.5 ... )
  const ZOOM = 1.3;

  const img = document.getElementById('mainProductImage');
  const container = img.parentElement;

  function startZoom() {
    container.addEventListener('mousemove', onMove);
    container.addEventListener('mouseenter', onEnter);
    container.addEventListener('mouseleave', onLeave);
  }

  function onEnter() {
    img.style.transform = `scale(${ZOOM})`;
    container.style.cursor = 'zoom-out';
  }

  function onLeave() {
    img.style.transform = 'scale(1)';
    container.style.cursor = 'zoom-in';
  }

  function onMove(e) {
    const rect = img.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100; // 0–100%
    const y = ((e.clientY - rect.top) / rect.height) * 100; // 0–100%
    img.style.transformOrigin = `${x}% ${y}%`;
  }

  // Thumbnail click se image badalti ho to zoom reset rehna chahiye
  function changeMainImage(el) {
    img.src = el.src;
    // reset zoom state
    img.style.transform = 'scale(1)';
    img.style.transformOrigin = 'center center';
  }

  // expose function if PHP inline onclick uses it
  window.changeMainImage = changeMainImage;

  // ensure listeners attached
  document.addEventListener('DOMContentLoaded', startZoom);
</script>


<!-- ===========quality btn js======== -->
<script>
  // Safe execution (wait for full DOM)
  document.addEventListener("DOMContentLoaded", () => {

    let qty = 1;
    const qtyValue = document.querySelector("#qtyValue");
    const qtyUp = document.querySelector(".qty-up");
    const qtyDown = document.querySelector(".qty-down");
    const addBtn = document.querySelector("#addToCartBtn");
    const cartBox = document.querySelector(".view-cart-box");

    // =========================
    //   Quantity Increase
    // =========================
    qtyUp?.addEventListener("click", () => {
      qty++;
      qtyValue.textContent = qty;
    });

    // =========================
    //   Quantity Decrease
    // =========================
    qtyDown?.addEventListener("click", () => {
      if (qty > 1) qty--;
      qtyValue.textContent = qty;
    });

    // =========================
    //   Add to Cart → Show Box
    // =========================
    addBtn?.addEventListener("click", () => {

      // Enable the view-cart box
      cartBox.classList.add("show-cart-box");

      // Smooth scroll to the top
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });

      // OPTIONAL: Auto refresh (OFF right now)
      // setTimeout(() => { location.reload(); }, 1000);
    });

  });
</script>
<script>
  let productQty = 1;
  const qtyValue = document.querySelector("#qtyValue");
  const qtyUp = document.querySelector(".qty-up");
  const qtyDown = document.querySelector(".qty-down");

  // Increase
  qtyUp.addEventListener("click", () => {
    productQty++;
    qtyValue.innerText = productQty;
  });

  // Decrease
  qtyDown.addEventListener("click", () => {
    if (productQty > 1) {
      productQty--;
      qtyValue.innerText = productQty;
    }
  });
</script>

<script>
  addBtn.addEventListener("click", () => {

    let name = document.querySelector(".title").innerText;
    let price = 125;
    let img = document.getElementById("mainProductImage").src;

    let exists = cart.find(item => item.name === name);

    if (exists) {
      exists.qty += productQty; // <-- quantity add hogi
    } else {
      cart.push({
        name: name,
        price: price,
        qty: productQty, // <-- quantity from product page
        img: img
      });
    }

    updateCartUI();
    showPopup();
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {

    // ----- SELECT ELEMENTS -----
    const cartCount = document.querySelector(".count-cart");
    const cartPopup = document.getElementById("cartPopup");
    const headerCartBtn = document.getElementById("headerCartBtn");
    const cartItemsBox = document.getElementById("cartItems");

    let cart = []; // Front-end cart array

    // ----- ADD TO CART BUTTON -----
    const addBtn = document.querySelector("#addToCartBtn");
    addBtn.addEventListener("click", () => {

      // product detail page se product data lo
      let name = document.querySelector(".title").innerText;
      let price = document.querySelector(".text-color img + text") || 125;
      let img = document.getElementById("mainProductImage").src;

      // Same product exists? qty++
      let exists = cart.find(item => item.name === name);

      if (exists) {
        exists.qty++;
      } else {
        cart.push({
          name: name,
          price: 125,
          qty: 1,
          img: img
        });
      }

      updateCartUI();
      showPopup();
    });

    // ----- UPDATE COUNT + POPUP LIST -----
    function updateCartUI() {

      // Update top icon count
      cartCount.innerText = cart.reduce((sum, item) => sum + item.qty, 0);

      // Clear old items in popup
      cartItemsBox.innerHTML = "";

      // Add updated items
      cart.forEach(item => {
        cartItemsBox.innerHTML += `
                <div class="cart-popup-item">
                    <img src="${item.img}">
                    <div>
                        <span><b>${item.name}</b></span><br>
                        <span>AED ${item.price} × ${item.qty}</span>
                    </div>
                </div>
            `;
      });
    }

    // ----- SHOW POPUP -----
    function showPopup() {
      cartPopup.classList.add("show");
      setTimeout(() => {
        cartPopup.classList.remove("show");
      }, 3000);
    }

    // ----- CLICK ON CART ICON -----
    headerCartBtn.addEventListener("click", () => {
      cartPopup.classList.toggle("show");
    });

  });
</script>

<script>
  const tabButtons = document.querySelectorAll("#productTabs .nav-link");
  const tabContents = document.querySelectorAll(".tab-pane");

  tabButtons.forEach(btn => {
    btn.addEventListener("click", () => {

      // remove active classes
      tabButtons.forEach(b => b.classList.remove("active"));
      tabContents.forEach(c => c.classList.remove("show", "active"));

      // add active to clicked
      btn.classList.add("active");

      const target = btn.getAttribute("data-bs-target");
      const targetTab = document.querySelector(target);

      targetTab.classList.add("show", "active");
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    // saare size buttons
    const allSizes = document.querySelectorAll(".size-btn");

    allSizes.forEach(size => {
      size.addEventListener("click", function() {

        // parent ke andar active remove
        let parent = this.closest(".size-options");
        parent.querySelectorAll(".size-btn").forEach(btn => btn.classList.remove("active"));

        // selected add
        this.classList.add("active");

        // add to cart button show karo
        let addBtn = this.closest(".size-hover").querySelector(".add-btn2");
        addBtn.classList.add("show");
      });
    });

  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {

    // CART PERSISTENT ACROSS ALL PAGES
    let cart = JSON.parse(localStorage.getItem("myCart")) || [];

    const cartCount = document.querySelector(".count-cart");
    const cartPopup = document.getElementById("cartPopup");
    const headerCartBtn = document.getElementById("headerCartBtn");
    const cartItemsBox = document.getElementById("cartItems");

    // PRODUCT DETAIL QTY
    let productQty = 1;
    const qtyValue = document.querySelector("#qtyValue");
    const qtyUp = document.querySelector(".qty-up");
    const qtyDown = document.querySelector(".qty-down");

    qtyUp.addEventListener("click", () => {
      productQty++;
      qtyValue.innerText = productQty;
    });

    qtyDown.addEventListener("click", () => {
      if (productQty > 1) {
        productQty--;
        qtyValue.innerText = productQty;
      }
    });

    // ADD TO CART BUTTON
    const addBtn = document.querySelector("#addToCartBtn");
    if (addBtn) {
      addBtn.addEventListener("click", () => {

        let name = document.querySelector(".title").innerText;
        let price = 125;
        let img = document.getElementById("mainProductImage").src;

        let exists = cart.find(item => item.name === name);

        if (exists) {
          exists.qty += productQty;
        } else {
          cart.push({
            name: name,
            price: price,
            qty: productQty,
            img: img
          });
        }

        updateCartUI();
        showPopup();
      });
    }

    function updateCartUI() {

      // HEADER CART COUNT
      cartCount.innerText = cart.reduce((sum, item) => sum + item.qty, 0);

      // POPUP LIST UPDATE
      cartItemsBox.innerHTML = "";

      cart.forEach((item, index) => {
        cartItemsBox.innerHTML += `
                <div class="cart-popup-item">
                    <img src="${item.img}">
                    <div class="w-100">
                        <span><b>${item.name}</b></span><br>
                        <span>AED ${item.price}</span>

                        <div class="popup-qty-box" style="margin-top:5px;">
                            <button class="popup-qty-down" data-index="${index}">-</button>
                            <span class="popup-qty">${item.qty}</span>
                            <button class="popup-qty-up" data-index="${index}">+</button>
                        </div>
                    </div>
                </div>
            `;
      });

      // SAVE CART TO LOCALSTORAGE (VERY IMPORTANT)
      localStorage.setItem("myCart", JSON.stringify(cart));

      bindQtyButtons();
    }

    function bindQtyButtons() {

      document.querySelectorAll(".popup-qty-up").forEach(btn => {
        btn.addEventListener("click", () => {
          let index = btn.getAttribute("data-index");
          cart[index].qty++;
          updateCartUI();
        });
      });

      document.querySelectorAll(".popup-qty-down").forEach(btn => {
        btn.addEventListener("click", () => {
          let index = btn.getAttribute("data-index");
          if (cart[index].qty > 1) {
            cart[index].qty--;
          }
          updateCartUI();
        });
      });
    }

    function showPopup() {
      cartPopup.classList.add("show");
      setTimeout(() => cartPopup.classList.remove("show"), 3000);
    }

    headerCartBtn?.addEventListener("click", (e) => {
      e.stopPropagation();
      cartPopup.classList.toggle("show");
    });

    document.addEventListener("click", (e) => {
      if (!cartPopup.contains(e.target) && !headerCartBtn.contains(e.target)) {
        cartPopup.classList.remove("show");
      }
    });

    // LOAD UI IF CART ALREADY EXISTS
    updateCartUI();

  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {

    let cart = JSON.parse(localStorage.getItem("myCart")) || [];
    const cartPage = document.getElementById("cartPage");
    const subtotalDisplay = document.getElementById("cartSubtotalDisplay");
    const totalDisplay = document.getElementById("cartTotalDisplay");

    // Empty Cart
    if (cart.length === 0) {
      cartPage.innerHTML = `
            <h3 class="text-center mt-5">Your cart is empty</h3>
        `;
      subtotalDisplay.innerHTML = `<img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg">0`;
      totalDisplay.innerHTML = `<img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg">0`;
      return;
    }

    let html = `
        <div class="col-lg-6">
            <h2 class="cart-title ps-4">Product</h2>
    `;

    // Product Column
    cart.forEach((item, index) => {
      html += `
            <div class="d-flex align-items-center cart-item mt-4">
                <span class="remove-btn" data-index="${index}">×</span>
                <img src="${item.img}" class="cart-img">
                <span class="product-name">${item.name}</span>
            </div>
        `;
    });
    html += `</div>`;

    // Price Column
    html += `<div class="col-lg-2 text-start"><h2 class="cart-title">Price</h2>`;
    cart.forEach(item => {
      html += `
            <div class="price-item mt-5">
                <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" class="dirham">${item.price}
            </div>
        `;
    });
    html += `</div>`;

    // Quantity Column
    html += `<div class="col-lg-3"><h2 class="cart-title">Quantity</h2>`;
    cart.forEach((item, index) => {
      html += `
            <div class="qty-box qty-box-w mt-4 single-product">
                <span class="qty-label">Quantity</span>
                <div class="qty-number"><span class="qtyValue">${item.qty}</span></div>
                <div class="qty-btns">
                    <div class="qty-up" data-index="${index}"><i class="fa-solid fa-chevron-up"></i></div>
                    <div class="qty-down" data-index="${index}"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
            </div>
        `;
    });
    html += `</div>`;

    // Subtotal Column
    html += `<div class="col-lg-1"><h2 class="cart-title">Subtotal</h2>`;
    cart.forEach(item => {
      html += `
            <div class="price-item mt-5">
                <img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg" class="dirham">
                <span class="subtotalValue">${item.qty * item.price}</span>
            </div>
        `;
    });
    html += `</div>`;

    cartPage.innerHTML = html;

    // ==========================
    // QUANTITY UPDATE
    // ==========================
    document.querySelectorAll(".qty-up").forEach(btn => {
      btn.addEventListener("click", () => {
        let index = btn.dataset.index;
        cart[index].qty++;
        saveAndRefresh();
      });
    });

    document.querySelectorAll(".qty-down").forEach(btn => {
      btn.addEventListener("click", () => {
        let index = btn.dataset.index;
        if (cart[index].qty > 1) {
          cart[index].qty--;
        }
        saveAndRefresh();
      });
    });

    // REMOVE ITEM
    document.querySelectorAll(".remove-btn").forEach(btn => {
      btn.addEventListener("click", () => {
        let index = btn.dataset.index;
        cart.splice(index, 1);
        saveAndRefresh();
      });
    });

    // Update final Subtotal & Total
    function updateTotals() {
      let subtotal = cart.reduce((sum, item) => sum + (item.qty * item.price), 0);
      subtotalDisplay.innerHTML = `<img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg"> ${subtotal}`;
      totalDisplay.innerHTML = `<img src="<?= base_url() ?>assets/icons/FLORIA-DIRHAM.svg"> ${subtotal}`;
    }

    // Save cart and reload UI
    function saveAndRefresh() {
      localStorage.setItem("myCart", JSON.stringify(cart));
      location.reload();
    }

    updateTotals();

  });
</script>
<script>
  // Load Cart Items on Every Page
  function loadCartItems() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let cartItemsBox = document.getElementById("cartItems");
    let cartCount = document.querySelector(".count-cart");

    // Update count
    cartCount.innerText = cart.length;

    // Fill popup items
    cartItemsBox.innerHTML = "";
    cart.forEach(item => {
      cartItemsBox.innerHTML += `
            <div class="cart-item">
                <img src="${item.image}" width="40">
                <span>${item.name}</span>
                <strong>×${item.qty}</strong>
            </div>
        `;
    });
  }

  // Show popup
  document.getElementById("headerCartBtn").addEventListener("click", () => {
    document.getElementById("cartPopup").classList.toggle("show");
  });

  // Close popup on outside click
  document.addEventListener("click", (e) => {
    if (!e.target.closest("#headerCartBtn") &&
      !e.target.closest("#cartPopup")) {
      document.getElementById("cartPopup").classList.remove("show");
    }
  });

  // Auto load on every page
  loadCartItems();
</script>



</body>

</html>