<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Joe Moore</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/a00fee0fb0.js" crossorigin="anonymous"></script>

  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Joe</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="home.php">Home</a>
            <a class="nav-link active" href="#">About</a>
            <a class="nav-link" href="projects.php">Projects</a>
            <a class="nav-link" href="tutoring.php">Tutoring</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav>
        </div>
      </header>
        <main role="main" class="inner cover">
            <h1 class="cover-heading">About me</h1>
            <p></p>
            <p class="lead">I am a second year undergraduate at the University of Warwick, studying Computer Science, with a keen interest in functional programming, artificial intelligence and cyber security.</p>
            <p class="lead">Outside of my degree I enjoy cooking, cycling and playing utltimate frisbee</p>
            <p class="lead">You can find me on <a href="https://github.com/joverandout">GitHub</a> and <a href="https://twitter.com/Joe_Moore_101">Twitter</a>.</p>
        </main>

        <footer class="mastfoot mt-auto">
          <p></p>
          <div><a class ="social" href="https://twitter.com/Joe_Moore_101" target=_blank><i class="fab fa-twitter"></i></a>
          <a class ="social" href="mailto:joe.moore@warwick.ac.uk" target=_blank><i class="fas fa-envelope"></i></a>
          <a class ="social" href="https://github.com/joverandout" target=_blank><i class="fab fa-github"></i></a>
          <a class ="social" href="cv2.pdf" target=_blank><i class="fas fa-file-alt" target=_blank></i></i></a>
          <a class ="social" href="https://www.linkedin.com/in/joe-moore-2b79b01ba/"target=_blank ><i class="fab fa-linkedin-in"></i></i></a>   
          </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <script>
      window.onscroll = function() {myFunction()};
      
      var header = document.getElementById("myHeader");
      var sticky = header.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
    </script>

  </body>
</html>
