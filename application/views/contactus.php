<?php include('includes/header-link.php') ?>
<?php include('includes/mainheader.php') ?>




<div class="container py-5">

    <div class="row align-items-center">

        <!-- LEFT SIDE -->
        <div class="col-lg-6 mb-4">
            <div class="left-box">

                <img src="<?= base_url() ?>assets/Images/menu-3.jpg"
                    class="profile-img" alt="Profile">



                <p>
                    Welcome to Floria, a place where all flower shops
                    take on a whole new dimension of beautiful.
                </p>

                <img class="menu-signature" src="<?= base_url() ?>assets/icons/sign2.png">
                <p class="menu-small-sub font-oswaldextralight">Founder</p>

            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-6">
            <div class="right-box">

                <h2 class="right-title">Get In Touch</h2>



                <form>
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control contact-input mb-4">

                    <label class="form-label">Message</label>
                    <textarea class="form-control contact-input mb-4" rows="3"></textarea>

                    <button class="cart-btn">Send</button>
                </form>

            </div>
        </div>

    </div>

</div>

<?php include('includes/footer-link.php') ?>
<?php include('includes/footer.php') ?>