<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}


require_once('connection.php');
include('includes/header.php');

 
if(isset($_SESSION['logged'])){
    include('includes/loggednavbar.php');
}else{
    
    include('includes/navbar.php');
}
include('includes/modals.php');
include('includes/footer.php');
include('includes/scripts.php');
?>  
<body id="grad-body">
    <!-- First section having the input field to search the services-->
    <section id="search-sec">
        <div class="container">
            <div class="row">
                <div class="row">
                    <img id="landing-img" src="IMG/LSFullWhite.png" alt="logo">
                </div>
                <div id="search-field">
                    <div class="row">
                        <label class="d-flex justify-content-center" for="service">
                            <h4>Hi, which service are you looking for ?</h4>
                        </label>
                    </div>
                    <div class="row">
                     
                        <form action="announces.php" method="POST">
                            <div class="col-xs-6 d-flex justify-content-center">
                                <input class="text-service" id="text-service" name="search-service" size="45" type="text">
                                <button type="submit" class="btn btn-primary" name="search-btn">Search</button>
                            
                            </div>
                        </form> 
                    </div>
                </div>

            </div>
        </div>
         
    </section>

    <!-- Second section having the carousel with services-->
    <section class="sec2">
        <div class="services-img">


            <div id="align-cards">
                <div class="carousel container" style="height: 300px;"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>

                    <div class="card text-center card-services" style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="IMG/farming.png"
                                style="height: 50px; width: 50px;" alt="Gardening icon">
                            <h3 class="card-title">Gardening</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <span> Read More...</span>
                        </div>
                    </div>

                    <div class="card text-center card-services" style="background-color: blue; color: white;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="IMG/electricity.png"
                                style="height: 50px; width: 50px;" alt="Electrician icon">
                            <h3 class="card-title">Electrician</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <span class="white-text"> Read More...</span>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="IMG/plumbing.png"
                                style="height: 50px; width: 50px;" alt="Plumbing icon">
                            <h3 class="card-title">Plumbing</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <span> Read More...</span>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                        <img class="img-center-card"
                                src="IMG/car-repair.png"
                                style="height: 50px; width: 50px;" alt="Mechanic icon">
                            <h3 class="card-title">Mechanic</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                             <span> Read More...</span>
                        </div>
                    </div>

                    <div class="card text-center card-services" style="background-color: blue; color: white;">
                        <div class="card-body">
                        <img class="img-center-card"
                                src="IMG/teaching.png"
                                style="height: 50px; width: 50px;" alt="Tutors icon">
                            <h3 class="card-title">Tutors</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <span> Read More...</span>       
                        
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;width: 200px">
                        <div class="card-body" style="width: 200px">
                        <img class="img-center-card"
                                src="IMG/carpenter.png"
                                style="height: 50px; width: 50px;" alt="Construction icon">
                            <h3 class="card-title">Construction</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <span class="white-text"> Read More...</span>
                        </div>
                    </div>

                </div>

            </div>
            <img class="img-fluid" src='./IMG/servicios-para-empresas.jpg' alt="landingpage_img">

        </div>
        </div>

    </section>
    <script>
    $('.carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 5000,
    
});

    </script>
  