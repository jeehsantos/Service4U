<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('connection.php');
include_once('login.php');
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
  <link rel="stylesheet" href="CSS/account.css" />
  <link rel="shortcut icon" href="http://localhost/GitHub/Service4U/IMG/service4u.ico" type="image/x-icon">
  <title>Service4u</title>

</head>

<body>
  <div id="root">


  <?php 
   if(isset($_SESSION['logged'])){
    include('includes/loggednavbar.php');
    }else{
    
    include('includes/navbar.php');
  }
  ?>
   

  
      


    <nav class="navbar fixed-bottom navFooter">
      <div class="container-fluid footerContainer">
        <img src="IMG/LSSmallWhite.png" alt="Logo service4u">
        <div class="footerNavContainer" id="navbarNav">
          <ul class="footerNav">
            <li class="nav-item">
              <a class="nav-link navLink" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" href="announces.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" href="#">Policies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" href="#">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <script type="module" src="main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
			function previewImagem(){
				var imagem = document.querySelector('input[name=imagem]').files[0];
				var preview = document.getElementById('imagem2');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>
</body>

</html>