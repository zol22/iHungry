<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>iHungry</title>
  <!-- Bootstrap Core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
  
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="index.html">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Top</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">Recipes by Ingredients</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- Header -->
  <header class="ingredients d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Search recipes by Ingredients</h1>
      <h3 class="mb-5">
        <em>What is in your fridge?</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>
  <!-- About -->
  <div class="container" id="about" >
    <form action="server/API_request.php" method="post">
    <br>
    <h4>Please enter ingredients separated by comma<h4><br>
    <input type="text" name="ingredients" placeholder="Search" required ><br><br>
   <input type="submit" class="btn btn-info" value="submit" name="submit_ingredients">
  </form>
  </div>
  
  <!-- Callout -->
  <section class="callout">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Eat Good<br>
        <em>and</em>
        Feel Good</h2>
    </div>
  </section>
  <!-- Footer -->
  <footer  id="contact" class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; iHungry 2019</p>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- jQuery library -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
 <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>
</body>
</html>