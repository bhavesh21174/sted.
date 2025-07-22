<?php
include'head.php';
?>

        <!-- Hero Start -->
        <section class="hero-3 bg-center position-relative" style="background-image: url(images/hero-3-bg.png);" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="font-weight-semibold mb-4 hero-3-title"><b>Contact Us</b></h1>
                            <p class="mb-5 text-muted subtitle w-75 mx-auto">We’re here to help you take the next step in your entrepreneurial journey. Whether you’re looking for more information about our programs.</p>
                            
                        <!--   <div>
                                <button type="button" class="btn btn-primary rounded-pill me-2">JOIN US</button>
                                <button type="button" class="btn btn-light rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#watchvideomodal">CONTACT US</button>
                            </div>-->

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content hero-modal-0 bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <video id="VisaChipCardVideo" class="w-100" controls="">
                                            <source src="" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </section>
        <!-- Hero End -->

       

        <!-- Contact us start -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Get in Touch</h2>
                        <p class="text-muted mb-5">Got questions about the STED Incubation Forum? Whether you're a student entrepreneur seeking guidance, a mentor looking to inspire, or an organization aiming to collaborate, our team is ready to connect with you and help you join our programs or partner with us!</p>
                       
                        <div>
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="text-muted form-label">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter name*" >
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="text-muted form-label">Email</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter email*">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label for="subject" class="text-muted form-label">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject.." />
                                        </div>
    
                                        <div class="mb-4 pb-2">
                                            <label for="comments" class="text-muted form-label">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter message..."></textarea>
                                        </div>
    
                                        <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end col -->

                   <div class="col-lg-5 ms-lg-auto">
                    <div class="mt-5 mt-lg-0">
                        <img src="images/contact.png" alt="" class="img-fluid d-block" />
                        <p class="text-muted mt-5 mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="mail"></i>
                            contact@sted.org.in</p>
                        <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>(+91)
                            8767020690   &nbsp &nbsp <i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>(+91)
                            9529406126</p>
                        <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>(+91)
                            7741011763 &nbsp &nbsp <i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>(+91)
                            8530333073</p>
                        <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs"
                                data-feather="map-pin"></i>STED Incubation Forum, Shirpur, Dhule(425405) </p>
                        <ul class="list-inline pt-4">
                            <li class="list-inline-item me-3">
                                <a href="https://www.linkedin.com/company/icedorgnisation/""javascript: void(0);"
                                    class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs"
                                        data-feather="facebook"></i></a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a href=" https://x.com/STEDForum""javascript: void(0);"
                                    class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs"
                                        data-feather="twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/asorg.in?igsh=aHQ1Y2RleW92OGVs""javascript: void(0);"
                                    class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs"
                                        data-feather="instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Contact us end -->

      <?php
include'footer.php';
?>