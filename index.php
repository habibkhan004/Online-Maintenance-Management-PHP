<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <title>OMMS</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">
      OMMS
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">
            <!-- home icon  -->
            <i class="fas fa-home"></i>
            Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">
            <!-- services icon  -->
            <i class="fas fa-business-time"></i>
            Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">
            <!-- Registeration icon  -->
            <i class="fas fa-user-plus"></i>
            Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">
            <!-- login icon  -->
            <i class="fas fa-sign-in-alt"></i>
            Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">
            <!-- contact icon  -->
            <i class="fas fa-address-book"></i>
            Contact</a></li>
        <li class="nav-item"><a href="Admin/login.php" class="nav-link">
            <!-- admin login icon  -->
            <i class="fas fa-user-shield"></i>
            Admin Login</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->


  <!-- carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height:400px">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/1.jpg" alt="First slide" style="height:400px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/2.jpg" alt="Second slide" style="height:400px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/3.jpg" alt="Third slide" style="height:400px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- end carousel -->


  <div class="container" id="mbgreeting">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>WELCOME TO Online Maintenance Managment System </h1>
      </div>
    </div>
  </div>


  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-md-12 text-center">
        <h6 id="myh1">
          <div id="myspan1">"WELCOME TO </div>&nbsp;<span id="myspan2"> OMMS"</span>
        </h6>
        <p style="margin-top:10px"><a id="second" href="https://codepen.io/grohit/">Customer service shouldn't just be a department, it should be the entire company.</a></p>
      </div>
    </div>
  </div>








  <div class="container " style="margin-top:30px">
    <!--Introduction Section-->
    <div class="jumbotron " id="juminfo">
      <h3 class="text-center">OGMS Services</h3>
      <p>
        OMMS Services is Pakistan’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
      </p>

    </div>
  </div>
  
  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <div class="row">

        <div class="card" id="cardbg" class="col-md-4">
          <div class="face face1">
            <div class="content" style="text-align:center">
              <span class="stars"></span>
              <img src="images/avtar1.jpeg" style="border-radius:50px" alt="">
              <h2 class="java">testing...</h2>
              <p class="java">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis error distinctio.</p>
            </div>
          </div>
          <div class="face face2">
            <h2>Review 01</h2>
          </div>
        </div>

        <div class="card" id="cardbg" class="col-md-4">
          <div class="face face1">
            <div class="content" style="text-align:center">
              <span class="stars"></span>
              <img src="images/avtar2.jpeg" style="border-radius:50px" alt="">
              <h2 class="python">testing</h2>
              <p class="python">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptas reprehenderit odio.</p>
            </div>
          </div>
          <div class="face face2">
            <h2>Review 02</h2>
          </div>
        </div>

        <div class="card" id="cardbg" class="col-md-4">
          <div class="face face1">
            <div class="content" style="text-align:center">
              <span class="stars"></span>
              <img src="images/avtar3.jpeg" style="border-radius:50px" alt="">
              <h2 class="cSharp">testing</h2>
              <p class="cSharp">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo accusantium ad pariatur.</p>
            </div>
          </div>
          <div class="face face2">
            <h2>Review 03</h2>
          </div>
        </div>
      </div>
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Government Degree <br>
        collage <br>
        Hayatabad Peshawar - 25000<br>
        Phone: 091-XXXXXXX <br>
        <a href="#" target="_blank">www.omms.com</a> <br>

        <br><br>
        <!-- <strong>Delhi Branch:</strong> <br>
        OMMS Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.OMMS.com</a> <br> -->
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
    <style>
      .path-0 {
        animation: pathAnim-0 4s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }

      @keyframes pathAnim-0 {
        0% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 71.1837856406733,142.81243558914463 142.3675712813466,152.62487117828928 217,156 C 291.6324287186534,159.37512882171072 369.7135005152869,156.3129508759876 433,161 C 496.2864994847131,165.6870491240124 544.778426657506,178.12332531776025 598,169 C 651.221573342494,159.87667468223975 709.1727928546893,129.19374785297148 792,110 C 874.8272071453107,90.80625214702852 982.5304019237376,83.10168327035383 1064,93 C 1145.4695980762624,102.89831672964617 1200.7055994503608,130.3995190656132 1259,140 C 1317.2944005496392,149.6004809343868 1378.6472002748196,141.30024046719342 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        25% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 75.70731707317074,104.5774647887324 151.41463414634148,76.1549295774648 211,91 C 270.5853658536585,105.8450704225352 314.0487804878049,163.95774647887322 379,165 C 443.9512195121951,166.04225352112678 530.390243902439,110.01408450704227 610,107 C 689.609756097561,103.98591549295773 762.3902439024391,153.98591549295773 831,159 C 899.6097560975609,164.01408450704227 964.0487804878048,124.04225352112675 1023,118 C 1081.9512195121952,111.95774647887325 1135.4146341463415,139.84507042253523 1204,148 C 1272.5853658536585,156.15492957746477 1356.2926829268292,144.57746478873239 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        50% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 78.25901751975266,129.26794915836481 156.51803503950532,125.53589831672963 225,138 C 293.4819649604947,150.46410168327037 352.1868773617314,179.12435589144627 419,164 C 485.8131226382686,148.87564410855373 560.7344555135693,89.96667811748539 632,83 C 703.2655444864307,76.03332188251461 770.8753005839918,121.00893163861218 829,142 C 887.1246994160082,162.99106836138782 935.7643421504638,159.99759532806593 1013,149 C 1090.2356578495362,138.00240467193407 1196.0673308141531,119.00068704912401 1272,115 C 1347.9326691858469,110.99931295087599 1393.9663345929234,121.999656475438 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        75% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 90.04671934043284,120.66815527310203 180.0934386808657,108.33631054620407 239,102 C 297.9065613191343,95.66368945379593 325.67296461697015,95.32291308828579 383,117 C 440.32703538302985,138.6770869117142 527.2147028512538,182.3720371006527 611,173 C 694.7852971487462,163.6279628993473 775.4682239780144,101.1889385091034 839,87 C 902.5317760219856,72.8110614908966 948.9124012366885,106.87220886293372 1012,129 C 1075.0875987633115,151.12779113706628 1154.882171075232,161.3222260391618 1229,160 C 1303.117828924768,158.6777739608382 1371.558914462384,145.8388869804191 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        100% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 71.1837856406733,142.81243558914463 142.3675712813466,152.62487117828928 217,156 C 291.6324287186534,159.37512882171072 369.7135005152869,156.3129508759876 433,161 C 496.2864994847131,165.6870491240124 544.778426657506,178.12332531776025 598,169 C 651.221573342494,159.87667468223975 709.1727928546893,129.19374785297148 792,110 C 874.8272071453107,90.80625214702852 982.5304019237376,83.10168327035383 1064,93 C 1145.4695980762624,102.89831672964617 1200.7055994503608,130.3995190656132 1259,140 C 1317.2944005496392,149.6004809343868 1378.6472002748196,141.30024046719342 1440,133 C 1440,133 1440,400 1440,400 Z");
        }
      }
    </style>
    <path d="M 0,400 C 0,400 0,133 0,133 C 71.1837856406733,142.81243558914463 142.3675712813466,152.62487117828928 217,156 C 291.6324287186534,159.37512882171072 369.7135005152869,156.3129508759876 433,161 C 496.2864994847131,165.6870491240124 544.778426657506,178.12332531776025 598,169 C 651.221573342494,159.87667468223975 709.1727928546893,129.19374785297148 792,110 C 874.8272071453107,90.80625214702852 982.5304019237376,83.10168327035383 1064,93 C 1145.4695980762624,102.89831672964617 1200.7055994503608,130.3995190656132 1259,140 C 1317.2944005496392,149.6004809343868 1378.6472002748196,141.30024046719342 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#2f3c7e88" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    <style>
      .path-1 {
        animation: pathAnim-1 4s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }

      @keyframes pathAnim-1 {
        0% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 62.384060460322914,258.5180350395053 124.76812092064583,251.03607007901064 188,237 C 251.23187907935417,222.96392992098936 315.31157677773956,202.3737547234627 391,224 C 466.68842322226044,245.6262452765373 553.9855719683958,309.4689110271385 629,316 C 704.0144280316042,322.5310889728615 766.7461353486775,271.7506011679835 837,244 C 907.2538646513225,216.24939883201648 985.0298866368944,211.5286843009275 1042,232 C 1098.9701133631056,252.4713156990725 1135.1343181037444,298.1346616283064 1198,308 C 1260.8656818962556,317.8653383716936 1350.4328409481277,291.9326691858468 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        25% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 48.04328409481276,279.6324287186534 96.08656818962552,293.2648574373068 169,281 C 241.91343181037448,268.7351425626932 339.6970113363106,230.57299896942632 419,228 C 498.3029886636894,225.42700103057368 559.1253864651321,258.44314668498794 627,267 C 694.8746135348679,275.55685331501206 769.8014428031606,259.6544142906218 827,266 C 884.1985571968394,272.3455857093782 923.6688423222258,300.9391961525249 992,297 C 1060.3311576777742,293.0608038474751 1157.5231879079356,256.5888010992786 1237,246 C 1316.4768120920644,235.41119890072142 1378.2384060460322,250.7055994503607 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        50% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 50.50360700790105,276.8244589488148 101.0072140158021,287.6489178976297 181,278 C 260.9927859841979,268.3510821023703 370.4747509446926,238.22878735829613 447,221 C 523.5252490553074,203.77121264170387 567.0937822054277,199.4359326691858 614,216 C 660.9062177945723,232.5640673308142 711.1501202335966,270.02748196496054 785,290 C 858.8498797664034,309.97251803503946 956.3057368601856,312.45413947097217 1028,293 C 1099.6942631398144,273.54586052902783 1145.6269323256613,232.15596015115082 1210,224 C 1274.3730676743387,215.84403984884918 1357.1865338371695,240.9220199244246 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        75% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 49.08278941944347,260.13534867743044 98.16557883888694,254.27069735486089 173,247 C 247.83442116111306,239.72930264513911 348.4204740638956,231.05255925798693 423,239 C 497.5795259361044,246.94744074201307 546.1525249055308,271.5190656131914 606,283 C 665.8474750944692,294.4809343868086 736.9694263139813,292.87117828924767 814,294 C 891.0305736860187,295.12882171075233 973.9697698385437,298.9962212298179 1049,295 C 1124.0302301614563,291.0037787701821 1191.1514943318448,279.1439367914806 1255,273 C 1318.8485056681552,266.8560632085194 1379.4242528340776,266.4280316042597 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        100% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 62.384060460322914,258.5180350395053 124.76812092064583,251.03607007901064 188,237 C 251.23187907935417,222.96392992098936 315.31157677773956,202.3737547234627 391,224 C 466.68842322226044,245.6262452765373 553.9855719683958,309.4689110271385 629,316 C 704.0144280316042,322.5310889728615 766.7461353486775,271.7506011679835 837,244 C 907.2538646513225,216.24939883201648 985.0298866368944,211.5286843009275 1042,232 C 1098.9701133631056,252.4713156990725 1135.1343181037444,298.1346616283064 1198,308 C 1260.8656818962556,317.8653383716936 1350.4328409481277,291.9326691858468 1440,266 C 1440,266 1440,400 1440,400 Z");
        }
      }
    </style>
    <path d="M 0,400 C 0,400 0,266 0,266 C 62.384060460322914,258.5180350395053 124.76812092064583,251.03607007901064 188,237 C 251.23187907935417,222.96392992098936 315.31157677773956,202.3737547234627 391,224 C 466.68842322226044,245.6262452765373 553.9855719683958,309.4689110271385 629,316 C 704.0144280316042,322.5310889728615 766.7461353486775,271.7506011679835 837,244 C 907.2538646513225,216.24939883201648 985.0298866368944,211.5286843009275 1042,232 C 1098.9701133631056,252.4713156990725 1135.1343181037444,298.1346616283064 1198,308 C 1260.8656818962556,317.8653383716936 1350.4328409481277,291.9326691858468 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#2f3c7eff" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
  </svg>
  <footer class="bg-light text-center text-white">
    <div class="text-center p-3 bg-dark">
      Designed
      <!-- heart symbol -->
      &#10084;&#65039;
      by Inam Ullah &copy; 2021-2025.
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js" integrity="sha512-c41hNYfKMuxafVVmh5X3N/8DiGFFAV/tU2oeNk+upk/dfDAdcbx5FrjFOkFhe4MOLaKlujjkyR4Yn7vImrXjzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>