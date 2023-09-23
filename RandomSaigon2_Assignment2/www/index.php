<!--   RMIT University Vietnam
  Course: COSC2430 Web Programming
  Semester: 2023A
  Assessment: Assignment 2
  Author: Ho Dac Quang Minh
  ID: s3893444
  Acknowledgement:  student's sample
                    https://validator.w3.org/
                    https://jigsaw.w3.org/css-validator/ -->
<?php session_start();
define('SECURE', true); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>



  <!-- HEADER -->
  <?php include('templates/header.php'); ?>
  <!-- HEADER -->

  <!-- MAIN -->
  <section class="section_1 container-fluid p-0">
    <div class="d-flex flex-column">
      <div class="container-fluid text-center heading">
        <h1 class="h1">ECommerce Website<br>Wonderful place to buy and sell</h1>
        <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) : ?>
          <p class="p">Welcome to the Ecommerce website</p>

          <a href="register.php"><button type="button" class="btn btn1 btn-secondary">Register</button></a>
          <a href="login.php"><button type="button" class="btn btn1 btn-secondary">Login</button></a>
        <?php else : ?>
          <?php echo ('<p class="p">Welcome to the website, <b>' . $_SESSION["username"] . '</b>!</p>') ?>
        <?php endif; ?>
      </div>
      <div class="container">
        <div class="row">
          <div class="col align-self-start">
            <img class="img-fluid" src="https://devtechnosys.com/insights/wp-content/uploads/2021/05/marketplace-business-model.png">
          </div>
          <div class="col align-self-end">
            <img class="img-fluid" src="https://influencermarketinghub.com/wp-content/uploads/2022/11/Top-10-ecommerce-marketplace-advertising-software-tools.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN -->


  <!-- FOOTER -->
  <?php include('templates/footer.php'); ?>
  <!-- FOOTER -->
</body>

</html>