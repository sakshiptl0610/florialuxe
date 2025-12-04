<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- LUCIDE ICONS -->
<script type="module">
  import {
    createIcons,
    Instagram,
    FacebookIcon,
    MessageCircle
  }
  from "https://cdn.jsdelivr.net/npm/lucide@latest";

  createIcons({
    icons: {
      Instagram,
      FacebookIcon,
      Whatsapp: MessageCircle
    }
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {

    /* =====================================================
       1️⃣ HEADER MENUS
    ===================================================== */
    const firstHamburger = document.getElementById("hamburgerFirst");
    const firstMenu = document.getElementById("mobileMenuFirst");
    const closeFirst = document.getElementById("closeFirst");

    firstHamburger?.addEventListener("click", () => firstMenu.classList.add("active"));
    closeFirst?.addEventListener("click", () => firstMenu.classList.remove("active"));

    const scrollHamburger = document.getElementById("hamburgerScroll");
    const scrollMenu = document.getElementById("mobileMenu");
    const closeScroll = document.getElementById("closeScroll");
    const scrollHeader = document.getElementById("scrollHeader");

    window.addEventListener("scroll", () => {
      scrollHeader?.classList.toggle("scrolled", window.scrollY > 150);
    });

    scrollHamburger?.addEventListener("click", () => scrollMenu.classList.add("active"));
    closeScroll?.addEventListener("click", () => scrollMenu.classList.remove("active"));

    /* =====================================================
       2️⃣ SECOND MENU
    ===================================================== */
    const menu2 = document.getElementById("mobileMenuSecond");
    const open2 = document.getElementById("hamburgerSecond");
    const close2 = document.getElementById("menuCloseSecond");

    open2?.addEventListener("click", () => menu2.classList.add("active"));
    close2?.addEventListener("click", () => menu2.classList.remove("active"));

    /* =====================================================
       3️⃣ PRODUCT FILTER (Products Page Only)
    ===================================================== */
    const products = document.querySelectorAll(".product");
    if (products.length) {
      const topFilters = document.querySelectorAll(".filter-bar li[data-filter]");
      const dropdownBtn = document.querySelector(".dropdown-btn");
      const dropdownFilters = document.querySelectorAll(".extra-dropdown p");
      const dropdownBox = document.querySelector(".extra-dropdown");

      function applyFilter(f) {
        products.forEach(item => {
          item.style.display = (f === "all" || item.classList.contains(f)) ? "block" : "none";
        });
      }

      topFilters.forEach(btn => {
        btn.addEventListener("click", () => {
          document.querySelector(".filter-bar li.active")?.classList.remove("active");
          btn.classList.add("active");
          applyFilter(btn.dataset.filter);
        });
      });

      dropdownBtn?.addEventListener("click", () => {
        dropdownBox.style.display = dropdownBox.style.display === "block" ? "none" : "block";
      });

      dropdownFilters.forEach(opt => {
        opt.addEventListener("click", () => {
          applyFilter(opt.dataset.filter);
          dropdownBox.style.display = "none";
        });
      });

      document.addEventListener("click", e => {
        if (!e.target.closest(".extra-dropdown") && !e.target.closest(".dropdown-btn")) {
          dropdownBox.style.display = "none";
        }
      });
    }

    /* =====================================================
       4️⃣ COUPON BOX
    ===================================================== */
    const toggleCoupon = document.querySelector(".coupon-toggle");
    const boxCoupon = document.querySelector(".coupon-input-box");

    toggleCoupon?.addEventListener("click", e => {
      e.preventDefault();
      boxCoupon.classList.toggle("open");
    });

    document.addEventListener("click", e => {
      if (!boxCoupon?.contains(e.target) && !toggleCoupon?.contains(e.target)) {
        boxCoupon?.classList.remove("open");
      }
    });

    /* =====================================================
       5️⃣ CUSTOM COUNTRY SELECT
    ===================================================== */
    const countrySelect = document.querySelector("#countrySelect");
    if (countrySelect) {
      const wrap = document.createElement("div");
      wrap.classList.add("custom-select-wrapper");
      countrySelect.parentNode.insertBefore(wrap, countrySelect);
      wrap.appendChild(countrySelect);
      countrySelect.style.display = "none";

      const display = document.createElement("div");
      display.classList.add("custom-select-display");
      display.textContent = countrySelect.options[0].textContent;
      wrap.appendChild(display);

      const panel = document.createElement("div");
      panel.classList.add("custom-select-panel");
      wrap.appendChild(panel);

      const search = document.createElement("input");
      search.classList.add("custom-select-search");
      search.placeholder = "Search...";
      panel.appendChild(search);

      const list = document.createElement("div");
      list.classList.add("custom-select-list");
      panel.appendChild(list);

      Array.from(countrySelect.options).forEach(opt => {
        const item = document.createElement("div");
        item.textContent = opt.textContent;
        list.appendChild(item);

        item.addEventListener("click", () => {
          display.textContent = opt.textContent;
          countrySelect.value = opt.value;
          panel.style.display = "none";
        });
      });

      display.addEventListener("click", e => {
        e.stopPropagation();
        panel.style.display = panel.style.display === "block" ? "none" : "block";
      });

      document.addEventListener("click", () => panel.style.display = "none");

      search.addEventListener("keyup", () => {
        const val = search.value.toLowerCase();
        Array.from(list.children).forEach(el => {
          el.style.display = el.textContent.toLowerCase().includes(val) ? "block" : "none";
        });
      });
    }

    /* =====================================================
       6️⃣ PAYMENT OPTION
    ===================================================== */
    document.querySelectorAll(".pay-option input").forEach(opt => {
      opt.addEventListener("change", () => {
        document.querySelectorAll(".pay-option").forEach(i => i.classList.remove("active"));
        opt.parentElement.classList.add("active");
      });
    });

    /* =====================================================
       7️⃣ PRODUCT IMAGE ZOOM
    ===================================================== */
    const mainImg = document.getElementById("mainProductImage");
    if (mainImg) {
      const cont = mainImg.parentElement;
      const ZOOM = 1.3;

      cont.addEventListener("mouseenter", () => {
        mainImg.style.transform = `scale(${ZOOM})`;
      });

      cont.addEventListener("mouseleave", () => {
        mainImg.style.transform = "scale(1)";
        mainImg.style.transformOrigin = "center center";
      });

      cont.addEventListener("mousemove", e => {
        const rect = mainImg.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        mainImg.style.transformOrigin = `${x}% ${y}%`;
      });
    }

    /* =====================================================
       8️⃣ QUANTITY BUTTON
    ===================================================== */
    let qty = 1;
    const qtyValue = document.querySelector("#qtyValue");
    const qtyUp = document.querySelector(".qty-up");
    const qtyDown = document.querySelector(".qty-down");

    qtyUp?.addEventListener("click", () => {
      qty++;
      qtyValue.textContent = qty;
    });

    qtyDown?.addEventListener("click", () => {
      if (qty > 1) qty--;
      qtyValue.textContent = qty;
    });

    /* =====================================================
       9️⃣ CART SYSTEM (GLOBAL)
    ===================================================== */
    let cart = JSON.parse(localStorage.getItem("myCart")) || [];

    const cartCount = document.querySelector(".count-cart");
    const cartPopup = document.getElementById("cartPopup");
    const closeCartPopup = document.getElementById("closeCartPopup");
    const headerCartBtn = document.getElementById("headerCartBtn");
    const cartItemsBox = document.getElementById("cartItems");
    const addToCartBtn = document.getElementById("addToCartBtn");

    /* UPDATE CART UI */
    function updateCartUI() {
      cartCount.innerText = cart.reduce((s, i) => s + i.qty, 0);
      cartItemsBox.innerHTML = "";

      cart.forEach((item, index) => {
        cartItemsBox.innerHTML += `
      <div class="cart-popup-item">
        <img src="${item.img}" />
        <div class="w-100">
          <b>${item.name}</b><br>
          AED ${item.price}
          <div class="popup-qty-box">
            <button class="qtyMinus" data-index="${index}">-</button>
            <span class="popup-qty">${item.qty}</span>
            <button class="qtyPlus" data-index="${index}">+</button>
          </div>
        </div>
      </div>`;
      });

      localStorage.setItem("myCart", JSON.stringify(cart));
      bindQtyButtons();
    }

    /* QTY BUTTONS (POPUP) */
    function bindQtyButtons() {
      document.querySelectorAll(".qtyPlus").forEach(btn => {
        btn.addEventListener("click", e => {
          e.stopPropagation();
          let i = btn.dataset.index;
          cart[i].qty++;
          updateCartUI();
        });
      });

      document.querySelectorAll(".qtyMinus").forEach(btn => {
        btn.addEventListener("click", e => {
          e.stopPropagation();
          let i = btn.dataset.index;
          if (cart[i].qty > 1) cart[i].qty--;
          updateCartUI();
        });
      });
    }

    /* ADD TO CART BUTTON (Product Page Only) */
    addToCartBtn?.addEventListener("click", () => {

      let name = document.querySelector(".title")?.innerText;

      // PRICE FIX (extract number safely)
      let rawPrice = document.querySelector(".product-price")?.innerText || "0";
      let price = parseFloat(rawPrice.replace(/[^0-9.]/g, ""));

      let img = mainImg?.src;

      let exists = cart.find(p => p.name === name);

      if (exists) {
        exists.qty += qty;
      } else {
        cart.push({
          name,
          price,
          qty,
          img
        });
      }

      updateCartUI();
      cartPopup.classList.add("show");

      const viewBox = document.querySelector(".view-cart-box");
      if (viewBox) {
        viewBox.classList.add("show-cart-box");
      }
    });


    /* SHOW / HIDE CART POPUP */
    headerCartBtn?.addEventListener("click", e => {
      e.stopPropagation();
      cartPopup.classList.toggle("show");
    });

    closeCartPopup?.addEventListener("click", () => {
      cartPopup.classList.remove("show");
    });

    document.addEventListener("click", e => {
      if (!cartPopup.contains(e.target) && !headerCartBtn.contains(e.target)) {
        cartPopup.classList.remove("show");
      }
    });

    updateCartUI();

  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll('.roisin-img-reveal');

    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.2
    });

    images.forEach(img => obs.observe(img));
  });

  document.addEventListener("DOMContentLoaded", function() {
    const blocks = document.querySelectorAll('.reveal-right');

    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.2
    });

    blocks.forEach(b => obs.observe(b));
  });

  // document.addEventListener("DOMContentLoaded", function () {
  //     const blocks = document.querySelectorAll('.svg-reveal');

  //     const obs = new IntersectionObserver((entries) => {
  //         entries.forEach((entry) => {
  //             if (entry.isIntersecting) {
  //                 entry.target.classList.add('show');
  //             }
  //         });
  //     }, { threshold : 0.2 });

  //     blocks.forEach(b => obs.observe(b));
  // });

  document.addEventListener("DOMContentLoaded", function() {
    const blocks = document.querySelectorAll('.line-top-bottom');

    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.2
    });

    blocks.forEach(b => obs.observe(b));
  });

  // document.addEventListener("DOMContentLoaded", () => {
  //   const blocks = document.querySelectorAll(".animate-block");

  //   const observer = new IntersectionObserver((entries) => {
  //     entries.forEach(entry => {
  //       if (entry.isIntersecting) {
  //         entry.target.classList.add("show");
  //       }
  //     });
  //   }, {
  //     threshold: 0.2
  //   });

  //   blocks.forEach(block => observer.observe(block));
  // });
</script>


</body>

</html>