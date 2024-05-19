<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap");
    body {
      display: flex;
      flex-direction: column;
    }

    #contactForm {
      width: 40rem;
      display: flex;
      flex-direction: column;
      gap: 2.5rem;
      background: #fff;
      padding: 3rem;
      border-radius: 1rem;
    }
    input,
    textarea {
      font-size: 1.6rem;
      padding: 0.7rem 1rem;
      font-weight: 400;
      border: 0.1rem solid #e1e1e1;
      font-family: "Inter", sans-serif !important;
    }
    input::placeholder,
    textarea::placeholder {
      color: #637381;
    }
    #message {
      resize: none;
    }
    button {
      background: #3056d3;
      color: #fff;
      padding: 1.3rem 2rem;
      cursor: pointer;
      font-size: 1.6rem;
      border-radius: 0.5rem;
      font-weight: 600;
      border: none;
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
@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
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
            <a class="nav-link mx-2  " aria-current="page" href="homepage.php">Home <i class="fa-solid fa-house-user"></i> </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link mx-2" href="AboutUs.php">About Us <i class="m-lg-1 fa-regular fa-address-card"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="Contact.php">Contact <i class="m-lg-1 fa-regular fa-paper-plane "></i></a>
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
<div class="contact-us m-auto">
      <form id="contactForm" action="submit_contact.php" method="post" autocomplete="off">
        <input type="text" placeholder="Your Name" id="name" name="name" required />
        <input type="email" placeholder="Your Email" id="email" name="email" required />
        <input type="tel" placeholder="Your Phone" id="phone" name="phone" minlength="9" maxlength="15" required />
        <textarea name="message" id="message" placeholder="Your Message" rows="4" required></textarea>
        <button type="submit">Send Message</button>
      </form>
</div>
<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        $.ajax({
            url: 'submit_contact.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if(response.success) {
                    alert(response.message);
                    $('#contactForm')[0].reset(); // Reset the form fields
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    });
});
</script>
</body>
</html>