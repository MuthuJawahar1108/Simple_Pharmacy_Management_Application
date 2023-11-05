

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"> -->
    
</head>
<body>
    <nav>
        <p>Welcome <span>
            <?php 
                if (isset($_GET["user"])) {
                    $username = urldecode($_GET["user"]);
                    echo $username; 
                }
            ?>
        </span></p>
        <a href="index.html">Logout</a>
    </nav>
    <div class="header-div">
        <h1 class="dashboard_h1">Muthu Pharmacies </h1>
    </div>
    <h2 class="dashboard_h2">Dashboard</h2>
    <div class="options">
        <a href="stock.html">Add Stock</a>
        <a href="billing.php">Billing Portal</a>
    </div>
</body>
</html>