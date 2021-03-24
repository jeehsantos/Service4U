<?php
require_once('connection.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/modals.php');
include('includes/footer.php');
include('includes/scripts.php');
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 
 
?>

 
 
    <!-- Content Section -->
    <section id="contact-us">

        <div class="contact-div">

            <div>
                <img class="policies-img" src="IMG/about-us-distributive-top.jpg" alt="About us">
            </div>
            <div class="container">
                <div class="row about-policies">
                    <div class="col-6">
                        <div>
                            <h2>About us</h2>
                            <p>Hi! We are <strong>Jefferson dos Santos</strong> and <strong>Jennipher Oropesa</strong>,
                                two IT students with a passion for creativity and technology.</p>
                            <p>
                                As IT student we truly believe in the idea to create a platform of service to solve
                                unemployed rate of NZ. We can help people who have a skill to share with everyone o
                                small companies who are trying to competitive whit big ones. </p>
                            <p><strong>Service4U</strong> is going to support those people who are waiting for this
                                opportunity. We want to see individuals achieve their goal!</p>

                        </div>

                        <div class="members-img">
                            <a href="https://www.linkedin.com/in/jeffersonmacedo/" target="_blank" rel="external"><img src="IMG/foto1.png" alt="Avatar1"></a>
                            <img src="IMG/foto2.png" alt="Avatar2">
                        </div>



                    </div>
                    <div class="col-6">

                        <div>
                            <h2>Policies</h2>
                            <p>We want <strong>Service4U</strong> to become a safe and reliable platform. Is our
                                commitment to your privacy. It is important to us that you trust Service4U and the stuff
                                we do with your personal details.</p>
                            <p>
                                This <i>policy</i> is regarding how we gather, utilize, reveal, and secure your personal
                                information. We build a vibrant culture on Service4U, and we treat our customers'
                                personal details extremely seriously. </p>
                        </div>
                        <div class="policy-bar">
                            <a class="policy-link"  data-bs-toggle="modal" data-bs-target="#policy-panel" href="#">Read our full
                                privacy policy.</a>
                        </div>


                    </div>
                </div>

            </div>

        </div>
        
    </section>
     
  