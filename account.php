<?php
include_once('connection.php');
 
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
  <title>Service4u</title>

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
            <li class="nav-item dropdown">
              <a class="nav-link text-light bg-primary dropdown-toggle active dropDownAccount" href="#"
                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img
                  src="IMG/user.png"
                  alt="profile-img" style="width: 30px;">
                Account
              </a>
              <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item text-light" id="teste-drop" href="#" data-bs-toggle="modal"
                    data-bs-target="#profileModal"><img
                      src="./IMG/user-edit.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">Edit profile</a></li>

                <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                    data-bs-target="#myAnnouncesModal"><img
                      src="./IMG/megaphone.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">My announces</a></li>

                <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                    data-bs-target="#referencesModal"><img
                      src="IMG/plumbing.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">References</a></li>

                <li><a class="dropdown-item text-light" href="logout.php"><img
                      src="IMG/megaphone.png"
                      alt="profile-img" style="width: 30px; margin-right: 20px">Log out</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <img src="IMG/LSFullWhite.png" alt="logo service4u" width="100px text-center">


              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="homeWelcome">
      <img src="IMG/LSFullWhite.png" alt="Logo Service4u">
      <p>Hi, which service are you looking for?</p>
      <div class="inputGroup">
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
        <button type="button" class="btn btn-primary buttonSearch">Search</button>
      </div>


      <!-- Modal Profile -->
      <div>
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header modalHeader">
                <h5 class="modal-title" id="profileModalLabel">My profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body modalProfileBody">
                <div class="imageProfileContainer">
                  <div class="imageProfile"><img src="IMG/user-profile.jpg" alt="Profile image"> </div>
                  <button type="button" class="btn btn-primary">Search</button>
                </div>
                <form action="updateProfile.php" method="POST">
                <?php  
                $teste =  $_SESSION['id_user'];
                  echo "teste $teste";
                  ?>
                  <div class="inputsProfileContainer">
                    <input type="text" class="form-control" placeholder="Full name" aria-describedby="addon-wrapping">
                    <input type="text" class="form-control" placeholder="Profile image"
                      aria-describedby="addon-wrapping">
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="addon-wrapping">

                    <div class="inputsProfileGroup">
                      <input type="text" class="form-control" placeholder="Address" aria-describedby="addon-wrapping">
                      <input type="text" class="form-control" placeholder="Postcode" aria-describedby="addon-wrapping">
                    </div>
                    <div class="inputsProfileGroup">
                      <input type="text" class="form-control" placeholder="Phone" aria-describedby="addon-wrapping">
                      <input type="text" class="form-control" placeholder="City" aria-describedby="addon-wrapping">
                    </div>
                    <input type="text" class="form-control" placeholder="Password" aria-describedby="addon-wrapping">
                    <input type="text" class="form-control" placeholder="Confirm password"
                      aria-describedby="addon-wrapping">
                    <div class="buttonProfileContainer">
                      <button type="button" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal My Announces -->
      <div class="modalAnnounces">
        <div class="modal fade" id="myAnnouncesModal" tabindex="-1" aria-labelledby="myAnnouncesModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myAnnouncesModalLabel">My announces</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body myAnnouncesBody">

                <div class="cardAnnounceContainer">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="infoCardContainer">
                      <div class="colImage">
                        <img src="IMG/images/22.JPG" alt="Announcers">
                      </div>
                      <div class="colData">
                        <div class="cityName">Spreydon, Christchurch</div>
                        <h5 class="card-title cardTitle">Lorem ipsum.</h5>
                        <p class="cardText">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur maiores
                          eligendi, a nihil porro officiis fugiat ea ipsa. Quae, suscipit.</p>
                        <div class="cardRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="actionsGroupIcons">
                    <img src="IMG/pencil.png" alt="edit">
                    <img src="IMG/close.png" alt="delete">
                  </div>
                </div>

                <div class="cardAnnounceContainer">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="infoCardContainer">
                      <div class="colImage">
                        <img src="IMG/22.JPG" alt="Announcers">
                      </div>
                      <div class="colData">
                        <div class="cityName">Spreydon, Christchurch</div>
                        <h5 class="card-title cardTitle">Lorem ipsum.</h5>
                        <p class="cardText">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur maiores
                          eligendi, a nihil porro officiis fugiat ea ipsa. Quae, suscipit.</p>
                        <div class="cardRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="actionsGroupIcons">
                    <img src="IMG/pencil.png" alt="edit">
                    <img src="IMG/close.png" alt="delete">
                  </div>
                </div>

                <div class="cardAnnounceContainer">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="infoCardContainer">
                      <div class="colImage">
                        <img src="IMG/22.JPG" alt="Announcers">
                      </div>
                      <div class="colData">
                        <div class="cityName">Spreydon, Christchurch</div>
                        <h5 class="card-title cardTitle">Lorem ipsum.</h5>
                        <p class="cardText">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur maiores
                          eligendi, a nihil porro officiis fugiat ea ipsa. Quae, suscipit.</p>
                        <div class="cardRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="actionsGroupIcons">
                    <img src="IMG/pencil.png" alt="edit">
                    <img src="IMG/close.png" alt="delete">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal References -->
      <div>
        <div class="modal fade" id="referencesModal" tabindex="-1" aria-labelledby="referencesModal" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title referencesTitle" id="referencesModalLabel">References received</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/user-profile.jpg" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/AS.JPG" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/12.JPG" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>

                <div class="myComment">
                  <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="modalReferenceContainer">
                      <div class="referenceImage">
                        <img src="IMG/user-profile.jpg" alt="Announcers">
                      </div>
                      <div class="referenceData">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                  <div class="likesContainer">
                    <img src="IMG/facebookLike.png" alt="like">
                    <img src="IMG/facebookDislike.png" alt="dislike">
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>


    </section>


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
</body>

</html>