<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dr. Ringia Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

        <link rel = "icon" href = "images/hotel.jpg" type = "image/png">

        <!-- button up plugin -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <!-- BOOTSTRAP PLUG IN
        CSS only --> 
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    </head>

    <body>
        
<!-- header -->
<header class = "header" id = "header">



    <!-- navigation features -->
    <!-- <nav class="navbar ">
        

        <form class="container-fluid">

          <button class="btn" id="servicesBtn"  type="button">SERVICES</button>
          <button class="btn " id="facilitiesBtn" type="button">FACILITIES</button>
          <button class="btn " id="aboutusBtn" type="button"  > <a href="{{ url('/login') }}" target = _blank style="text-decoration=none">PMS</a></button>

         

          <button class="btn " id="aboutusBtn" type="button">ABOUT US</button>
          
        </form>
      </nav>

      
    </div>


<div class = "head-top">


 -->


  <nav>
    <ul>
            <li><a href="#" id="servicesBtn">Services</a></li>
       
      <li><a href="#" id="facilitiesBtn">Facilities</a></li>
      
      
      <li><a href="#"  id="bookBtn">Book Now</a></li>
      <li><a href="{{ url('/login') }}">PMS</a></li>
      <li><a href="#" id="aboutusBtn">About Us</a></li>
      <header>
      
      <!-- <video src="videos/hotelmontage.mp4" class="object-fit-contain" id="bg-video" playsinline autoplay muted loop ></video> -->
      <!-- <div class="video-container">
  <video class="background-video" loop autoplay>
    <source src="your-video-file.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>
 -->
 <!-- <video id="videoBG" poster="images/hotel.jpg" autoplay muted loop>
    <source src="videos/hotelmontage.mp4" type="video/mp4">
</video> -->

<!-- <video poster="#"  playsinline autoplay muted loop>
  <source src="videos/hotelmontage.mp4" type="video/mp4">
</video> -->
    </ul>
  </nav>
</header>

<!-- <header class="top">
  <nav>
    
    <ul>
      <li><a href="#">Home</a></li>
      <li class="dropdown">
        <a href="#">About</a>
        <ul class="dropdown-content">
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Our History</a></li>
        </ul>
      </li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <video poster="images/hotelmsat.jpg" id="bg-video" playsinline autoplay muted loop>
  <source src="videos/video.mp4" type="video/mp4">
</video>
</header> -->




<!-- MAIN CONTENT IN HOME PAGE -->
<div class = "head-bottom flex">
  

    <!-- BOOK NOW BUTTON -->
    <!-- <button id="bookBtn" class="btn btn-outline-light " type="button">BOOK NOW</button> -->



</div>



<button id="topBtn"><i class="fas fa-angle-double-up"></i></button>


</header>
<!-- end of header -->



<!-- fullscreen modal -->
<div id = "modal"></div>
<!-- end of fullscreen modal -->

<!-- body content  -->

<!-- SERVICES FEATURE -->
<section class = "services sec-width" id = "services">
<div class = "title">
    <h1>Services</h1>
</div>
<div class = "services-container">
    <!-- single service -->
    <article class = "service">
        <div class = "service-icon">
            <span>
                <!-- ICON -->
                <i class = "fas fa-utensils"></i>
            </span>
        </div>

        <!-- SERVICE CONTENT -->
        <div class = "service-content">
            <h2>Food Service</h2>
            <p>People now eat out more frequently than they do at home. Food and drinks consumed outside of the house are the focus of foodservice. Consumers frequent foodservice establishments for a variety of reasons, including the convenience factor, the opportunity to try out novel flavors and tastes, special occasions, and socializing.</p>
            <!-- <button type = "button" class = "btn">Know More</button> -->
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Know more
              </button>

              <!-- know more modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Food Service</h5>
                      <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Professionals in the foodservice industry today must meet rising consumer expectations. The goal for them is to deliver healthy, wholesome meals as quickly and effectively as they can, all while containing expenses and surprising and delighting customers.
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
        </div>

        <!-- Button trigger modal -->

