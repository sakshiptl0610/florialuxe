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




</body>

</html>