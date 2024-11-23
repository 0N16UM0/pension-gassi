<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo/logo.png">
  <link rel="stylesheet" type="text/css" href="parts/styles/index.css" />
  <title>Gassi</title>
</head>
<body>
  <div id="page" class="">
    <?php 
      require("./parts/header.php"); 
      require("./parts/services.php");  
      require("./parts/portfolio.php"); 
      require("./parts/aboutus.php"); 
      require("./parts/team.php");
      require("./parts/contact.php");
      require("./parts/footer.php");
    ?>
  </div>
  <script type="text/javascript" src="lib/jquery/jquery-3.7.1.js"></script>
  <script src="lib/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/db48d73a1e.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="index.js"></script>
</body>

</html>