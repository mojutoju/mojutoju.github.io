<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Welcome to my Portfolio</title>
    <link rel="icon" href="img/logo.svg" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>


body{
    font-family: 'Helvetica';
}

      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #000 !important;
      }


      .navbar-nav > li{
  padding-left:10px;
  padding-right:10px;
}

.navbar-nav > li{
  margin-left:20px;
  margin-right:20px;
}

   /* Carousel styling */
   #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(3) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #0D58B8;
        }



        #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #DE0460; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #4A8C82; /* Add a dark-grey background on hover */
}



html{
    scroll-behavior: smooth;
}


.navbar .nav-link {
        color: #fff !important;
      }


      .navbar-nav > li{
  padding-left:10px;
  padding-right:10px;
}

.navbar-nav > li{
  margin-left:20px;
  margin-right:20px;
}

        </style>
</head>


<body>


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar d-none" style="z-index: 2000; ">
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="index.php">
          <img src="img/logo.svg" class="img-fluid" width="200px">
          </a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;">
            <i class="fas fa-bars" style="font-size:25px; color: #101024;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php" >Home</a>
              </li>






                  <li class="nav-item">
                              <a class="nav-link" href="aboutme.php" rel="nofollow"
                              >About Me</a>
                            </li>






                                <li class="nav-item">
                                            <a class="nav-link" href="#skills" rel="nofollow"
                                            >Skills Armory </a>
                                          </li>


              <li class="nav-item">
                <a class="nav-link" href="#projects" rel="nofollow"
                >Projects</a>
              </li>



                            <li class="nav-item">
                              <a class="nav-link" href="#watchvideo" rel="nofollow"
                              >Watch Video</a>
                            </li>






        </ul>
      </li>


            </ul>


            <form class="d-flex input-group w-auto">

            <ul class="navbar-nav w-100 ">


              <li class="nav-item " style="color:black;">
                <a target="_blank" class="nav-link btn btn btn-lg" href="https://drive.google.com/file/d/1yusI0yQeccSoYYCxCMqtqVur-dqggRDN/view?usp=sharing" rel="nofollow" style="font-weight:bold; background-color:orange; color:black;">
                  Hire Me!
                </a>
              </li>

            </ul>

</form>

          </div>
        </div>
      </nav>
      <!-- Navbar -->



<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>


<script>
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>


</body>
</html>
