<?php
     if(isset($_POST['announce_id'])){
      if(!isset($_SESSION)) 
      {
          session_start(); 
      }
        include_once "connection.php";
        include_once "PHPEmailer/envia-email.php";
        $resultado = '';   
    $query_announce = "SELECT * FROM user_announce WHERE announce_id = '" . $_POST['announce_id'] . " 'LIMIT 1";
    $result = mysqli_query($strcon, $query_announce);
    $row_announce = mysqli_fetch_assoc($result);
     
    $price = $row_announce['price'] > 0 ? $row_announce['price'] :  "0.00 (Deal)";
    $_SESSION['announce-id'] = $row_announce['announce_id'];
    $_SESSION['announce-title'] = $row_announce['announce_title'];              
                  
                          
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
<form action="PHPEmailer/envia-email.php" method="POST">';
if(empty($_SESSION['user_id'])){
  $resultado .='<textarea class="form-control" name="message" aria-label="With textarea" disabled></textarea>
  <button type="submit" disabled onclick="MessageMeAlert()" class="btn btn-primary " name="message-btn" style="width: 150px;">Message me</button>
  <span style="color: white;background-color: rgba(236, 47, 47, 0.781);border-radius: 3px;font-size: 14px;padding: 2px;">You have to login to contact the announcer</span>';
  
 }else{
  $resultado .= ' <textarea class="form-control" name="message" aria-label="With textarea"></textarea>
  <button type="submit" onclick="MessageMeAlert()" class="btn btn-primary " name="message-btn" style="width: 150px;">Message me</button>';
  
 } 
 
$resultado .= '</div>
 
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
width="300" height="300" style="border:0;"  allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
</div>

<div class="commentSection">';
$query_comment = "SELECT * FROM review_tb WHERE announce_id = '" . $_POST['announce_id'] . " '";
$result = mysqli_query($strcon, $query_comment);

if(mysqli_num_rows($result) > 0){
  while($row_announce = mysqli_fetch_assoc($result)){
   
           
$resultado .= '
<div class="myComment">
<div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
<div class="modalReferenceContainer">
<div class="referenceImage">
<img src="IMG/AS.JPG" alt="Announcers">
</div>
<div class="referenceData">
<p>'. $row_announce['comment'] .'</p>
</div>
<div class="referenceRate">
<p class="card-text"><img src="IMG/facebookLike.png" style="width: 35px;" alt="reviews"><small class="text-muted">94%</small></p>
</div>
</div>
</div>
</div>';}
$resultado .= '

<div class="commentMyreference">
    <div class="myComment">
      <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="modalReferenceContainer">
          <div class="referenceImage">
            <img src="IMG/user-profile.jpg" alt="Announcers">
          </div>

<div class="referenceData">';}else{
 $resultado  .= '<div><h3>The announce has no reviews at the moment</h3></div>';
}
      if(empty($_SESSION['user_id'])){
              $resultado .='<textarea class="form-control" disabled aria-label="With textarea"  placeholder ="Register to drop a review"></textarea>
                  </div>
                      <div class="referenceRate">
                        <p class="card-text"><small class="text-muted">94%</small></p>
                      </div>
                  </div>
                </div>
            </div>
              <button type="submit" class="btn btn-primary" name="commentBtn" disabled>Comment</button>';
              
      }else{
  $resultado .= '<form action="addReview.php" method="POST"><textarea class="form-control" aria-label="With placeholder ="to textarea" name="messageReview" required></textarea><p class="card-text"><input type="number" class="form-control" min="1" max="5" value="5" name="review-rate" required> </p>
    <button type="submit" class="btn btn-primary" name="commentBtn">Comment</button></form></div>
  <div class="referenceRate">
     
  </div>
  
  </div>
  </div>
  </div>';
  
 }  
 $resultado .='   

</div>
</div>
</div>
</div>
';
	

	
	echo $resultado;
     }
     
?>

<script>
  function MessageMeAlert() {
    setTimeout(function () {
      alert("Your message has been sent !");
  }, 2500);
  }

  </script>