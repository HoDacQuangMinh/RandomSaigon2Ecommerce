
<!--   RMIT University Vietnam
  Course: COSC2430 Web Programming
  Semester: 2023A
  Assessment: Assignment 2
  Author: Ho Dac Quang Minh
  ID: s3893444
  Acknowledgement:  s3950664's sample
                    https://validator.w3.org/
                    https://jigsaw.w3.org/css-validator/ -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<div>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary bg-gradient">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7a3ec529632909.55fc107b84b8c.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                    ECommerce Website
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) : ?>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link hover-effect" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover-effect" href="register.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover-effect" href="login.php">Login</a>
                            </li>
                        </ul>
                    <?php else : ?>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link hover-effect" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover-effect" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover-effect" href="my_account.php">My Account</a>
                            </li>
                            <?php if ($_SESSION['role'] == "vendor") : ?>
                                <li class="nav-item">
                                    <a class="nav-link hover-effect" href="add_product.php">Add Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link hover-effect" href="view_product.php">View Products</a>
                                </li>
                            <?php endif; ?>

                            <?php if ($_SESSION['role'] == "customer") : ?>
                                <li class="nav-item">
                                    <a class="nav-link hover-effect" href="browse_product.php">Browse All Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link hover-effect" href="view_cart.php">View Shopping Cart</a>
                                </li>
                            <?php endif; ?>

                            <?php if ($_SESSION['role'] == "shipper") : ?>
                                <li class="nav-item">
                                    <a class="nav-link hover-effect" href="active_orders.php">Active Orders</a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
</div>