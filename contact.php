<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('connection.php');
include_once('login.php');
include('includes/modals.php');
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/contact.css" />
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="shortcut icon" href="localhost/GitHub/Service4U/IMG/service4u.ico" type="image/x-icon">
  <title>Service4u</title>
 
</head>

<body id="root">
  <header>
  <?php 
   if(isset($_SESSION['logged'])){
    include('includes/loggednavbar.php');
    }else{
    
    include('includes/navbar.php');
  }
  ?>
  </header>
  
  <section class="contactUsContainer">
    <div class="contactUsView" style="padding-top: 50px;">
      <div class="formContainer">
        <form action="https://formspree.io/f/mlearjqo" method="POST" id="my-form">
          <h3>Contact us</h3>
          <p class="formTitle">We'd love to hear from you, please sent a massage!</p>
          <div class="inputGroup">
           
            <input type="text" class="form-control" name="name" placeholder="Name"
              aria-label="Dollar amount (with dot and two decimal places)" required>
            <input type="text" class="form-control" name="email" placeholder="Email"
              aria-label="Dollar amount (with dot and two decimal places)" required>
            <input type="text" class="form-control" name="phone" placeholder="Phone"
              aria-label="Dollar amount (with dot and two decimal places)">
            <input type="text" class="form-control" name="subject" placeholder="Subject"
              aria-label="Dollar amount (with dot and two decimal places)" required>
            <textarea class="form-control" name="message" aria-label="With textarea" required></textarea>
         
            <button type="submit" class="btn btn-primary buttonSearch d-inline">Submit</button>
            <div id="status" class="d-inline"></div>
            
        </form>

      </div>
    </div>
    <div class="contactContainer">
      <div class="contactInfoContainer">
        <h4><strong>Christchurch</strong></h4>
        <p>Address: 289 Tuam Street, </p>
        <p>Christchurch Central 8011 </p>
        <p>Phone: 09 555 5490</p>
      </div>
      <div class="mapContainer">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.425104881535!2d172.64492781528415!3d-43.5351797901784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318a2027300f27%3A0x9443153dd7afeb8d!2sAspire%202%20International-%20Christchurch%20Campus!5e0!3m2!1spt-BR!2snz!4v1615859773473!5m2!1spt-BR!2snz"
          width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    </div>
  </section>
  <footer>
    <nav class="navbar fixed-bottom navFooter">
      <div class="container-fluid footerContainer">
        <img src="IMG/LSSmallWhite.png" alt="Logo service4u">
        <div class="footerNavContainer" id="navbarNav">
          <ul class="footerNav">
            <li class="nav-item">
              <a class="nav-link navLink" href="aboutus.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" href="announces.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" data-bs-toggle="modal" data-bs-target="#policy-panel"
                            href="#">Policies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" href="contact.php">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <script type="module" src="main.js"></script>
    <script>
      var form = document.getElementById("my-form");

      async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("status");
        var data = new FormData(event.target);
        fetch(event.target.action, {
          method: form.method,
          body: data,
          headers: {
            'Accept': 'application/json'
          }
        }).then(response => {
          status.innerHTML = "Thanks, email sent!";
          form.reset()
          status.classList.add('success');
        }).catch(error => {
          status.innerHTML = "Oops! There was a problem submitting your form";
          status.classList.add('error');
        });
      }
      form.addEventListener("submit", handleSubmit)
    </script>
</body>

</html>
