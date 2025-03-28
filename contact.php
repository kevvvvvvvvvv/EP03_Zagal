<?php
    include 'header.php';
?>

<?php

    // Process form submission
    $message = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Database connection
        $servername = "mysql.webcindario.com";
        $dbname = "jiks";
        $username = "jiks";
        $password = "9JV2wcgLAMS93gR";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            $message = '<div class="alert alert-danger">' . $lang['db_connection_failed'] . ': ' . $conn->connect_error . '</div>';
        } else {
            // Get form data and sanitize
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $subject = $conn->real_escape_string($_POST['subject']);
            $message_text = $conn->real_escape_string($_POST['message']);
    
            // SQL query to insert data
            $sql = "INSERT INTO contact_messages (name, email, subject, message, created_at) 
                    VALUES ('$name', '$email', '$subject', '$message_text', NOW())";
    
            if ($conn->query($sql) === TRUE) {
                $message = '<div class="alert alert-success">' . $lang['message_sent_success'] . '</div>';
            } else {
                $message = '<div class="alert alert-danger">' . $lang['message_sent_error'] . ': ' . $conn->error . '</div>';
            }
    
            $conn->close();
        }
    }
?>

    <!-- Page Header -->
    <div class="page-header bg-purple text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1><i class="fas fa-envelope me-2"></i><?php echo $lang['contact_us']; ?></h1>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end mb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo $lang['home']; ?></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"><?php echo $lang['contact']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4"><?php echo $lang['send_us_message']; ?></h3>
                            <form action="contact.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"><?php echo $lang['your_name']; ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label"><?php echo $lang['your_email']; ?> <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label"><?php echo $lang['subject']; ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label"><?php echo $lang['message']; ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="privacy" required>
                                            <label class="form-check-label" for="privacy">
                                                <?php echo $lang['privacy_agreement']; ?> <a href=""><?php echo $lang['privacy_policy']; ?></a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"><?php echo $lang['send_message']; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4"><?php echo $lang['contact_info']; ?></h3>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <div class="contact-icon me-3">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $lang['address']; ?></h6>
                                        <p class="mb-0"><?php echo $lang['directions']; ?></p>
                                    </div>
                                </li>
                                <li class="d-flex mb-3">
                                    <div class="contact-icon me-3">
                                        <i class="fas fa-phone text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $lang['phone']; ?></h6>
                                        <p class="mb-0">(123) 456-7890</p>
                                    </div>
                                </li>
                                <li class="d-flex mb-3">
                                    <div class="contact-icon me-3">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $lang['email']; ?></h6>
                                        <p class="mb-0">info@jiks.com</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="contact-icon me-3">
                                        <i class="fas fa-clock text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?php echo $lang['hours']; ?></h6>
                                        <p class="mb-0"><?php echo $lang['date']; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4"><?php echo $lang['follow_us']; ?></h3>
                            <div class="social-links">
                                <a href="https://www.facebook.com" class="btn btn-outline-primary me-2 mb-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                                <a href="https://www.x.com" class="btn btn-outline-info me-2 mb-2"><i class="fab fa-twitter"></i> Twitter</a>
                                <a href="https://www.instagram.com" class="btn btn-outline-danger me-2 mb-2"><i class="fab fa-instagram"></i> Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container-fluid p-0">
            <div class="map-container">
                <!-- Placeholder for map - In real implementation, use Google Maps or similar service -->
                <div class="map-placeholder bg-light text-center py-5">
                    <i class="fas fa-map-marked-alt fa-4x text-secondary mb-3"></i>
                    <h4><?php echo $lang['find_us_map']; ?></h4>
                    <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8324.521705510846!2d-99.13964419866056!3d18.88989455394549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce7436090d122b%3A0x2acb88c1b5c1452a!2sUniversidad%20Polit%C3%A9cnica%20del%20Estado%20de%20Morelos!5e0!3m2!1ses!2smx!4v1741581841580!5m2!1ses!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'footer.php';
?>