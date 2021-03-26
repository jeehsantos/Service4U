<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}


require_once('connection.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/modals.php');
include('includes/footer.php');
include('includes/scripts.php');
?>  

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
                        <div class="col-xs-6 d-flex justify-content-center">
                            <input class="text-service" id="text-service" name="search-service" size="45" type="text">
                            <a href="#" class="btn btn-primary " type="button">Search<a />
                        </div>

                    </div>
                </div>

            </div>
        </div>
         
    </section>

    <!-- Second section having the carousel with services-->
    <section class="sec2">
        <div class="services-img" >
            <div id="align-cards">
        <div class="carousel" style="height: 300px;">
  <div><img src="https://i.imgur.com/3aIutJi.png" alt="js" /></div>
  <div><img src="https://i.imgur.com/rWtGeQ0.png" alt="java" /></div>
  <div><img src="https://i.imgur.com/8946bSF.png" alt="python"/></div>
  <div><img src="https://i.imgur.com/9Hc7hjb.png" alt="kotlin" /></div>
  <div><img src="https://i.imgur.com/uZDEpjX.png" alt="scala" /></div>
  <div><img src="https://i.imgur.com/eQoyQjy.png" alt="C#" /></div>
  <div><img src="https://i.imgur.com/ko3iAbu.png" alt="PHP" /></div>
  <div><img src="https://i.imgur.com/Afkz5od.png" alt="dotnet" /></div>
</div></div>
<div id="align-cards">
<div class="carousel">
  <div ><img
                                src="https://www.flaticon.com/svg/vstatic/svg/2917/2917734.svg?token=exp=1616420095~hmac=05a6f3f8bdce4690a2be108c94895119"
                                alt="Gardening icon">
                            <h3 >Gardening</h3>
                            <p >With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="" href="#">Read more...</a></div>
  <div><img src="https://i.imgur.com/rWtGeQ0.png" alt="java" /></div>
  <div><img src="https://i.imgur.com/8946bSF.png" alt="python"/></div>
  <div><img src="https://i.imgur.com/9Hc7hjb.png" alt="kotlin" /></div>
  <div><img src="https://i.imgur.com/uZDEpjX.png" alt="scala" /></div>
  <div><img src="https://i.imgur.com/eQoyQjy.png" alt="C#" /></div>
  <div><img src="https://i.imgur.com/ko3iAbu.png" alt="PHP" /></div>
  <div><img src="https://i.imgur.com/Afkz5od.png" alt="dotnet" /></div>
</div>
</div>
            <!-- <div id="align-cards">
                <div class="carousel container" style="height: 300px;"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>

                    <div class="card text-center card-services" style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2917/2917734.svg?token=exp=1616420095~hmac=05a6f3f8bdce4690a2be108c94895119"
                                alt="Gardening icon">
                            <h3 class="card-title">Gardening</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="" href="#">Read more...</a>
                        </div>
                    </div>

                    <div class="card text-center card-services" style="background-color: blue; color: white;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/3118/3118401.svg?token=exp=1616420050~hmac=56223e0b9cf8cfdaaf07c270f4419539"
                                alt="Electrician icon">
                            <h3 class="card-title">Electrician</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="text-white" href="#">Read more...</a>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2373/2373370.svg?token=exp=1616420024~hmac=e9a3f254ac2b9cf8db6360f4eb12ae0f"
                                alt="Plumbing icon">
                            <h3 class="card-title">Plumbing</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Read more...</a>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2083/2083305.svg?token=exp=1616419953~hmac=59fbfc684929666bf466f433f586ac88"
                                alt="Tutors icon">
                            <h3 class="card-title">Tutors</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Read more...</a>
                        </div>
                    </div>

                    <div class="card text-center card-services" style="background-color: blue; color: white;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/2767/2767723.svg?token=exp=1616419866~hmac=a9245260d7b7051774b9a86a7f57e5ed"
                                alt="Construction icon">
                            <h3 class="card-title">Construction</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a class="text-white" href="#">Read more...</a>
                        </div>
                    </div>
                    <div class="card text-center card-services " style="margin-top: 20px;">
                        <div class="card-body">
                            <img class="img-center-card"
                                src="https://www.flaticon.com/svg/vstatic/svg/1995/1995470.svg?token=exp=1616419994~hmac=f827cc2efbaf4d0dbc9b4d9603f51d82"
                                alt="Mechanic icon">
                            <h3 class="card-title">Mechanic</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Read more...</a>
                        </div>
                    </div>

                </div>

            </div> -->
            <img class="img-fluid" src='./IMG/servicios-para-empresas.jpg' alt="teste">

        </div>
    

    </section>

    
    <script src="JS/landingpage.js"></script>
  