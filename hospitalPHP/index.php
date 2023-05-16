<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>HospitalWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
       <div class="container d-flex">
          <img src="img/logo.jpg" class="logo">
          <div class="gap w-75"></div>

          <div class="location d-flex py-3">
            <img src="img/location.png" style="width: 16px; height: 16px;">
            <p fs-6 text>Jadavpur, Near Jadavpur University.</p>
          </div>
          <div class="gap-2 w-5 px-3"></div>
          <div class="icons d-flex py-3 justify-content-between gap-3">
            <img src="img/facebook-app-symbol.png" style="width: 20px; height:20px;">
            <img src="img/instagram (3).png" style="width: 20px; height:20px;">
            <img src="img/twitter (1).png" style="width: 20px; height:20px;">
          </div>
       </div>
       <div class="container">
        <nav class="navbar navbar-expand-lg bg-transparent">
          <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Appoinment</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blogs</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                
              </ul>
              <form class="d-flex" role="search">
                
                <img src="img/search (1).svg" style="width: 20px;">
              </form>
            </div>
          </div>
        </nav>
       </div>
    </div>
    <div class="container-fluid gx-0">
        <div class="banner d-flex">
            <div class="gap3 " style="width: 60%;"></div>
            <div class="banner-text d-flex flex-column m-auto">
                <p>Welcome to</p>
                <h1>MINERVA</h1>
                <p class="fs-4 text text-2nd">ACADEMY OF</p>
                <h6 class="fs-3 text">MEDICAL</h6>
                <h3>TECHONOLOGY</h3>
                <p>Lorem ipsum dolor sit, amet<br> consectetur adipisicing elit. </p>
                <div class="banner-button d-flex justify-content-evenly">
                  <button class="btn">READ MORE</button>
                  <button class="btn">CNTACT US</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid banner-2 gx-0" style="height:auto;">
       <div class="banner-2-style">
           <div class="container d-flex justify-content-evenly align-items-center flex-column">
               <h2 class="text-light">COURSES <span>OFFERED</span></h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
               <p>Lorem, ipsum dolor sit </p>

               <!--gallery-->
               <div class="gallery-1 d-flex justify-content-around align-items-center gap-5 flex-wrap">
                   <div class="box-1 border shadow p-3 mb-5 d-flex align-items-center justify-content-center flex-column " style="width:150px; height:150px;">
                     <img src="img/doctor-logo.png" style="width:60%;">
                     <p>Dr. Samim</p>
                     
                  </div>
                   <div class="box-1 border border shadow p-3 mb-5 d-flex align-items-center justify-content-center flex-column " style="width:150px; height:150px;" style="width:150px; height:150px;">
                    <img src="img/doctor-logo.png" style="width:60%;">
                    <p>Dr. Dhiman</p>
                  </div>
                  <div class="box-1 border border shadow p-3 mb-5 d-flex align-items-center justify-content-center flex-column " style="width:150px; height:150px;" style="width:150px; height:150px;">
                    <img src="img/doctor-logo.png" style="width:60%;">
                    <p>Dr. Dipanjana</p>
                  </div>
               </div>
           </div>
       </div>
    </div>

    <!--Banner-3-->
    <div class="container-fluid banner-3">
       <div class="container d-flex justify-content-evenly align-items-center py-5 ">
                <div class="flex-2 d-flex flex-row " style="gap:10px">
                  <div class="flex-item" style="width: 40%;">
                     <img src="img/microscope-img.jpg" style="width:100%; height:100%;">
                  </div>
                  <div class="flex-item-1 d-flex flex-column " style="width: 40%; gap:10px;">
                     <img src="img/medical_lab.jpg" style="width:100%; height: 40%;">
                     <img src="img/medical-2.jpg" style="width:100%; height: 100%;">
                  </div>
               </div> 
               <div class="flex-1">
                  <h2 class="fs-3 text">MINERVA</h2>
                  <h1 class="fs-5 text">ACADEMY PROFILE</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aut reiciendis ducimus neque! </p>
                  <button class="readmore-btn ">Read More</button>
               </div> 
                
       </div>
    </div>
    <div class="container-fluid h-auto">
        <div class="container d-flex  justify-content-evenly align-items-center">
            <div style="width: 40%;">
               <h4>OTHER</h4>
               <h2>ACTIVITIES</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit atque distinctio enim aliquam nostrum labore dolorum quae.</p>
               <div class="d-flex align-items-start justify-content-between" style="gap:10px;">
                  <div class="d-flex flex-column">
                      <div class="d-flex flex-column  align-items-center">
                         <img src="img/stethoscope.png" style="width: 60px;">
                         <h5 class="text-warning">Lorem</h5>
                         <p>Lorem ipsum dolor<br> sit amet consectetur</p>
                      </div>
                      <div class="d-flex flex-column  align-items-center">
                        <img src="img/stethoscope.png" style="width: 60px;">
                        <h5 class="text-warning">Lorem</h5>
                        <p>Lorem ipsum dolor<br> sit amet consectetur</p>
                     </div>

                  </div>
                  <div class="d-flex flex-column">
                    <div class="d-flex flex-column  align-items-center">
                      <img src="img/nurse.png" style="width: 60px;">
                      <h5 class="text-warning">Lorem</h5>
                      <p>Lorem ipsum dolor<br> sit amet consectetur</p>
                   </div>
                   <div class="d-flex flex-column  align-items-center">
                    <img src="img/nurse.png" style="width: 60px;">
                    <h5 class="text-warning">Lorem</h5>
                    <p>Lorem ipsum dolor<br> sit amet consectetur</p>
                 </div>
                  </div>
               </div>
               
            </div>
            <div  style="width: 23%;
            height: 578px;">
               <img  src="img/pexels-варвара-курочкина-10935456.jpg" style="width:100%; height:80%; margin-top:12%;">
            </div>
        </div>
    </div>
    <div class="container-fluid h-auto banner-5">
      <div class="container d-flex flex-column align-items-center justify-content-center  py-5">
           <h2 class="text-light">WHAT IS <span style="color: #0e0e0e;">LOREM</span></h2>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           </p>
           <p style="margin-top:-13px;">Lorem ipsum dolor sit. dolor sit.</p>
          <div class="d-flex  flex-wrap " style="gap:10px;">
            <div class="card bg-transparent border-light md-3" style="width: 18rem; ">
              <div class="card-body d-flex flex-column text-center align-items-center">
                <h5 class="card-title text-light">OUR MISSION</h5>
                <p class="card-subtitle mb-2 text-light">Lorem ipsum dolor sit </p>
                <p class="card-text" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat cumque, dolorum nemo perspiciatis nam, iure reprehenderit.  </p>
                <button class="readmore-btn">READ MORE</button>
              </div>
            </div>
            <div class="card bg-transparent border-light md-3" style="width: 18rem; ">
              <div class="card-body d-flex flex-column text-center align-items-center">
                <h5 class="card-title text-light">OUR MISSION</h5>
                <p class="card-subtitle mb-2 text-light">Lorem ipsum dolor sit </p>
                <p class="card-text" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat cumque, dolorum nemo perspiciatis nam, iure reprehenderit.  </p>
                <button class="readmore-btn">READ MORE</button>
              </div>
            </div>
            <div class="card bg-transparent border-light md-3" style="width: 18rem; ">
              <div class="card-body  d-flex flex-column text-center align-items-center flex-wrap">
                <h5 class="card-title text-light">OUR MISSION</h5>
                <p class="card-subtitle mb-2 text-light">Lorem ipsum dolor sit </p>
                <p class="card-text" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat cumque, dolorum nemo perspiciatis nam, iure reprehenderit.  </p>
                <button class="readmore-btn">READ MORE</button>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="container-fluid sliding-cards">
       <div class="container d-flex flex-column text-align-center align-items-center py-5">
           <h1 class="fs-1 text">TESTIMONIALS</h1>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </p>
          <p style="margin-top:-13px;">Lorem ipsum dolor sit. dolor sit.</p>

          <!--Card-Slider-->
          <div id="carouselExampleAutoplaying" class="container-fluid carousel slide " data-bs-ride="carousel">
            <div class="container d-flex align-item-center justify-content-around  carousel-inner ">
              <div class="carousel-item active">
                <!--Cards-->
          <div class="card  w-50 mb-3 bg-dark text-warning">
            <div class="card-body bg-transparent">
              
              <div class="d-flex" style="gap:10px;">
                <div  style="width:70px; height:70px; border-radius:50%; border:#fff solid 2px">
                  <img src="img/samim.jpg" class="rounded-circle border-lightt border-5" alt="..." style="width: 60px; height:65px;">
                </div>
                <div>
                  <p class="card-text" style="font-size: 11px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore delectus quo commodi deleniti officiis quis porro iusto accusamus, rem voluptates qui quidem ipsa aut, ratione dicta libero. Aliquid, quisquam rerum. Tempore delectus quo commodi deleniti officiis quis porro iusto accusamus, rem voluptates qui quidem ipsa aut, ratione dicta libero. Aliquid, quisquam rerum.</p>
              <a href="#" class="nav-link text-light">Dr.Samim</a>
                </div>
              </div>
            </div>
          </div>
              </div>
              <div class="carousel-item">
                <!--Cards-->
          <div class="card  w-50 mb-3 bg-dark text-warning">
            <div class="card-body bg-transparent">
              
              <div class="d-flex" style="gap:10px;">
                <div  style="width:70px; height:70px; border-radius:50%; border:#fff solid 2px">
                  <img src="img/doctor-img.jpg" class="rounded-circle border-lightt border-5" alt="..." style="width: 60px; height:65px;">
                </div>
                <div>
                  <p class="card-text" style="font-size: 11px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore delectus quo commodi deleniti officiis quis porro iusto accusamus, rem voluptates qui quidem ipsa aut, ratione dicta libero. Aliquid, quisquam rerum. Tempore delectus quo commodi deleniti officiis quis porro iusto accusamus, rem voluptates qui quidem ipsa aut, ratione dicta libero. Aliquid, quisquam rerum.</p>
              <a href="#" class="nav-link text-light">Dr.Dipanjona</a>
                </div>
              </div>
            </div>
          </div>
              </div>
              <div class="carousel-item">
                <!--Cards-->
          <div class="card  w-50 mb-3 bg-dark text-warning">
            <div class="card-body bg-transparent">
              
              <div class="d-flex" style="gap:10px;">
                <div  style="width:70px; height:70px; border-radius:50%; border:#fff solid 2px">
                  <img src="img/doctor-img-2.jpg" class="rounded-circle border-lightt border-5" alt="..." style="width: 60px; height:65px;">
                </div>
                <div>
                  <p class="card-text" style="font-size: 11px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore delectus quo commodi deleniti officiis quis porro iusto accusamus, rem voluptates qui quidem ipsa aut, ratione dicta libero. Aliquid, quisquam rerum. Tempore delectus quo commodi deleniti officiis quis porro iusto accusamus, rem voluptates qui quidem ipsa aut, ratione dicta libero. Aliquid, quisquam rerum.</p>
              <a href="#" class="nav-link text-light">Dr.Dhiman</a>
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
            <button class="carousel-control-prev bg-dark m-auto" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" style="width: 40px; height:40px; border-radius:50%; outline:none; border:none;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next bg-dark m-auto" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next"
            style="width: 40px; height:40px; border-radius:50%; outline:none; border:none;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
          
       </div>
    </div>
    <div class="container-fluid h-auto">
      <div class="container d-flex flex-column align-items-center">
          <h1>GALLERY</h1>
          <div class="gallery-img d-flex justify-content-evenly  flex-wrap" style="gap: 9px;">
               <div class="d-flex flex-column justify-content-evenly  flex-wrap" style="gap: 9px;">
                    <img src="img/medical_lab.jpg"/>
                    <img src="img/child_patient.jpg"/>                
               </div>
               <div class="d-flex flex-column justify-content-evenly  flex-wrap" style="gap: 9px;">
                 <img src="img/child-2.jpeg"/>
                 <img src="img/patient-care-in-hospitals.jpg"/>                
               </div>
               <div class="d-flex flex-column justify-content-evenly flex-wrap" style="gap: 9px;">
                    <img src="img/patient.jpeg"/>
                    <img src="img/doctor.png"/>                
               </div>

          </div>
          <a href="#" class="nav-link py-3">More</a>
      </div>
    </div>

    <!--Contact Us-->
    <div class="container-fluid contact-us">
      <div class="container d-flex flex-wrap py-5">
          <div style="width: 50%;">
             <h1>CONTACT DETAILS</h1>
             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia eos, nihil ab iusto optio enim magnam quos, possimus error blanditiis at facilis dolorum sed impedit porro, iste asperiores illo rem.</p>
             <div class="d-flex flex-wrap align-items-center" style="gap: 9px;">
                <img src="img/phone-receiver-silhouette.png"/>
                <div class="d-flex flex-column">
                  <h6>+91-2757647897</h6>
                  <h6>+91-5657647897</h6>
                </div>
             </div>
             <div class="d-flex flex-wrap align-items-center" style="gap: 9px;">
                <img src="img/email (2).png"/>
                <a href="#" class="nav-link my-3">samim@gmail.com</a>
             </div>
             <div class="d-flex flex-wrap align-items-center" style="gap: 9px;">
              <img src="img/location.png"/>
              <a href="#" class="nav-link my-3">Jadavpur, Near University.</a>
           </div>
           <div class="d-flex flex-wrap" style="gap: 9px;">
              <a href="#"><img src="img/facebook-app-symbol.png"/></a>
              <a href="#"><img src="img/instagram (3).png"/></a>
              <a href="#"><img src="img/twitter (1).png"/></a>

           </div>
          </div>
          <div style="width: 50%;">
            <form action="main.php" method="post" class="d-flex flex-column align-items-center justify-content-center" style="gap: 20px;">
               <input type="text" name="name" placeholder="Enter Your Name..">
               <input type="email" name="email" placeholder="Enter Your Email..">
               <textarea class="text" name="message" type="text" placeholder="Enter Your Text.."></textarea>
               <input type="submit" placeholder="Submit">
            </form>
          </div>
      </div>
    </div>
    <!--Footer-->
    <div class="container-fluid d-flex align-items-center justify-content-center text-warning bg-secondary " style="height: 50px;">
       <p>&copy;2023RKS Developed by, Rakesh Seal</p>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>