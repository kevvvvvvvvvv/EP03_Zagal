<?php
    include 'header.php';
?>

    <!-- Page Header -->
    <div class="page-header bg-purple text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1><i class="fas fa-info-circle me-2"></i><?php echo $lang['about_us']; ?></h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end mb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo $lang['home']; ?></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"><?php echo $lang['about']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2><?php echo $lang['our_story']; ?></h2>
                    <p><?php echo $lang['our_story_desc']; ?></p>
                </div>
                <div class="col-lg-6">
                    <img src="images/about-us.jpg" alt="<?php echo $lang['about_us']; ?>" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

<?php
    include 'footer.php';
?>