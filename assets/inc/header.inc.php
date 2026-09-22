
<!-- header for all  -->
<?php 
if(!isset($basePath)) {
    $basePath = './';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/styles.css">

    <title><?php echo isset($pageTitle) ? $pageTitle : 'Discovering Washington, D.C.'; ?></title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-part">
                <h1>Discovering Washington, D.C.</h1>
            </div>

            <button class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <nav class="main-nav" id="mainNav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?php echo $basePath; ?>index.php" class="nav-link active">Home</a>
            </li>
            <li class="nav-item-has-submenu">
                <button class="nav-link-submenu-toggle">
                    Explore D.C.
                    <span class="arrow">▼</span>
                </button>
                <ul class="submenu">
                    <li><a href="<?php echo $basePath; ?>attractions.php">All Attractions</a></li>
                    <li><a href="<?php echo $basePath; ?>monuments.php">Monuments</a></li>
                    <li><a href="<?php echo $basePath; ?>museums.php">Museums</a></li>
                    <li><a href="<?php echo $basePath; ?>national-mall.php">National Mall</a></li>
                    <li><a href="<?php echo $basePath; ?>tourist.php">Extra Tourist Areas</a></li>
                </ul>
            </li>
            <li class="nav-item-has-submenu">
                <button class="nav-link-submenu-toggle">
                    Culture & Food
                    <span class="arrow">▼</span>
                </button>
                <ul class="submenu">
                    <li><a href="<?php echo $basePath; ?>culture.php">Culture</a></li>
                    <li><a href="<?php echo $basePath; ?>cuisine.php">Local Cuisine</a></li>
                    <li><a href="<?php echo $basePath; ?>festivals.php">Events & Festivals</a></li>
                </ul>
            </li>
            <li class="nav-item-has-submenu">
                <button class="nav-link-submenu-toggle">
                    Travel Planning
                    <span class="arrow">▼</span>
                </button>
                <ul class="submenu">
                    <li><a href="<?php echo $basePath; ?>tips.php">Travel Tips</a></li>
                    <li><a href="<?php echo $basePath; ?>stay.php">Where to Stay</a></li>
                </ul>
            </li>
            <li class="nav-item-has-submenu">
                <button class="nav-link-submenu-toggle">
                    Blog
                    <span class="arrow">▼</span>
                </button>
                <ul class="submenu">
                    <li><a href="<?php echo $basePath; ?>story.php">My Story</a></li>
                    <li><a href="<?php echo $basePath; ?>contact.php">Contact</a></li>
                    <li><a href="<?php echo $basePath; ?>comments.php">Comments & Ratings</a></li>

                </ul>
            </li>
        </ul>
    </nav>
