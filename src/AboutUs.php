<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style>

html {
height:100%;
}

body {
margin:0;
font-family: Arial, sans-serif;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
animation-duration:5s;
}

.content {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
background-color:rgba(255,255,255,.8);
border-radius:.25em;
box-shadow:0 0 .25em rgba(0,0,0,.25);
box-sizing:border-box;
left:50%;
position:fixed;
text-align:center;
top:50%;
transform:translate(-50%, -50%);
height: 30%;
}

h1 {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: #333;
font-size: 2.5rem;
}
@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}

p {
font-size: 1.2rem;
color: #666;
}


.carousel-control-prev,
.carousel-control-next {
background-color: rgba(0,0,0,0);
border: none;
width: 50px;
height: 100%;
opacity: 0;
position: absolute;
top: 0;
bottom: 0;
display: flex;
justify-content: center;
align-items: center;
z-index: 1;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
opacity: 0.5;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
background-image: none;
color: #fff;
font-size: 2rem;
}

.carousel-control-prev {
left: 0;
}

.carousel-control-next {
right: 0;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/fca4015f4b.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
      <a class="navbar-brand text-wrap" href="#">Baran's Website <i class="fa-solid fa-eye"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <!-- askldjghjaghjlasdhg -->
      <div class=" collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2  " aria-current="page" href="homepage.php">Home <i class="fa-solid fa-house-user"></i> </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link mx-2 active " href="AboutUs.php">About Us <i class="m-lg-1 fa-regular fa-address-card"></i></a>
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
   

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  <h1 class="w-100">
  <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h1>Welcome to Our Company</h1>
      <p>At our company, we are dedicated to excellence. We strive to exceed your expectations by delivering top-notch services and products that cater to your needs.</p>
    </div>
    <div class="carousel-item">
      <h1>Our Mission</h1>
      <p>Our mission is to empower individuals and businesses to achieve their goals. We are committed to providing innovative solutions and exceptional customer service every step of the way.</p>
    </div>
    <div class="carousel-item">
      <h1>Join Us on Our Journey</h1>
      <p>Come be a part of our journey towards success. Together, we can make a difference and create a brighter future for ourselves and our communities. Also, you can click "Contact" to connect with us!</p>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon opacity-0" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon opacity-0" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </h1>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
