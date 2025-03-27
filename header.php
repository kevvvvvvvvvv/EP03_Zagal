<?php
session_start();

// Set default language if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es';
}

// Set default theme if not set
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
}

// Handle language change
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Handle theme change
if (isset($_GET['theme'])) {
    $_SESSION['theme'] = $_GET['theme'];
}

// Include language file
include_once 'lang/' . $_SESSION['lang'] . '.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIK's - <?php echo $lang['supermarket']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <?php if ($_SESSION['theme'] == 'dark'): ?>
    <link rel="stylesheet" href="css/dark-mode.css">
    <?php endif; ?>
</head>
<body class="<?php echo $_SESSION['theme']; ?>-theme">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-<?php echo $_SESSION['theme'] == 'dark' ? 'dark' : 'light'; ?> bg-<?php echo $_SESSION['theme'] == 'dark' ? 'dark' : 'light'; ?>">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="JIK's Logo" width="50" height="50">
                <span class="brand-text">JIK's</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="fas fa-home"></i> <?php echo $lang['home']; ?>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#special-offers">
                            <i class="fas fa-tag"></i> <?php echo $lang['promotions']; ?>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <i class="fas fa-envelope"></i> <?php echo $lang['contact']; ?>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <i class="fas fa-info-circle"></i> <?php echo $lang['about']; ?>
                        </a>
                    </li>
                </ul>
                
                <!-- Search Form -->
                <form class="d-flex me-2">
                    <input class="form-control me-2" type="search" placeholder="<?php echo $lang['search']; ?>" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>
                
                <!-- Language and Theme Toggles -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                        <li><h6 class="dropdown-header"><?php echo $lang['language']; ?></h6></li>
                        <li><a class="dropdown-item <?php echo $_SESSION['lang'] == 'es' ? 'active' : ''; ?>" href="?lang=es">Español</a></li>
                        <li><a class="dropdown-item <?php echo $_SESSION['lang'] == 'en' ? 'active' : ''; ?>" href="?lang=en">English</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header"><?php echo $lang['theme']; ?></h6></li>
                        <li><a class="dropdown-item <?php echo $_SESSION['theme'] == 'light' ? 'active' : ''; ?>" href="?theme=light"><i class="fas fa-sun"></i> <?php echo $lang['light']; ?></a></li>
                        <li><a class="dropdown-item <?php echo $_SESSION['theme'] == 'dark' ? 'active' : ''; ?>" href="?theme=dark"><i class="fas fa-moon"></i> <?php echo $lang['dark']; ?></a></li>
                    </ul>
                </div>
                
                <!-- User Actions -->
                <div class="nav-item dropdown ms-2">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href=""><?php echo $lang['login']; ?></a></li>
                        <li><a class="dropdown-item" href=""><?php echo $lang['register']; ?></a></li>
                    </ul>
                </div>
                
                <!-- Shopping Cart -->
                <a href="" class="btn btn-primary ms-2">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge bg-danger">0</span>
                </a>
            </div>
        </div>
    </nav>