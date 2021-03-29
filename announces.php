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
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/announces.css" />
  <link rel="shortcut icon" href="http://localhost/GitHub/Service4U/IMG/service4u.ico" type="image/x-icon">   
  <title>Announces</title>
  <script type="module" src="main.js"></script>
 
   
</head>

<body>
  <div id="root">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navTop">
      <div class="container-fluid navBarImage">
        <img src="IMG/LSFullWhite.png" alt="Logo service4u">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse headNav" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link navLink" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" id="navigation-link" data-bs-toggle="modal" data-bs-target="#login-panel"
                href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLink" href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="announcesContainer">
      <div class="announcesView">
        <div class="header">
          <div class="inputContainer">
            <div class="inputGroup">
              <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                aria-describedby="addon-wrapping">
              <select class="form-select" aria-label="Default select example">
                <option selected>Subject</option>
                <option value="1">Renovation</option>
                <option value="2">Classes</option>
              </select>
              <input type="text" class="form-control" placeholder="City, suburb or country" aria-label="Username"
                aria-describedby="addon-wrapping">
              <button type="button" class="btn btn-primary">Filter</button>
              
            </div>
          </div>


        </div>

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
                $query = "SELECT * FROM user_announce";
                $result = mysqli_query($strcon, $query);        
                        
                         
                        if (!$result) die($strcon->error);
                        while($row_announce = mysqli_fetch_assoc($result)){
                          //Identfy the ID 
                          $id = $row_announce['announce_id'];
                          
                        echo '<div class="cardsContainer " >
                        <div class="card mb-3 view_data" id="'. $id .  '" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <div class="infoCardContainer">
                            <div class="colImage">
                              <img style="height: 150px;" src="https://reahomesllc.com/wp-content/uploads/2020/03/no-image-icon.png" alt="Announcers">
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
               $result->close();
               $strcon->close();
              

              ?>


          </div>
        </div>

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
           
  </div>
  
        <script src="JS/announces.js"></script>
        <script>
        CKEDITOR.replace('announce-description');
         </script>


</body>

</html>