<!--   RMIT University Vietnam
  Course: COSC2430 Web Programming
  Semester: 2023A
  Assessment: Assignment 2
  Author: Ho Dac Quang Minh
  ID: s3893444
  Acknowledgement:  student's sample
                    https://validator.w3.org/
                    https://jigsaw.w3.org/css-validator/ -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= "styleAbout.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  
  <title>Flex</title>

</head>

<body>


  <section>
    <!-- HEADER -->
    <?php include('templates/header.php'); ?>
    <!-- HEADER -->
  </section>
  <div class="about-section">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/000/552/769/original/vector-cartoon-ghost.jpg" alt="" style="width:20%">
        <div class="container">
          <h2>Pham Hong Nhat</h2>
          <p class="title">ghost</p>
          <p>s3915104@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://media.npr.org/assets/img/2017/09/12/macaca_nigra_self-portrait-3e0070aa19a7fe36e802253048411a38f14a79f8-s1100-c50.jpg" alt="" style="width:20%">
        <div class="container">
          <h2>Ho Dac Quang Minh</h2>
          <p class="title">coder</p>
          <p>s3893444@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/000/552/769/original/vector-cartoon-ghost.jpg" alt="" style="width:20%">
        <div class="container">
          <h2>Le Ngoc Cao Son</h2>
          <p class="title">ghost</p>
          <p>s3757823@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/000/552/769/original/vector-cartoon-ghost.jpg" alt="" style="width:20%">
        <div class="container">
          <h2>Chu Manh Tam</h2>
          <p class="title">ghost</p>
          <p>s3929815@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/000/552/769/original/vector-cartoon-ghost.jpg" alt="" style="width:20%">
        <div class="container">
          <h2>Dang Minh Tam</h2>
          <p class="title">ghost</p>
          <p>s3980087@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <section>
    <!-- FOOTER -->
    <?php include('templates/footer.php'); ?>
    <!-- FOOTER -->
  </section>
</body>

</html>