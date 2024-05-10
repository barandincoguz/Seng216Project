<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      

html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}


    /* Remove the navbar's default margin-bottom and rounded borders */ 

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .full-height  { 
      height: 85vh;
    }
   
    #parag { 
      background: red;
    background: -webkit-linear-gradient(left, orange , yellow, green, cyan, blue, violet);
    background: -o-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: -moz-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: linear-gradient(to right, orange , yellow, green, cyan, blue, violet);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;  
    font-weight: 600;
    font-size: 1.25rem;
    }
    #welcome{ 
      background: red;
    background: -webkit-linear-gradient(left, orange , yellow, green, cyan, blue, violet);
    background: -o-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: -moz-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: linear-gradient(to right, orange , yellow, green, cyan, blue, violet);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;  
    font-size: 2.75em;
    }
    hr.colored {
  border: 0;   /* in order to override TWBS stylesheet */
  height: 5px;

  background: -moz-linear-gradient(left, rgba(196,222,138,1) 0%, rgba(196,222,138,1) 12.5%, rgba(245,253,212,1) 12.5%, rgba(245,253,212,1) 25%, rgba(255,208,132,1) 25%, rgba(255,208,132,1) 37.5%, rgba(242,122,107,1) 37.5%, rgba(242,122,107,1) 50%, rgba(223,157,185,1) 50%, rgba(223,157,185,1) 62.5%, rgba(192,156,221,1) 62.5%, rgba(192,156,221,1) 75%, rgba(95,156,217,1) 75%, rgba(95,156,217,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 100%);  /* FF3.6+ */
  background: -webkit-linear-gradient(left, rgba(196,222,138,1) 0%, rgba(196,222,138,1) 12.5%, rgba(245,253,212,1) 12.5%, rgba(245,253,212,1) 25%, rgba(255,208,132,1) 25%, rgba(255,208,132,1) 37.5%, rgba(242,122,107,1) 37.5%, rgba(242,122,107,1) 50%, rgba(223,157,185,1) 50%, rgba(223,157,185,1) 62.5%, rgba(192,156,221,1) 62.5%, rgba(192,156,221,1) 75%, rgba(95,156,217,1) 75%, rgba(95,156,217,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(left, rgba(196,222,138,1) 0%, rgba(196,222,138,1) 12.5%, rgba(245,253,212,1) 12.5%, rgba(245,253,212,1) 25%, rgba(255,208,132,1) 25%, rgba(255,208,132,1) 37.5%, rgba(242,122,107,1) 37.5%, rgba(242,122,107,1) 50%, rgba(223,157,185,1) 50%, rgba(223,157,185,1) 62.5%, rgba(192,156,221,1) 62.5%, rgba(192,156,221,1) 75%, rgba(95,156,217,1) 75%, rgba(95,156,217,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(left, rgba(196,222,138,1) 0%, rgba(196,222,138,1) 12.5%, rgba(245,253,212,1) 12.5%, rgba(245,253,212,1) 25%, rgba(255,208,132,1) 25%, rgba(255,208,132,1) 37.5%, rgba(242,122,107,1) 37.5%, rgba(242,122,107,1) 50%, rgba(223,157,185,1) 50%, rgba(223,157,185,1) 62.5%, rgba(192,156,221,1) 62.5%, rgba(192,156,221,1) 75%, rgba(95,156,217,1) 75%, rgba(95,156,217,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 100%); /* IE10+ */
  background: linear-gradient(to right, rgba(196,222,138,1) 0%, rgba(196,222,138,1) 12.5%, rgba(245,253,212,1) 12.5%, rgba(245,253,212,1) 25%, rgba(255,208,132,1) 25%, rgba(255,208,132,1) 37.5%, rgba(242,122,107,1) 37.5%, rgba(242,122,107,1) 50%, rgba(223,157,185,1) 50%, rgba(223,157,185,1) 62.5%, rgba(192,156,221,1) 62.5%, rgba(192,156,221,1) 75%, rgba(95,156,217,1) 75%, rgba(95,156,217,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 100%); /* W3C */
}

  
    
  </style>
</head>
<body>
<script src="https://kit.fontawesome.com/fca4015f4b.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
      <a class="navbar-brand text-wrap" href="#">Baran's Website <i class="fa-solid fa-eye"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class=" collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 active " aria-current="page" href="#">Home <i class="fa-solid fa-house-user"></i> </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link mx-2" href="AboutUs.php">About Us <i class="m-lg-1 fa-regular fa-address-card"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="Contact.php">Contact <i class="m-lg-1 fa-regular fa-paper-plane "></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="AddNotes.php">Add Notes <i class=" m-lg-1 fa-regular fa-clipboard"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 " href="logout.php">Log Out <i class=" m-lg-1 fa-solid fa-arrow-right-from-bracket"></i></a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<div class="container-fluid bg-transparent text-bg-primary full-height d-flex align-items-center justify-content-center">    
    <div class = "col-sm-8 h-100 text-center align-content-center w-50 "> 
      <h1 id="welcome" class="p-md-5">Welcome to the SENG216 Project </h1>
      <p  id="parag" class="text-wrap ">Welcome to the SENG216 demo page, where innovation meets exploration in the realm of software engineering. Dive into a world where code transforms ideas into reality, and creativity fuels technological advancements. Our platform serves as a gateway to a plethora of insights, tools, and resources tailored to elevate your understanding and proficiency in software engineering concepts. From foundational principles to cutting-edge technologies, embark on a journey of discovery and mastery. Join a vibrant community of learners and practitioners, driven by a shared passion for harnessing the power of code to shape the future. Let's code, collaborate, and create together!</p>
      <hr class="colored">
    </div>
</div>

<footer class="container-fluid text-center text-bg-primary bg-transparent display-6">
  <p>Thanks For Visiting Our Website <i class="fa-regular fa-heart"></i> </p>
</footer>

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>