</div>
    </article>
    <!-- end of single service -->

    <!-- single service -->
    <article class = "service">
        <div class = "service-icon">
            <span>
                <i class = "fas fa-broom"></i>
            </span>
        </div>
        <div class = "service-content">
            <h2>Housekeeping</h2>
            <p>A clean, comfortable, safe, and aesthetically pleasing atmosphere is what is meant by housekeeping. According to a different definition, "housekeeping is an operational department at a hotel that is in charge of cleanliness, maintenance, and aesthetic upkeep of rooms, public areas, back areas, and the surrounds."</p>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Know More
              </button>

              <!-- know more modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Housekeeping</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    All hotel rooms and public areas are kept clean, maintained, and aesthetically pleasing by the housekeeping crew. The housekeeping service not only promptly prepares and cleans bedrooms, but also cleans and maintains every area of the hotel to keep it looking as new and appealing as the day it first opened for business.
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
        </div>
    </article>
    <!-- end of single service -->

</div>
</section>


<!-- booking form -->
<div class = "book">

<form class = "book-form" action="{{route('reservations.store')}}" method="POST">
@csrf
    <div class = "form-item">
        <label for = "checkin-date">Check In Date: </label>
        <input type = "date"  name="checkinDate" id = "theDate"  min="{new Date().toISOString().split('T')[0]}" >
    </div>
    <div class = "form-item">
        <label for = "checkout-date">Check Out Date: </label>
        <input type = "date" name="checkoutDate" id = "checkout-date" min="{new Date().toISOString().split('T')[0]}">
    </div>
    <div class = "form-item">
        <label for = "adult">Adults: </label>
        <input type = "number" name="numAdults" min = "1" value = "1" id = "adult">
    </div>
    <div class = "form-item">
        <label for = "children">Children: </label>
        <input type = "number" name="numChildren" min = "0" value = "0" id = "children">
    </div>
   
    <div class = "form-item">
        
    <button type="submit" class="btn btn-warning" >BOOK NOW</button>
    </div>
</form>
</div>




<!-- ROOM FEATURE -->
<section class = "rooms sec-width" id = "rooms">
<div class = "title">
    <h1>Rooms</h1>
</div>
<div class = "rooms-container">
    <!-- single room -->
    <article class = "room">
        <div class = "room-image">
            <img src = "images/singleroom1.jpg" alt = "room image">
        </div>
      
        <div class = "room-text">
            <h3>Single Room</h3>
            <ul>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Good for 1 person
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Can add on 1 extra single beed (₱250.00)
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Mini fridge, closet, free wifi with complete bathroom amenities
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                   Add on breakfast (₱100.00) per person
                </li>
            </ul>
            <br>
            <br>
            <!-- KNOW MORE MODAL -->
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    SEE MORE 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="title" id="modal">Single Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <img src="images/singleroom2.jpg" alt="room">
                        <img src="images/singleroom1.jpg" alt="room">

                       
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    </div>
                </div>
            <p class = "rate">
                <br><br>
                <span>₱500.00 /</span> per day
            </p>
            <button type = "button" class = "btn">book now</button>
        </div>
    
    </article>
    <!-- end of single room -->

    <!-- single room -->
    <article class = "room">
        <div class = "room-image">
            <img src = "images/room.jpg" alt = "room image">
        </div>
        <div class = "room-text">
            <h3>Double Room</h3>
            <ul>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Good for 2 person
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Can add on  up to 2 extra single bed (₱250.00) per extra bed
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Mini fridge, closet, free wifi with complete bathroom amenities
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                   Add on breakfast (₱100.00) per person
                </li>
            </ul>
            <br>
            <br>
            <!-- KNOW MORE MODAL -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    SEE MORE 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="title" id="modal">Double Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <img src="images/doubleroom1.jpg" alt="room">
                        <img src="images/doubleroom2.jpg" alt="room">
                        <img src="images/doubleroom3.jpg" alt="room">

                       
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    </div>
                </div>
            <p class = "rate">
                <br><br>
                <span>₱750.00/</span> per day
            </p>
            <button type = "button" class = "btn">book now</button>
        </div>
    </article>
    <!-- end of single room -->
    <!-- single room -->
    <article class = "room">
        <div class = "room-image">
            <img src = "images/familyroom3.jpg" alt = "room image">
        </div>
        <div class = "room-text">
            <h3>Family Room</h3>
            <ul>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Standard set-up good for 4 persons
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Can add on up to 2-3 extra single bed (₱250.00) per single bed
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                    Mini fridge, closet, free wifi with complete bathroom amenities
                </li>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                   Add on breakfast (₱100.00) per person
                </li>
            </ul>
            <br>
            <br>
            <!-- KNOW MORE MODAL -->
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    SEE MORE 
                </button>

               
            <p class = "rate">
                <br><br>
                <span>₱1,200.00 /</span> per day
            </p>
            <button type = "button" class = "btn">book now</button>
        </div>
    </article>
    <!-- end of single room -->
