<?php 
if(!isset($_SESSION)) 
{
    session_start(); 
}
include('connection.php');
include('viewAnnounce.php');
include('includes/modals.php');
 
 
if(empty($_SESSION['user_id'])){
  echo "<h5 class='message-alert' style='background-color:red; text-align: center; color: white; margin-bottom: 0px;'>You have to log in to include an announce</h5>";
}else{
  include('includes/newService.php');
} 
function limit_phrase($text , $limit, $break = true) {
  $size = strlen($text);

  // Check if the text size is smaller or similar to the limit
  if ($size <= $limit) {
      $new_text = $text;
    } else {
      //Check the break text option
      if ($break == true) {
          $new_text = trim(substr($text, 0, $limit)).'...';
      // Else, breaks the $text into the last word before the limit
    } else {
      // Search the last space before the $limit
      $last_space = strrpos(substr($text, 0, $limit), ' ');
      // Breaks the $text until the located position
      $new_text = trim(substr($text, 0, $last_space)).'...';
    }
  }

  // Returns the formated value
  return $new_text;}
  
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
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="CSS/announces.css" />
  <link rel="shortcut icon" href="http://localhost/GitHub/Service4U/IMG/service4u.ico" type="image/x-icon">
  <title>Announces</title>
 


</head>

<body>
<?php if(isset($_SESSION['logged'])){
  include('includes/loggednavbar.php');
}else{
    
    include('includes/navbar.php');
} ?>
    <div id="root">
    <section class="announcesContainer">
      <div class="announcesView">
        <form action="announces.php" method="POST">
          <div class="header">
            <div class="inputContainer">
              <div class="inputGroup">

                <input type="text" name="search-service" class="form-control" placeholder="Search" aria-label="Username"
                  aria-describedby="addon-wrapping">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Subject</option>
                  <?php include('Admin/includes/selectProcess.php'); ?>
                </select>

                <input type="text" class="form-control" placeholder="City, suburb or country" aria-label="Username"
                  aria-describedby="addon-wrapping">
                <button type="submit" class="btn btn-primary" name="search-btn">Filter</button>

              </div>
            </div>


          </div>
        </form>
        <div class="content">
          <div class="announcesCardsContainer">

            <div class="cardsFilters">
              <div class="sorted">
                <select class="form-select" name="filter-announce" aria-label="Default select example">
                  <option selected>Sorted by</option>
                  <option value="1">Price</option>
                  <option value="2">Reviews</option>
                </select>
              </div>
              <form method="POST">
                <div class="addService">
                  <p>Add service</p>
                  <button type="button" name="btn-1" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">+</button>
                </div>
              </form>
            </div>


            <?php 
               
              /*$filter = $_SESSION['filter-announce'];
              if($filter == 1 ){
                $query = "SELECT * FROM user_announce ORDER BY price ASC";  
              }elseif($filter == 2){
                $query = "SELECT * FROM user_announce ORDER BY reviews ASC";  
              }else{*/
                if(isset($_POST['search-btn'])){
                  $service_search = $_POST['search-service'];
                    
                  $query = "SELECT * FROM user_announce WHERE `announce_title` LIKE '%$service_search%'";
                 
                  $result = mysqli_query($strcon, $query);        
                        
                  if(mysqli_num_rows($result) > 0){       
                        if (!$result) die($strcon->error);
                        while($row_announce = mysqli_fetch_assoc($result)){
                          //Identfy the ID 
                          $id = $row_announce['announce_id'];
                          
                        echo '<div class="cardsContainer " >
                        <div class="card mb-3 view_data" id="'. $id .  '" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <div class="infoCardContainer">
                            <div class="colImage">
                              <img style="height: 150px;" src="IMG/Captura.JPG" alt="Announcers">
                            </div>
                            <div class="colData">
                              <div class="cityName">' . $row_announce['user_location'] . '</div>';
                          
                        echo '<h5 class="card-title cardTitle">' . $row_announce['announce_title'] . '</h5>';
                        
                        echo '<p class="cardText">' . limit_phrase($row_announce['description'],150) . '</p>
              <div class="cardRate">
                <p class="card-text"><small class="text-muted">94%</small></p>
              </div>
            </div>
          </div>
        </div>';}}else{
          echo ' <img style="height: 30%;width:30%;" src="IMG/not_found.png"><br>
          <h2>Sorry, we dont have this service at the moment.</h2>
           ';

        }

                }else{
                  
                $query = "SELECT * FROM user_announce ORDER BY announce_id DESC";
                $result = mysqli_query($strcon, $query);        
                        
                         
                        if (!$result) die($strcon->error);
                        while($row_announce = mysqli_fetch_assoc($result)){
                          //Identfy the ID 
                          $id = $row_announce['announce_id'];
                          
                        echo '<div class="cardsContainer " >
                        <div class="card mb-3 view_data" id="'. $id .  '" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <div class="infoCardContainer">
                            <div class="colImage">
                              <img style="height: 150px;" src="IMG/Captura.JPG" alt="Announcers">
                            </div>
                            <div class="colData">
                              <div class="cityName">' . $row_announce['user_location'] . '</div>';
                          
                        echo '<h5 class="card-title cardTitle">' . $row_announce['announce_title'] . '</h5>';
                        
                        echo '<p class="cardText">' . limit_phrase($row_announce['description'],150) . '</p>
              <div class="cardRate">
                <p class="card-text"><small class="text-muted">94%</small></p>
              </div>
            </div>
          </div>
        </div>';
              
              }
            }
               $result->close();
               $strcon->close();
              
          
              ?>


          </div>

        </div>
        
      </div>
      <div class="mapContainer">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.425104881535!2d172.64492781528415!3d-43.5351797901784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318a2027300f27%3A0x9443153dd7afeb8d!2sAspire%202%20International-%20Christchurch%20Campus!5e0!3m2!1spt-BR!2snz!4v1615859773473!5m2!1spt-BR!2snz"
          width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
  </div>


  <div class="modal fade" id="viewAnnounce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="viewAnnounceContent">

    </div>
  </div>


  </section>

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
            <a class="nav-link navLink" data-bs-toggle="modal" data-bs-target="#policy-panel" href="#">Policies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navLink" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </div>
  <script type="module" src="main.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="JS/announces.js"></script>
  <script>
    CKEDITOR.replace('announce-description');
  </script>


</body>

</html>