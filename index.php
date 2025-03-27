<?php
    include 'header.php';
?>

    <!-- Hero Banner Section -->
    <div class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4"><?php echo $lang['welcome_to']; ?> <span class="text-primary">JIK's</span></h1>
                    <p class="lead"><?php echo $lang['hero_tagline']; ?></p>
                    <a href="products.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-shopping-basket"></i> <?php echo $lang['shop_now']; ?>
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="images/hero-image.jpg" alt="Fresh Products" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <section class="featured-categories py-5">
        <div class="container">
            <h2 class="text-center mb-4"><?php echo $lang['featured_categories']; ?></h2>
            <div class="row">
                <!-- Electronics Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card">
                        <img src="images/electronics.jpg" alt="<?php echo $lang['electronics']; ?>" class="img-fluid category-image">
                        <div class="category-overlay">
                            <h3><?php echo $lang['electronics']; ?></h3>
                            <a href="electronics.php" class="btn btn-light"><?php echo $lang['explore']; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- Groceries Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card">
                        <img src="images/groceries.jpg" alt="<?php echo $lang['groceries']; ?>" class="img-fluid category-image">
                        <div class="category-overlay">
                            <h3><?php echo $lang['groceries']; ?></h3>
                            <a href="groceries.php" class="btn btn-light"><?php echo $lang['explore']; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- Household Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card">
                        <img src="images/household.png" alt="<?php echo $lang['household']; ?>" class="img-fluid category-image">
                        <div class="category-overlay">
                            <h3><?php echo $lang['household']; ?></h3>
                            <a href="household.php" class="btn btn-light"><?php echo $lang['explore']; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- Fresh Produce Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card">
                        <img src="images/fresh-produce.jpg" alt="<?php echo $lang['fresh_produce']; ?>" class="img-fluid category-image">
                        <div class="category-overlay">
                            <h3><?php echo $lang['fresh_produce']; ?></h3>
                            <a href="fresh-produce.php" class="btn btn-light"><?php echo $lang['explore']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="special-offers py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4" id="special-offers"><?php echo $lang['special_offers']; ?></h2>
            <div class="row">
                <!-- Offer 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 offer-card">
                        <div class="badge bg-danger position-absolute top-0 end-0 m-2"><?php echo $lang['sale']; ?></div>
                        <img src="images/offer1.jpg" class="card-img-top" alt="Special Offer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['weekly_deals']; ?></h5>
                            <p class="card-text"><?php echo $lang['weekly_deals_desc']; ?></p>
                            <a href="" class="btn btn-primary"><?php echo $lang['view_deals']; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- Offer 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 offer-card">
                        <div class="badge bg-warning position-absolute top-0 end-0 m-2"><?php echo $lang['new']; ?></div>
                        <img src="images/offer2.jpg" class="card-img-top" alt="Special Offer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['seasonal_products']; ?></h5>
                            <p class="card-text"><?php echo $lang['seasonal_products_desc']; ?></p>
                            <a href="" class="btn btn-primary"><?php echo $lang['shop_seasonal']; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- Offer 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 offer-card">
                        <div class="badge bg-info position-absolute top-0 end-0 m-2"><?php echo $lang['exclusive']; ?></div>
                        <img src="images/offer3.webp" class="card-img-top" alt="Special Offer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['membership_benefits']; ?></h5>
                            <p class="card-text"><?php echo $lang['membership_benefits_desc']; ?></p>
                            <a href="" class="btn btn-primary"><?php echo $lang['join_now']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3><?php echo $lang['subscribe_newsletter']; ?></h3>
                    <p class="mb-4"><?php echo $lang['newsletter_desc']; ?></p>
                    <form action="" method="POST" class="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="<?php echo $lang['your_email']; ?>" aria-label="Email address" required>
                            <button class="btn btn-primary" type="submit"><?php echo $lang['subscribe']; ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'footer.php';
?>