</div>
</section>

<!-- FUNCTION HALL FEATURE -->
<section class = "rooms sec-width" id = "rooms">
<div class = "title">
    <h1>Function Hall</h1>
</div>
<div class = "rooms-container">
    <!-- single room -->
    <article class = "room">
        <div class = "room-image">
            <img src = "images/function.jpg" alt = "room image">
        </div>
        <div class = "room-text">
            <h3>Function Hall</h3>
            <ul>
                <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                   Can cater up to 100-150 person
                </li>
               
            </ul>
            <p>Inclusion:
            <li>
                    <i class = "fas fa-arrow-alt-circle-right"></i>
                         Air conditioned hall
                    </li>
            <li>

                    <i class = "fas fa-arrow-alt-circle-right"></i>
                         60" Smart TV
                    </li>
            <li>

                    <i class = "fas fa-arrow-alt-circle-right"></i>
                         2 Projectors
                    </li>
            <li>

                    <i class = "fas fa-arrow-alt-circle-right"></i>
                         Table and chairs with complete linens
                    </li>
                    
            </p> <!-- KNOW MORE MODAL -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
            SEE MORE 
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="title" id="exampleModalLabel">ROOM 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <img src="images/function3.jpg" alt="room1">
                    <img src="images/function2.jpg" alt="room1">
                    <img src="images/function3.jpg" alt="room1">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
                </div>
            </div>
            <p class = "rate">
                <br><br>
                <span>₱7,000.00 /</span> Per 8 hours
            </p>
            <button type = "button" class = "btn">book now</button>
        </div>
    </article>
    <!-- end of single room -->

   
    </article>
    <!-- end of single room -->
</div>
</section>
<!-- end of body content -->
    </body>

    
     <!-- footer -->
     <footer class = "footer">
            <div class = "footer-container  m1">
                <div>
                   <ul class = "social-icons">
                        <li class = "flex">


                            <!-- twitter account -->

                            <a href="https://twitter.com/Dr_Ringia_Hotel" target="_blank"> <i class = "fa fa-twitter fa-2x"></i></a>
                        </li>
                        <li class = "flex">

                            <!-- facebook account -->

                            <a href="https://www.facebook.com/profile.php?id=100085898087309" target="_blank"><i class = "fa fa-facebook fa-2x"></i></a>
                        </li>
                        
                    </ul>
                </div>

                <div>
                    <h2>Useful Link</h2>

                    <a href="{{ url('/login') }}" target = _blank>PMS</a>



                </div>

                <div>
                    <h2>Privacy</h2>

                    <a href = "#slkjs">Contact Us</a>

                </div>



                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            <a href="https://www.google.com/maps/place/Mindanao+State+University+%E2%80%93+Maigo+School+of+Arts+and+Trades/@8.1616612,123.9580786,17z/data=!3m1!4b1!4m5!3m4!1s0x3255af4c40add5a3:0xdeea30d97c53dad6!8m2!3d8.1616559!4d123.9602673"  target="_blank">Poblacion,  Maigo, Lanao del Norte Mindanao Philippines 9206</a>
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +639276191230
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            (business email)
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <script src="script.js"></script>


    </body>
</html>