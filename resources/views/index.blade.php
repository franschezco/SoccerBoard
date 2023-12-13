<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>My Simple Livescore WebApp</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/tZ1a9SZnLHfc3WGzweTE5Gxz37EJ5SR9xqJlM=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="menu-wrap">
        <nav class="menu navbar">
            <div class="icon-list navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#video-area">Home</a>
                    </li>

                </ul>
            </div>
        </nav>
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
    </div>
    <!-- Header Section Start -->

    <header id="video-area" data-stellar-background-ratio="0.5">
        <div id="block" data-vide-bg="video/video"></div>
        <div class="fixed-top">
            <div class="container">
                <div class="logo-menu">
                    <a href="index.html" class="logo"><span class="lnr lnr-dice"></span> SCOREBOARD</a>
                    <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
                </div>
            </div>
        </div>
        <div class="overlay overlay-2"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">ScoreBoard - Latest Soccer
                            score's</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Get Latest Football scores and
                            new from anywhere around the world</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-header">

                <h6 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Simple<span> Livescore</span>
                </h6>

                <hr class="lines wow zoomIn" data-wow-delay="0.3s">

            </div>


         <center>
            <div class="tabs" id="dateTabs"></div>
            <div class="tabcontent" id="content">
                <!-- Content will be dynamically updated based on the selected date -->
            </div>
         </center>




            <div class="row mt-5 ms-5">
                @if ($response['meta']['count'] < 0) <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
                    <div class="card" data-wow-delay="0.2s">

                        <div class="card-body">
                            <div style="margin-top:1em"></div>
                            <div class="card-title">NO MATCH FIXTURES TODAY
                            </div>
                        </div>

                    </div>

            </div>
            @else






            @foreach ($response['data'] as $match )


            <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
                <div class="card" data-wow-delay="0.2s">

                    <div class="card-body">
                        <div style="margin-top:1em"></div>
                        <div class="card-title"><img src="{{$match['teams']['home']['img']}}" width="30px" alt=""> {{$match['teams']['home']['name']}} {{ $match['scores']['home_score'] }} - {{ $match['scores']['away_score'] }} {{$match['teams']['away']['name']}} <img width="30px" src="{{$match['teams']['away']['img']}}" alt=""> </div>
                        <div class="card-text">@if ($match['status_name'] =='Finished')
                            <p style="font-size: 10px; color:red">MATCH ENDED</p>
                            @elseif ($match['status_name'] =='Notstarted')
                            <p style="font-size: 10px; color:blue">NOT STARTED</p>
                            @else
                            <p style="font-size: 10px; color:green">ON GOING</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            @endif
    </section>
    <!-- Services Section End -->



    <!-- Footer Section Start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
<style>
     .tabs {
      display: flex;
    }
    
    .tablinks {
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      padding: 10px 15px;
      cursor: pointer;
    }
    
    .tabcontent {
      display: none;
      padding: 20px;
      position: absolute;
      top: 50px;
    }
    
    .tabcontent h3 {
      margin-top: 0;
    }
    
    /* Estilos para mobile */
    @media screen and (max-width: 600px) {
        .tablinks {
            background-color: #777;
            color: white;
            width: 100%;
            margin: 5px 0;
        }

        .tabcontent {
            padding: 0 18px;
            overflow: hidden;
            background-color: #f1f1f1;
            display: none;
            position: initial;
        }

        .tabs {
            display: flex;
            flex-direction: column;
        }
    }
</style>

<script>
       function generateDateTabs() {
    var currentDate = new Date();
    var dateTabs = document.getElementById("dateTabs");
    dateTabs.innerHTML = "";
  
    for (var i = -2; i <= 2; i++) {
      var tabDate = new Date(currentDate);
      tabDate.setDate(currentDate.getDate() + i);
  
      var tabButton = document.createElement("button");
      tabButton.classList.add("tablinks");
      tabButton.textContent = formatDate(tabDate);
      tabButton.setAttribute("onclick", `openTab('${formatDate(tabDate)}', this)`);
      dateTabs.appendChild(tabButton);
    }
  
    // Set the initial active tab
    var activeTab = document.getElementsByClassName("tablinks")[2];
    if (activeTab) {
      activeTab.classList.add("active");
      openTab(formatDate(currentDate), activeTab);
    }
  }
  
  function formatDate(date) {
    var options = { weekday: 'short', month: 'short', day: 'numeric' };
    return date.toLocaleDateString('en-US', options);
  }
  
  function openTab(date, clickedTab) {
    // Update the content based on the selected date
    var content = document.getElementById("content");
    content.innerHTML = `<h3>Content for ${date}</h3><p>Some content for ${date}.</p>`;
  
    // Remove the "active" class from all tabs
    var tablinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tablinks.length; i++) {
      tablinks[i].classList.remove("active");
      tablinks[i].style.fontWeight = "normal";
      tablinks[i].style.color = "black";
    }
  
    // Add the "active" class to the clicked tab
    if (clickedTab) {
      clickedTab.classList.add("active");
      clickedTab.style.fontWeight = "bold";
      clickedTab.style.color = "blue";
    }
  }
  
  // Generate the initial set of date tabs
  generateDateTabs();
  
</script>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/smooth-on-scroll.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

</body>

</html>