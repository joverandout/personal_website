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
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link active" href="#">Projects</a>
            <a class="nav-link" href="tutoring.php">Tutoring</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav>
        </div>
      </header>
        <main role="main" class="inner cover">
          <br>
          <br>
            <h1 class="cover-heading">Projects</h1>
            <p></p>
            <p class="lead">Over the Course of my degree I have engaged in a number of curricular and extra-curricular software development and coding projects:</p>
            <br>  
            <h3 style="text-align:justify;" style >Warwick Sport Register
            </h3> 
            <p style="text-align:justify;">Due to COVID restrictions in the academic year 2020/21 it was necessary to book onto all sports sessions. However, the people running the sessions were not given a register of who had booked on. Consequently, I set about making a program that could compile a register from forwarded email confirmations. I, therefore, developed a Python script to receive forwarded email confirmations from people booked onto a session. The script would then validate if the email were a Warwick Sport email, and then if so, extract the name of the attendee and the date. This compiled into a register was then exported to a website that the event runners could access.</p>
            <p style="text-align:justify;"> <a href="https://github.com/joverandout/warwick-sport-register" target="_blank"> Code for the website and register script can be found here.</a></p>
            <br>
            <h3 style="text-align:right;">Merge Sort Teaching Tool
            </h3> 
            <p style="text-align:justify;">During my first year I used processing and java to create a teaching tool which could explain, demonstrate and customise the merge sort algorithm. This
                was designed so that anyone could be taken through a step by step guide of the algorithm but also use their own numbers so they could see 
                how the sorting differed in each example. The software allowed the use to pause and step back and forward in the visualisation, as well as 
                giving step by step explanations of the algorithms next steps.
            </p>
            <img class="lead" src="mergersort.png" alt="Merge">
            <p></p>
            <p style="text-align:justify;">
                <a href="https://github.com/joverandout/Merge-sort-teaching-tool" target="_blank">It can also be found of GitHub.</a>
            </p>
            <br>
            <h3 style="text-align:left;">Advent of Code
            </h3> 
            <p style="text-align:justify;">In 2020 I participated in advent of code each day. <a href="https://github.com/joverandout/advent-of-code-2020" target="_blank">My solutions are again on my GitHub</a>
            </p>            <img class="lead" src="aoc.png" alt="Merge">

            <br>
            <p></p>
            <p class="lead">The code for the majority of my coursework cannot be given out, if, as a prospective employer, you are interested in seeing it please drop me an email. The following are some of my completed courseworks:</p>
            <table style="width:85%", class="center">
              <tr>
                <th>Coursework</th>
                <th>Mark</th>
              </tr>
              <tr>
                <td>Maze Generation and Solving in Java including rudimentary machine learning and implementation of the A* algorithm</td>
                <td>82%</td>
              </tr>
              <tr>
                <td>Classic Pong Arcade game coded on an Oscilloscope wrtten in Assembly code and C</td>
                <td>78%</td>
              </tr>
              <tr>
                <td>Database System with a range of advanced SQL commands</td>
                <td>73%</td>
              </tr>
              <tr>
                <td>Multi Threaded Packet Sniffer in C with built in detection of SYN Attacks, Arp Poisoning, and Blacklisted IPs</td>
                <td>86%</td>
              </tr>
              <tr>
                <td>Cyber Security Penetration Testing and isolation of key vulnerabilities of a banking website alongside the creation of automated tests</td>
                <td>87%</td>
              </tr>
            </table> 
          <p></p>
          <p></p>
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
