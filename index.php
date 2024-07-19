<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <style>
        *{ 
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
         }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
      
        input[type=number] {
        -moz-appearance: textfield;
        }
        .custom-bg{
          background-color: #2ec1ac;
        }
        .custom-bg:hover{
          background-color: #279e8c;
        }
        .availability form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }

          @media screen and (max-width: 575px){
            .availability form{
            margin-top: 25px;
           padding: 0 35px;
          }

        }
        
    </style>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">    
        <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">Empire Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#loginmodal">
            Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registermodal">
            Register
            </button>
        </div>
        </div>
    </div>
    </nav>
         
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    </div>

    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form>
        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
        NOte: your details must match with your ID (Adhaar card,passport,driving license,etc.)
        that will be required during check-in.
        </span>
        <div class="coitainer-fluid">
            <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
             <input type="text" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
             <input type="email" class="form-control shdow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">phone number</label>
             <input type="number" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">picture</label>
             <input type="file" class="form-control shdow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
             <textarea class="form-control shadow-none"rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
             <input type="number" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of birth</label>
             <input type="date" class="form-control shdow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
             <input type="password" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
             <input type="password" class="form-control shdow-none">
                </div>
            </div>
        </div>
        <div class="text-center my-1">
        <button type="submit"class="btn btn-dark shadow-none">
             REGISTER
            </button>
        </div>
      </div>      
    </form>
    </div>
  </div>
</div>

      <!-- carousel -->


<div class="container-fluid px-lg-4  mt-4"> 
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block">
      </div>
      </div>
  </div>
</div>

      <!-- check availability form -->
       <div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4"> Check Booking Availability</h5>
            <form>
              <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-in</label>
               <input type="date" class="form-control shdow-none">
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-out</label>
               <input type="date" class="form-control shdow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label class="form lable" style="font-weigth: 500;">Adult</label>
                  <select class="form-select shadow-none">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 mb-3">
                  <label class="form lable" style="font-weigth: 500;">Children</label>
                  <select class="form-select shadow-none">                    
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  </div>
                <div class="col-lg-1  mb-lg-3 mt-2">
                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                </div>

                </div>
              </div>
            </form>
          </div>
        </div>
       </div>

<!-- our rooms -->
       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>


       <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: atuo;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                     2 Rooms
                     </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                      1 BathRooms
                       </span>
                     <span class="badge bg-light text-dark  text-wrap lh-base">
                     1 Balcony
                  </span>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    3 Sofa
                     </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    Wifi
                    </span>
                   <span class="badge bg-light text-dark  text-wrap lh-base">
                    Television
                      </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                    AC
                 </span>
                 <span class="badge bg-light text-dark  text-wrap lh-base">
                   Room heater
                    </span>
                </div>
                <div class="rating mb-4 ">
               <h6 class=" mb-1">Rating</h6>
                <span class="badge rounded-pill-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
               <span class="badge bg-light text-dark  text-wrap lh-base">
                     </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2 ">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"> BOOK NOW</a>
                <a href="#" class="btn btn-sm  btn-outline-dark shadow-none"> More details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: atuo;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                     2 Rooms
                     </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                      1 BathRooms
                       </span>
                     <span class="badge bg-light text-dark  text-wrap lh-base">
                     1 Balcony
                  </span>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    3 Sofa
                     </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    Wifi
                    </span>
                   <span class="badge bg-light text-dark  text-wrap lh-base">
                    Television
                      </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                    AC
                 </span>
                 <span class="badge bg-light text-dark  text-wrap lh-base">
                   Room heater
                    </span>
                </div>
                <div class="rating mb-4 ">
               <h6 class=" mb-1">Rating</h6>
                <span class="badge rounded-pill-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
               <span class="badge bg-light text-dark  text-wrap lh-base">
                     </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2 ">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"> BOOK NOW</a>
                <a href="#" class="btn btn-sm  btn-outline-dark shadow-none"> More details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: atuo;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                     2 Rooms
                     </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                      1 BathRooms
                       </span>
                     <span class="badge bg-light text-dark  text-wrap lh-base">
                     1 Balcony
                  </span>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    3 Sofa
                     </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    Wifi
                    </span>
                   <span class="badge bg-light text-dark  text-wrap lh-base">
                    Television
                      </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                    AC
                 </span>
                 <span class="badge bg-light text-dark  text-wrap lh-base">
                   Room heater
                    </span>
                </div>
                <div class="rating mb-4 ">
               <h6 class=" mb-1">Rating</h6>
                <span class="badge rounded-pill-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
               <span class="badge bg-light text-dark  text-wrap lh-base">
                     </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2 ">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"> BOOK NOW</a>
                <a href="#" class="btn btn-sm  btn-outline-dark shadow-none"> More details</a>
                </div>
              </div>
            </div>


          </div>
          <div class="lg-12 text-center mt-5 my-3">
            <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
          </div>
        </div>
       </div>

       <br><br><br>
       <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


   <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,

      }
    });
  </script>
</body>
</html>