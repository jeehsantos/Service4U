<?php
     if(isset($_POST['announce_id'])){
        include_once "connection.php";
        include_once "PHPEmailer/envia-email.php";
        $resultado = '';   
    $query_announce = "SELECT * FROM user_announce WHERE announce_id = '" . $_POST['announce_id'] . " 'LIMIT 1";
    $result = mysqli_query($strcon, $query_announce);
    $row_announce = mysqli_fetch_assoc($result);
     
    $price = $row_announce['price'] > 0 ? $row_announce['price'] :  "0.00 (Deal)";
    
                   
                  
                          
    $resultado .= '
    <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="visulUsuarioModal">'.$row_announce['announce_title'].'</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="modalBodyContainer">
              <div class="announceDiv">
    <div class="textAnnounce">'. $row_announce['description'] .'</div>';
	
	$resultado .= '<div class="sendMessage">
    <div class="textareaButton">
      <div class="textareaContainer">
        <div class="priceAndReferences">
          <p>Price: $'.$price . '</p>';
	$resultado .= '<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
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
    
  </div>
</div>
<form action="PHPEmailer/envia-email.php" method="POST">
<textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<button type="submit" class="btn btn-primary buttonSearch" style="width: 150px;">Message me</button>
</div>
</form>
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
<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.425104881535!2d172.64492781528415!3d-43.5351797901784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318a2027300f27%3A0x9443153dd7afeb8d!2sAspire%202%20International-%20Christchurch%20Campus!5e0!3m2!1spt-BR!2snz!4v1615859773473!5m2!1spt-BR!2snz"
width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
</div>';
	
	
	
	echo $resultado;
     }
?>