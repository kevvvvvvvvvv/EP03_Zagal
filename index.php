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
<?php
// Configuración de conexión a la base de datos (al inicio del archivo)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jiks');

// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $conn->real_escape_string($_POST['name']);
    $complaint = $conn->real_escape_string($_POST['complaint']);

    if(!empty($name) && !empty($complaint)) {
        $sql = "SELECT MAX(id) as max_id FROM complaints";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $next_id = ($row['max_id'] ?? 0) + 1;

        $sql = "INSERT INTO complaints (id, name, text) VALUES ('$next_id', '$name', '$complaint')";

        if ($conn->query($sql)) {
            echo '<script>window.location.href = "'.$_SERVER['PHP_SELF'].'";</script>';
            exit();
        }
    }
    $conn->close();
}
?>

<!-- HTML -->
<section class="newsletter py-5">
    <div class="container">
        <div class="row justify-content-center"> <!-- Contenedor para centrar -->
            <div class="col-md-8 text-center"> <!-- Ancho medio y centrado -->
                <!-- Formulario -->
                <h3><?php echo $lang['subscribe_newsletter']; ?></h3>
                <form action="" method="POST" class="newsletter-form">
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="<?php echo $lang['your_name']; ?>" aria-label="Your name" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="complaint" class="form-control" placeholder="<?php echo $lang['your_suggestion']; ?>" aria-label="Your complaint" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $lang['submit']; ?></button>
                </form>

                <!-- Tabla de quejas -->
                <div class="mt-5">
                    <h4><?php echo $lang['recent_complaints']; ?></h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered border-dark"> <!-- mx-auto para centrar la tabla -->
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"><?php echo $lang['name']; ?></th>
                                    <th scope="col"><?php echo $lang['complaint']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT id, name, text FROM complaints ORDER BY id DESC LIMIT 10";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<th scope='row'>".$row['id']."</th>";
                                        echo "<td>".htmlspecialchars($row['name'])."</td>";
                                        echo "<td>".nl2br(htmlspecialchars($row['text']))."</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3' class='text-center'>".$lang['no_complaints']."</td></tr>";
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
    include 'footer.php';
?>