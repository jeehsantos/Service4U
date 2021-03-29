 <!-- Footer section -->
 <footer class="footer-bar">

<div class="row">
    <div class="col-6">
        <img class="brand-img-footer" src="IMG/LSSmallWhite.png" alt="logo"><span
            class="text-white">Service4U</span></img>
    </div>
    <div class="col-6 footer-links">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" id="navigation-link" href="./aboutus.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="navigation-link" href="./announces.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="navigation-link"  data-bs-toggle="modal" data-bs-target="#policy-panel"
                            href="#">Policies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="navigation-link" href="./contact.php">Contact Us</a>
            </li>
        </ul>
        
    </div>
</div>

</footer>

    
<script src="JS/landingpage.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>


<!-- JavaScript Bundle with Popper -->

    
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