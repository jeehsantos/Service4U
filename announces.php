<?php include('connection.php');
 
function limita_caracteres($texto , $limite, $quebra = true) {
    $tamanho = strlen($texto);

    // Verifica se o tamanho do texto é menor ou igual ao limite
    if ($tamanho <= $limite) {
        $novo_texto = $texto;
    // Se o tamanho do texto for maior que o limite
    } else {
        // Verifica a opção de quebrar o texto
        if ($quebra == true) {
            $novo_texto = trim(substr($texto, 0, $limite)).'...';
        // Se não, corta $texto na última palavra antes do limite
        } else {
            // Localiza o útlimo espaço antes de $limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
            // Corta o $texto até a posição localizada
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)).'...';
        }
    }

    // Retorna o valor formatado
    return $novo_texto;
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/announces.css" />
  <title>Service4u</title>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
              <a class="nav-link navLink" href="#" data-bs-toggle="modal"
              data-bs-target="#loginModal" data-bs-toggle="modal"
              data-bs-target="#registerModal">Login</a>
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

              <div class="addService">
                <p>Add service</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop">+</button>
              </div>
            </div>

            
              <?php 
              /*$filter = $_SESSION['filter-announce'];
              if($filter == 1 ){
                $query = "SELECT * FROM user_announce ORDER BY price ASC";  
              }elseif($filter == 2){
                $query = "SELECT * FROM user_announce ORDER BY reviews ASC";  
              }else{*/
                $query = "SELECT * FROM user_announce";
              
              
              $result = $strcon->query($query);
              if (!$result) die($strcon->error);
              $rows = $result->num_rows;
              for ($j = 0 ; $j < $rows ; ++$j)
              { 
              $result->data_seek($j);
              echo '<div class="cardsContainer">
              <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="infoCardContainer">
                  <div class="colImage">
                    <img src="IMG/Captura.JPG" alt="Announcers">
                  </div>
                  <div class="colData">
                    <div class="cityName">' . $result->fetch_assoc()['user_location'] . '</div>';
              $result->data_seek($j);
              echo '<h5 class="card-title cardTitle">' . $result->fetch_assoc()['announce_title'] . '</h5>';
              $result->data_seek($j);
              echo '<p class="cardText">' . limita_caracteres($result->fetch_assoc()['description'],150) . '</p>
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

      <!-- Modal Announce -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Announce</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="modalBodyContainer">
                <div class="announceDiv">
                  <div class="textAnnounce">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.

                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                      non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div class="sendMessage">
                    <div class="textareaButton">
                      <div class="textareaContainer">
                        <div class="priceAndReferences">
                          <p>Price $ 37 p/h</p>
                          <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample">References (22)</a>
                        </div>
                        <div class="collapse collapseReferences" id="collapseExample">
                          <div class="card card-body referencesBody">
                            <h6>References</h6>
                            <div class="referencesContact">
                              <p>name: </p>
                              <p>phone: </p>
                              <p>email: </p>
                            </div>
                            <div class="referencesContact">
                              <p>name: </p>
                              <p>phone: </p>
                              <p>email: </p>
                            </div>
                          </div>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                      </div>
                      <button type="button" class="btn btn-primary buttonSearch">Message</button>
                    </div>

                    <div class="reviewAnnounce">
                      <p>Reviews 92%</p>
                    </div>
                  </div>
                </div>
                <div class="imagesAndMap">
                  <div class="imagesCarrousel">
                    <img src="IMG/Captura.JPG" alt="Announcers">
                    <div class="carrouselContainer">
                      <img src="IMG/Captura.JPG" alt="Announcers">
                      <img src="IMG/Captura.JPG" alt="Announcers">
                      <img src="IMG/Captura.JPG" alt="Announcers">
                      <img src="IMG/Captura.JPG" alt="Announcers">
                    </div>
                  </div>
                  <div class="modalMap">
                    <img src="IMG/mapa.JPG" alt="Map">
                  </div>
                </div>
              </div>

              <div class="commentSection">
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
                      <div class="referenceRate">
                        <p class="card-text"><small class="text-muted">94%</small></p>
                      </div>
                    </div>
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
                      <div class="referenceRate">
                        <p class="card-text"><small class="text-muted">94%</small></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="commentMyreference">
                  <div class="myComment">
                    <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="modalReferenceContainer">
                        <div class="referenceImage">
                          <img src="IMG/user-profile.jpg" alt="Announcers">
                        </div>
                        <div class="referenceData">
                          <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <div class="referenceRate">
                          <p class="card-text"><small class="text-muted">94%</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary buttonSearch">Comment</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal New Service  -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">New service</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalBodyService">
              <div class="groupServiceInputs">
                <form action="registerAnnounce.php" method="POST"> 
              <select class="form-select selectAreas" name="area" aria-label="Default select example">
                  <option selected >Area</option>
                  <option value="1">Autos</option>
                  <option value="2">Classes</option>
                  <option value="3">Renovation</option>
                  <option value="4">Events</option>
                  <option value="5">Tech assistance</option>
                  <option value="6">Design and technology</option>
                </select>
                <select class="form-select selectAreas" name="process" aria-label="Default select example">
                  <option selected>Process area</option>
                  <option value="1">Construction</option>
                  <option value="2">Installation</option>
                  <option value="3">Repair and renovation</option>
                  <option value="4">General services</option>
                  <option value="5">Housing</option>
                  <option value="6">Academic</option>
                  <option value="7">sport</option>
                  <option value="8">Staff and support</option>
                  <option value="9">technology</option>
                </select>
                <input type="text" name="location" class="form-control" placeholder="Location" aria-label="Username"
                  aria-describedby="addon-wrapping">

                <div class="checkBoxesArea">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="deal" value="negociate" id="negociate" checked>
                    <label class="form-check-label" for="negociate">
                      Negotiate
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="fixed" name="deal" id="fixed">
                    <label class="form-check-label" for="fixed">
                      Fixed price
                    </label>
                  </div>
                  <input type="text" class="form-control" name="price-announce" placeholder="$0.00" aria-label="Username"
                    aria-describedby="addon-wrapping">
                </div>

                <input type="text" class="form-control" name="phone" placeholder="Phone" aria-label="Username"
                  aria-describedby="addon-wrapping">
                <input type="text" class="form-control" name="title-announce" placeholder="Title" aria-label="Username"
                  aria-describedby="addon-wrapping">
                <textarea  class="form-control" name="announce-description" aria-label="With textarea"></textarea>
              </div>

              <div class="groupServicePhoto">
                <div class="imageBorders">photo</div>
                <div class="imageButtons">
                   
                  <input type="file" class="btn btn-primary buttonSearch"> 
                </div>
                <div class="imageAddButton">
                  <button type="submit" class="btn btn-primary buttonSearch">Add</button>
                </div>
              </div>
        </form>
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
            <a class="nav-link navLink" href="#">Services</a>
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
  <script>
     CKEDITOR.replace( 'announce-description' );
 </script>
</body>

</html>