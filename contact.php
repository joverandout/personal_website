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
            <a class="nav-link" href="home.html">Home</a>
            <a class="nav-link" href="about.html">About</a>
            <a class="nav-link" href="projects.html">Projects</a>
            <a class="nav-link" href="tutoring.html">Tutoring</a>
            <a class="nav-link active" href="#">Contact</a>
          </nav>
        </div>
      </header>
        <main role="main" class="inner cover">
            <!--Section: Contact v.2-->
<section class="mb-4">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact me</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">Please feel free to contact me about anything from computer science to tutoring enquiries, even how to make a bearnaise sauce!</p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control">
                          <label for="name" class="">Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control">
                          <label for="email" class="">Your email</label>
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control">
                          <label for="subject" class="">Subject</label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                          <label for="message">Your message</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="validateForm();">Send</a>          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Coventry, CV5, UK</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>07508617059</p>

              <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p style="margin-right:7em;">joverandout@gmail.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->
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
